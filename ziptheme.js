import fsp from "fs/promises";
import fs from "fs";
import path from "path";
import { temporaryDirectory } from "tempy";
import archiver from "archiver";

const dirname = "als-theme";

const rootPath = path.dirname(new URL(import.meta.url).pathname);
const dirPath = path.join(rootPath, "wp-themes", dirname);
const tempFolderPath = temporaryDirectory();
// const tempFolderPath = path.join(rootPath, 'tmp');

async function main() {
  try {
    const destinationPath = path.join(tempFolderPath, dirname);
    await copyDir(dirPath, destinationPath);

    await fsp.rm(path.join(destinationPath, "assets", "src"), {
      recursive: true,
    });

    const zipPath = path.join(rootPath, `${dirname}.zip`);
    const output = fs.createWriteStream(zipPath);
    const archive = archiver("zip", { zlib: { level: 9 } });

    output.on("close", () => {
      console.log(`Archive créée: ${zipPath}`);
    });

    archive.on("error", (err) => {
      throw err;
    });

    archive.pipe(output);
    archive.directory(destinationPath, dirname);
    archive.finalize();
  } catch (error) {
    console.error("Une erreur s'est produite :", error);
  }
}

main();

async function copyDir(src, dest) {
  // Create the destination directory if it doesn't exist
  await fsp.mkdir(dest, { recursive: true });

  // Read the contents of the source directory
  let entries = await fsp.readdir(src, { withFileTypes: true });

  for (let entry of entries) {
    let srcPath = path.join(src, entry.name);
    let destPath = path.join(dest, entry.name);

    // Check if entry is a directory or a file
    entry.isDirectory()
      ? await copyDir(srcPath, destPath)
      : await fsp.copyFile(srcPath, destPath);
  }
}
