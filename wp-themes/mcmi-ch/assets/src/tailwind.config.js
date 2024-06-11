import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  theme: {
    extend: {
      display: ["group-hover"],
      colors: {
        maincolor: {
          DEFAULT: '#5271FF',
          50: '#FFFFFF',
          100: '#F5F7FF',
          200: '#CCD5FF',
          300: '#A4B4FF',
          400: '#7B92FF',
          500: '#5271FF',
          600: '#1A43FF',
          700: '#0028E1',
          800: '#001EA9',
          900: '#001471',
          950: '#000F55'
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
