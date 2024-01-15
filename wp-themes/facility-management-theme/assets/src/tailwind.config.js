import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      colors: {
        eseisblue: {
          50: "#C2DBFD",
          100: "#0968E9",
          200: "#0857C2",
          300: "#06459B",
          400: "#053473",
          500: "#03224C",
        },
      },
    },
  },
  plugins: [typography],
};
