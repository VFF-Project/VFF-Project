import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/general.css', 'resources/css/index/index.css', 'resources/js/index/indexImport.js', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: '192.168.1.37',
        }
    }
});
