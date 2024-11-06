import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import flowbite from 'flowbite-react/tailwind';
/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/tw-elements/js/**/*.js',
        "./node_modules/flowbite/**/*.js",
        './src/**/*.{js,jsx,ts,tsx}',
        flowbite.content(),
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    darkMode: 'media',
    safelist: [
        {
          /* We want any bg color class to be generated */
          pattern: /^bg-\w+-\d{2,3}$/,
        }
      ],
    plugins: [forms, typography,require("tw-elements/plugin.cjs"),require("flowbite/plugin"),flowbite.plugin(),require('tailwindcss-animated')],

};
