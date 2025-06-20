import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import fs from 'fs';

export default defineConfig({
    server: {
        host: 'yardageiq.local',
        port: 5173,
        strictPort: true,
        https: {
            key: fs.readFileSync('certs/yardageiq.local-key.pem'),
            cert: fs.readFileSync('certs/yardageiq.local.pem'),
        },
        hmr: {
            host: 'yardageiq.local',
            protocol: 'wss',
            port: 5173,
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
