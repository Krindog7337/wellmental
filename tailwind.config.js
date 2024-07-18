/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./content/*.php"],
  theme: {
    colors: {
      "wm-bg-light": "#f4f9ff",
      "wm-darkblue": "#316e8b",
      "wm-blue-primary": "#cde2fd",
    },
    fontFamily: {
      poppins: ["Poppins, sans-serif"],
    },
    extend: {},
  },
  plugins: [],
};
