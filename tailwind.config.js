/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors:{
      transparent: 'transparent',
      current: 'currentColor',
      'secondaryColor': '#027368',
      'primaryColor': '#BFBFBF',
      'thirdAlternative': '#EEEEEE',
      'greenShade': '#81A6A2',
      'grayFooter': '#D9D9D9',
    },

    extend: {},
  },
  plugins: [],
}
