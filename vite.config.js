import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            detectTls: 'khrisna.net', 
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        https: true, // Forces Vite to use HTTPS
        host: 'khrisna.net',
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
