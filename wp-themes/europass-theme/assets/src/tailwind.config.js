import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      colors: {
        europassyellow: {
          50: "#F4EBD4",
          100: "#F0E4C4",
          200: "#E8D4A4",
          300: "#E0C583",
          400: "#D7B663",
          500: "#CFA742",
        },
        europassbrown: "#362520",
      },
    },
  },
  plugins: [typography],
};
