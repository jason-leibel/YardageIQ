import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import fs from 'fs';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        https: {
            key: fs.readFileSync(
                path.resolve(__dirname, 'certs/yardageiq.local-key.pem'),
            ),
            cert: fs.readFileSync(
                path.resolve(__dirname, 'certs/yardageiq.local.pem'),
            ),
        },
        host: 'yardageiq.local',
        port: 5173,
        hmr: {
            protocol: 'wss',
            host: 'yardageiq.local',
            port: 5173,
        },
    },
});
