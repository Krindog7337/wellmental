/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html}", "./content/*.php"],
  theme: {
    container: {
      center: true,
    },
    colors: {
      text: "rgb(var(--text))",
      background: "rgb(var(--background))",
      primary: "rgb(var(--primary) / <alpha-value>)",
      secondary: "rgb(var(--secondary) / <alpha-value>)",
      accent: "rgb(var(--accent))",
    },

    fontSize: {
      sm: "0.750rem",
      base: "1rem",
      xl: "1.333rem",
      "2xl": "1.777rem",
      "3xl": "2.369rem",
      "4xl": "3.158rem",
      "5xl": "4.210rem",
    },
    fontFamily: {
      heading: "Kaisei HarunoUmi",
      body: "Plus Jakarta Sans",
    },
    fontWeight: {
      normal: "400",
      bold: "700",
    },
    extend: {},
  },
  plugins: [],
};
