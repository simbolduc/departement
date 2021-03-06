module.exports = {
  purge: {
    mode: 'layers',
    content: ['./public/**/*.html/']
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      display: ['dark'],
      backgroundColor: ['dark'],
      scale: ['hover'],
      transform: ['hover'],
      borderWidth: ['last']
    },
  },
  plugins: [],
}
