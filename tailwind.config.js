/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "selector",
  content: ["./src/AWS_website/**/*.{html,js}"],
  theme: {
    extend: {},
  },

  plugins: ["tailwindcss ,autoprefixer"],
};
