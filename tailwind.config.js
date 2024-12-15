/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./ressources/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'header': "url('/imgs/bg-haut.png')",
      }
    },
  },
  plugins: [],
}

