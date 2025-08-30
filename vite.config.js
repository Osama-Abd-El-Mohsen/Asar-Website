import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/page.css', 'resources/css/all.min.css', 'resources/css/normalize.css'],
            refresh: true,
        }),
    ],
});
