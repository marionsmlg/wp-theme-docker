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
          DEFAULT: '#362520',
          50: '#A67668',
          100: '#9C6B5D',
          200: '#835A4E',
          300: '#69483E',
          400: '#50372F',
          500: '#362520',
          600: '#130D0B',
        },
      },
    },
  },
  plugins: [typography],
};
