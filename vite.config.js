import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'public/assets3/css/main.css'],
            refresh: ['resources/views/**/*.blade.php'], // Monitor file Blade
        }),
    ],
});
