/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'accent-blue': '#4dabf7',
        'letter':'#f8f9fa',
      },
    },
  },
  plugins: [],
}
