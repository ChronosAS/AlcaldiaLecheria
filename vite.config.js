import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

/** @type {import('tailwindcss').Config} */
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/components.css',
                'resources/js/app.js',
                'resources/css/custom.css',
                'public/vendor/ckeditor5/sample/styles.css',
                'public/vendor/ckeditor5/build/translations/es.js',
            ],
            refresh: true,
        }),
        react(),
    ]
});
