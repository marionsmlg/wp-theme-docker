import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      display: ["group-hover"],
      fontFamily: {
        'sans': ['Work Sans', 'sans-serif'],
        'worksans': ['Work Sans', 'sans-serif'],
      },
      colors: {
        maincolor: {
          DEFAULT: "#0EC5FF",
          50: "#C6F1FF",
          100: "#B1ECFF",
          200: "#88E2FF",
          300: "#60D9FF",
          400: "#37CFFF",
          500: "#0EC5FF",
          600: "#00A2D5",
          700: "#00779D",
          800: "#004C65",
          900: "#00222D",
          950: "#000D11",
        },
        secondarycolor: {
          DEFAULT: "#004AAC",
          50: "#65A7FF",
          100: "#509BFF",
          200: "#2784FF",
          300: "#006DFE",
          400: "#005CD5",
          500: "#004AAC",
          600: "#003274",
          700: "#001A3C",
          800: "#000204",
        },
      },
    },
  },
  plugins: [typography],
};
