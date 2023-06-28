import defaultTheme from "tailwindcss/defaultTheme";
const colors = require("tailwindcss/colors");
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Rubik", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                danger: colors.rose,
                primary: colors.rose,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },

    plugins: [
        forms,
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
