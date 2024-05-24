import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      colors: {
        maincolor: {
          DEFAULT: "#F4C201",
          50: "#FFEEAE",
          100: "#FFEA9A",
          200: "#FEE171",
          300: "#FED948",
          400: "#FED020",
          500: "#F4C201",
          600: "#BC9601",
          700: "#846901",
          800: "#4C3D00",
          900: "#151000",
        },
        secondarycolor: {
          DEFAULT: "#2F2F2F",
          50: "#8B8B8B",
          100: "#818181",
          200: "#6C6C6C",
          300: "#585858",
          400: "#434343",
          500: "#2F2F2F",
          600: "#131313",
        },
      },
    },
  },
  plugins: [typography],
};
