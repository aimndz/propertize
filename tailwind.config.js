module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat, sans-serif"],
      },
      colors: {
        primary: {
          100: "#FFFFFF",
          200: "#B3B3B3",
          500: "#CCFF00",
          800: "#474747",
          900: "#181818",
        },
        accent: {
          300: "#FF3A3A",
          700: "#313131",
          800: "#4B4B4B",
          900: "#232323",
        },
      },
      boxShadow: {
        "header-shadow": "0px 11px 14px -4px rgba(10,10,10,0.2)",
        custom:
          "0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12)",
      },
      spacing: {
        'custom-pl-40': '40px',
      },
    },
  },
};
