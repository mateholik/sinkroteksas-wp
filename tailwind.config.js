module.exports = {
  mode: "jit",
  content: [
    // https://tailwindcss.com/docs/content-configuration
    "./*.php",
    "./inc/**/*.php",
    "./templates/**/*.php",
    "./safelist.txt",
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    "text-center",
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    extend: {
      colors: {
        primary: "#222E50",
        secondary: "#FEC10E;",
      },
    },
  },
  plugins: [],
  corePlugins: {
    container: false,
  },
};
