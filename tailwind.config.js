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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#F8DA5B',     // Original color
                    hover: '#FFE680',       // Hover color
                },
                secondary: {
                    DEFAULT: '#247291',  // Original color
                    hover: '#6097B7',   // Hover color
                },
            },
        },
    },

    plugins: [forms],
};
