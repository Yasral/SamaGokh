/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
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

    // screens: {
    //   '2xl': {'max': '1535px'},
    //   // => @media (max-width: 1535px) { ... }

    //   'xl': {'max': '1279px'},
    //   // => @media (max-width: 1279px) { ... }

    //   'lg': {'max': '1023px'},
    //   // => @media (max-width: 1023px) { ... }

    //   'md': {'max': '767px'},
    //   // => @media (max-width: 767px) { ... }

    //   'sm': {'max': '639px'},
    //   // => @media (max-width: 639px) { ... }
    // },

    extend: {},
  },

  plugins: [
    require('flowbite/plugin')
  ],
}
