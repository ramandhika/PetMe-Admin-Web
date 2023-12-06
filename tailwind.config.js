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
            width: {
                "90r": "90rem",
            },
            height: {
                "64r": "64rem",
            },
            backgroundImage: {
                "pastel-background": "url('/public/assets/img/background.png')",
            },
        },
    },
    plugins: [],
};
