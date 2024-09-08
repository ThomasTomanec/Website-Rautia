/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily : {
        'custom' : ['Roboto'],
      },
      colors: {
        'bgbrown': '#f1e4d3',
      },
    },
  },
  plugins: [],
}