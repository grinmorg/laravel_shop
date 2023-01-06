import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
        watch: {
            usePolling: true,
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/styles.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
});
