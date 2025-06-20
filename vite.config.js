import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0', // 👈 expose Vite outside container
        port: 5173,      // 👈 lock to 5173 so Laravel knows where to find it
        strictPort: true // 👈 fail if taken — better for dev/debug
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
