/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

const utilities = plugin(({ addUtilities }) => {
    addUtilities({
        '.inset-center': {
            top: '50%',
            left: '50%',
            '@apply -translate-x-1/2 -translate-y-1/2': {},
        },
        '.inset-y-center': {
            top: '50%',
            '@apply -translate-y-1/2': {},
        },
        '.inset-x-center': {
            left: '50%',
            '@apply -translate-x-1/2': {},
        },
    })
})

module.exports = utilities
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    ".resources/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
        'forestgreen':'#0c3026',
        'othergreen': '#195A00'
      }
    },
  },
  plugins: [],
}
