import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'
import tailwindcss from 'tailwindcss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/filament/admin/theme.css'],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
                'app/Infolists/Components/**',
                'app/Providers/Filament/**',
                'app/Http/Livewire/**',
                'app/Filament/**',
                'app/Forms/Components/**',
                'app/Tables/Columns/**',
                'resources/views/**',
                'resources/**/*',
                'resources/**/*.blade.php',
            ],
            // refresh: true,

        }),
    ],


    // css: {
    //     postcss: {
    //         plugins: [tailwindcss],
    //     },
    // },
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: 'localhost'
        },

    }


});
