import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      colors: {
        maincolor: {
          DEFAULT: '#CFA742',
          50: '#F4EBD4',
          100: '#F0E4C4',
          200: '#E8D4A4',
          300: '#E0C583',
          400: '#D7B663',
          500: '#CFA742',
          600: '#AD882C',
          700: '#806521',
          800: '#534215',
          900: '#271F0A',
          950: '#100D04'
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
