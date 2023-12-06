const colors = require('tailwindcss/colors')
// import preset from './vendor/filament/support/tailwind.config.preset'

module.exports = {
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    // presets: [preset],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                nunito: ['Nunito', 'sans-serif'],
            },
            colors: {
                // danger: colors.rose,
                primary: '#252a61'

                //   primary: {
                //     '50': '#f1f4fd',
                //     '100': '#dfe7fa',
                //     '200': '#c6d5f7',
                //     '300': '#9ebaf2',
                //     '400': '#7195e9',
                //     '500': '#4f72e2',
                //     '600': '#3a54d6',
                //     '700': '#3143c4',
                //     '800': '#2e379f',
                //     '900': '#2a347e',
                //     '950': '#252a61',
                // },
                // secondary: colors.gray,
                // success: colors.green,
                // warning: colors.yellow,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
