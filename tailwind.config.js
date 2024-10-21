import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Hanken Grotesk", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: "#060606",
            },
            fontSize: {
                "2xs": "0.625rem",
            },
        },
    },
    plugins: [],
};
