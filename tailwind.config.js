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

    screens: {

      'msm': '360px',
      // => @media (min-width: 360px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },

    extend: {},
  },

  plugins: [
    require('flowbite/plugin')
  ],
}
