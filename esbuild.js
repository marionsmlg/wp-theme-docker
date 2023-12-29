import esbuild from "esbuild";
import fs from "fs/promises";
import path from "path";
import esbuildStylePlugin from "esbuild-style-plugin";

const themeNames = ["mynewtheme"];

const isDev = process.argv[2] === "--dev";

// The root directory where themes are located
const themesRootDir = "wp-themes";

const devConfig = {
  minify: false,
};

const prodConfig = {
  minify: true,
};

async function main() {
  const esbuildContexts = await getESBuildContexts();

  if (isDev) {
    const watchPromises = esbuildContexts.map((esbuildContext) =>
      esbuildContext.watch()
    );
    await Promise.all(watchPromises);
    console.info("ESBuild watching...");
  } else {
    try {
      const buildPromises = esbuildContexts.map((esbuildContext) =>
        esbuildContext.rebuild()
      );
      await Promise.all(buildPromises);
    } finally {
      await Promise.all(
        esbuildContexts.map((esbuildContext) => esbuildContext.dispose())
      );
    }
  }
}
main().catch(console.error);

async function getESBuildContextTheme(themeDirPath) {
  const themeName = path.basename(themeDirPath);
  const assetsSrcDir = path.join(themeDirPath, "assets/src");
  if (!(await pathExists(assetsSrcDir))) {
    return;
  }
  const entryPoint = path.join(assetsSrcDir, "index.js");
  if (!(await pathExists(entryPoint))) {
    return;
  }

  const outdir = path.join(themeDirPath, "assets/dist");
  const postcssConfigPath = path.join(assetsSrcDir, "postcss.config.js");
  const tailwindcssConfigPath = path.join(assetsSrcDir, "tailwind.config.js");

  let esbuildStylePostcssConfig;

  if (await pathExists(postcssConfigPath)) {
    const { default: postcssConfig } = await import(`./${postcssConfigPath}`);

    const tailwindcssPluginIndex = postcssConfig.plugins.findIndex(
      function isTailwindcssFunction(element) {
        return element.postcss === true && element.name === "tailwindcss";
      }
    );

    if (tailwindcssPluginIndex !== -1) {
      // Remove tailwind plugin
      postcssConfig.plugins.splice(tailwindcssPluginIndex, 1);

      // Add tailwind plugin with content
      const { default: tailwindcssConfig } = await import(
        `./${tailwindcssConfigPath}`
      );
      if (!tailwindcssConfig.content) {
        tailwindcssConfig.content = [];
      }

      tailwindcssConfig.content.push(
        path.join(`./wp-themes/${themeName}`, `**/*.{php,html}`)
      );

      const { default: tailwindcss } = await import("tailwindcss");

      postcssConfig.plugins.push(tailwindcss(tailwindcssConfig));
    }

    esbuildStylePostcssConfig = postcssConfig;
  }

  const esbuildConfig = {
    entryPoints: [entryPoint],
    bundle: true,
    metafile: true,
    outdir,
    entryNames: "[dir]/[name].[hash]",
    ...(isDev ? devConfig : prodConfig),
  };
  if (!esbuildConfig.plugins) {
    esbuildConfig.plugins = [];
  }

  esbuildConfig.plugins.push(
    {
      name: "clean-outdir",
      setup(build) {
        build.onEnd(async (result) => {
          const { outdir } = build.initialOptions;
          const { outputs } = result.metafile;
          const outputPaths = Object.keys(outputs);

          // Delete files in outdir that are not in metafile
          const currentOutdirFiles = await fs.readdir(outdir);
          const currentOutdirFilesPaths = currentOutdirFiles.map((file) =>
            path.join(outdir, file)
          );
          const filesToDelete = currentOutdirFilesPaths.filter(
            (file) => !outputPaths.includes(file)
          );
          const deletePromises = filesToDelete.map((file) => fs.unlink(file));
          await Promise.all(deletePromises);

          // Create meta.json
          const metaJsonPath = path.join(outdir, "meta.json");
          const metaJson = JSON.stringify(
            {
              files: outputPaths.map((filepath) =>
                filepath.replace(`${outdir}/`, "")
              ),
            },
            null,
            2
          );
          await fs.writeFile(metaJsonPath, metaJson);
        });
      },
    },
    {
      name: "notify-build-end",
      setup(build) {
        build.onEnd(() => {
          console.info(`ESBuild done for theme '${themeName}'`);
        });
      },
    }
  );

  if (esbuildStylePostcssConfig) {
    esbuildConfig.plugins.push(
      esbuildStylePlugin({
        postcss: esbuildStylePostcssConfig,
      })
    );
  }

  return esbuild.context(esbuildConfig);
}

async function getESBuildContexts() {
  const themeDirPaths = themeNames.map((themeName) =>
    path.join(themesRootDir, themeName)
  );

  const buildContextsPromises = themeDirPaths.map(getESBuildContextTheme);

  const buildContexts = await Promise.all(buildContextsPromises);
  return buildContexts.filter(Boolean);
}

async function pathExists(path) {
  try {
    await fs.access(path);
    return true;
  } catch (error) {
    if (error.code === "ENOENT") {
      return false;
    } else {
      throw error;
    }
  }
}
