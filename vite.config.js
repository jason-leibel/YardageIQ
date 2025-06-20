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
        // Listen on all interfaces so the dev server is reachable from the host
        // machine while still writing the correct URL to the `.hot` file.
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        origin: 'https://yardageiq.local:5173',
        cors: {
            origin: 'https://yardageiq.local',
            credentials: true,
        },
        hmr: {
            protocol: 'wss',
            host: 'yardageiq.local',
            port: 5173,
        },
        watch: {
            usePolling: true,
        },
    },
})
