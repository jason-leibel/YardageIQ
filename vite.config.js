import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import fs from 'fs'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        https: {
            key: fs.readFileSync(path.resolve(__dirname, 'bootstrap/nginx/key.pem')),
            cert: fs.readFileSync(path.resolve(__dirname, 'bootstrap/nginx/cert.pem')),
        },
        host: '0.0.0.0',
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
