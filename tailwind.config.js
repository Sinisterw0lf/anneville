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
            mobile: { max: "320px" },
            // => @media (max-width: 320px) { ... }
            tablet: { min: "321px", max: "640px" },
            // => @media (min-width: 321px , max-width: 640px) { ... }
            laptop: { min: "641px", max: "1024px" },
            // => @media (min-width: 641px , max-width: 1024px) { ... }
            desktop: { min: "1025px" },
            // => @media (min-width: 1025px) { ... }
        },
    },

    presets: [require("./tailwind-preset.js")],
};
