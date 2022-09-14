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
        'button-blue':'#74c0fc',
        'grey':'#343a40',
        'border-gray':'#adb5bd',
        'gray-text':'#343a40',
      },
    },
  },
  plugins: [],
}
