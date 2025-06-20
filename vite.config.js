import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import fs from 'fs'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        https: {
            key: fs.readFileSync(path.resolve(__dirname, 'bootstrap/nginx/key.pem')),
            cert: fs.readFileSync(path.resolve(__dirname, 'bootstrap/nginx/cert.pem')),
        },
        // Bind directly to the development URL to ensure the correct address
        // is written to the `.hot` file used by Laravel's asset helper.
        host: 'yardageiq.local',
        port: 5173,
        strictPort: true,
        origin: 'https://yardageiq.local', // Match exactly your browser URL
        cors: {
            origin: 'https://yardageiq.local',
            credentials: true,
        },
        hmr: {
            protocol: 'wss',
            host: 'yardageiq.local',
            port: 5173,
        },
    },
})
