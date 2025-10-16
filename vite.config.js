import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    // ❌ JANGAN pakai base: '/build/'
    // Laravel akan otomatis handle path
    base: '',
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build',
        }),
        tailwindcss(),
    ],
})
