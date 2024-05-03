/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        develobe: {
          500: "#38B6FF"
        },
      },
      
      fontFamily: {
        montserrat: ['Montserrat'],
        poppins: ['Poppins'],
        berkshire: ['Berkshire Swash'],
      },
    },
  },
  plugins: [],
}

