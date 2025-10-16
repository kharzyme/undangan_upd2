import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build', // biar Laravel tahu lokasi manifest.json
        }),
        tailwindcss(),
    ],
})
