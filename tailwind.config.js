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
                    // DEFAULT: 'oklch(0.53 0.0834 232.52)',
                    // light: 'oklch(0.72 0.0809 232.52)',
                    DEFAULT: 'oklch(0.37 0.0686 224.05)',
                    light: 'oklch(0.61 0.0883 224.05)',
                },
            },
        },
    },

    plugins: [forms],
};
