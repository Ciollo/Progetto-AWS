/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "selector",
  content: ["./Website/**/*.{html,js}"],
  theme: {
    screens: {
      xs: "320px",
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1200px",
    },
    extend: {
      colors: {
        navyBlue: {
          DEFAULT: "#252F3E",
          50: "#7E8AA0",
          100: "#6B7693",
          200: "#576387",
          300: "#44507A",
          400: "#303C6E",
          500: "#1D2861",
          600: "#191F4E",
          700: "#14143B",
          800: "#100A28",
          900: "#0B0515",
        },
        orange: {
          DEFAULT: "#FF9900",
          50: "#FFEBCC",
          100: "#FFE3B3",
          200: "#FFD899",
          300: "#FFD080",
          400: "#FFC666",
          500: "#FFBE4D",
          600: "#FFB533",
          700: "#FFAD1A",
          800: "#FFA500",
          900: "#E69400",
        },
      },
      width: {
        "0.5xl": "36rem",
        "2xl": "42rem",
        "3xl": "48rem",
        "4xl": "56rem",
        "5xl": "64rem",
        "6xl": "72rem",
        "7xl": "80rem",
        "8xl": "88rem",
        "9xl": "96rem",
      },
    },
  },

  plugins: ["tailwindcss ,autoprefixer"],
};
