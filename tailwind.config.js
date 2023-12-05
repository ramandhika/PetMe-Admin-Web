/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/**.vue",
    ],
    theme: {
        extend: {
            colors: {
                "purple-custom": "#9188E3",
                "pastel-custom": "#FFF8B9",
            },
        },
    },
    plugins: [],
};
