import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        // 'app/Http/Livewire/**',
        // './resources/**/*.blade.php',
        // './app/Filament/**/*.php',
        // './resources/views/filament/**/*.blade.php',
        // './vendor/filament/**/*.blade.php',
        './app/Livewire/**/*.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './resources/**/*.blade.php',
    ],
}
