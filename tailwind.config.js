import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "background-gray": "#F7F8FC",
                "blue": "#328AF1",
                "blue-hover": "#2879BD",
                "yellow": "#FFC73C",
                "red": "#EC454F",
                "green": "#1AAB8B",
                "purple": "#8B60ED",
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: ['0.625rem', {lineHeight: '1rem'}]
            },
            spacing: {
                44: "11rem",
                70: "17.5rem",
                175: "43.75rem",
            },
            maxWidth: {
                custom: "62.5rem",
            }
        },
    },

    plugins: [forms],
};
