/** @type {import('tailwindcss').Config} */
const color = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');
const plugin  = require('tailwindcss/plugin');


module.exports = {
  //dark mode is set to class so that we can use it in the html not to a local machine setting
  darkMode : "class",
  content: ["./**/*.{html,js,ts,jsx,tsx,php}"],
  theme: {
    extend: {
      colors: {
        'color-1' : "#F5F7FF",
        'color-2' : "#0074BE",
        'color-3' : "#0156FF",
        'color-4' : "#01A4FF",
        'color-5' : "#A2A6B0",
        'color-6' : "#CACDD8",
        'color-7' : "#000000",
        'color-8' : "#C94D3F",
          'color-9' : "#78A962",
        'color-10' : "#666666",
      },
      fontFamily: {
        'poppins': ['"Poppins"', 'sans-serif'],
      },
      borderRadius:  {
        'small': '0.25rem',
      }
    },

  },
  plugins: [],
}
