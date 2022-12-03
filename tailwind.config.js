const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            mobile: {"max": "320px"},
            // => @media (max-width: 320px) { ... }
            tablet: "640px",
            // => @media (min-width: 640px) { ... }
            laptop: "1024px",
            // => @media (min-width: 1024px) { ... }
            desktop: "1280px",
            // => @media (min-width: 1280px) { ... }
        },
    },

    presets: [require("./tailwind-preset.js")],
};
