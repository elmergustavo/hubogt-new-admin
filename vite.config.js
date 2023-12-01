import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
                'app/Filament/**',
                'app/Forms/Components/**',
                'app/Tables/Columns/**',
            ],
        }),
    ],

    server: {
        hmr: {
            host: 'localhost',
        },
    }
})