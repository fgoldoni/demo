const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            ...colors,
            transparent: 'transparent',
            current: 'currentColor',
        },
    },

    variants: {
        extend: {
            backgroundColor: ['active'],
            transitionProperty: ['hover', 'focus', 'responsive', 'motion-safe', 'motion-reduce'],
            boxShadow: ['active'],
            opacity: ['active'],
            translate: ['active', 'group-hover'],
            scrollbar: ['dark']
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwind-scrollbar')],
};
