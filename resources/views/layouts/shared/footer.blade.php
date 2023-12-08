@php

    $footerLinks = [
        [
            'title' => '',
            'links' => [
                'Go Pro!',
                // 'Explore development work',
                // 'Development blog',
                // 'Code podcast',
                // 'Open-source projects',
                // 'Refer a Friend',
                // 'Code of conduct',
            ],
        ],
        [
            'title' => 'Tienda',
            'links' => [
                'Unete a buhogt',
                'Nuestro blog',
                'Optimiza tu tienda',
                // 'Search for developers',
            ],
        ],
        [
            'title' => 'Tienda',
            'links' => ['Nuestro blog'],
        ],
        [
            'title' => 'Ayuda',
            'links' => ['Preguntas frecuentes', 'Configuración de cookies', 'Como vender en Buhogt'],
        ],
        [
            'title' => 'Sobre nosotros',
            'links' => [
                'Quiénes somos',
                'Politica de privacidad',
                'Politica de garantia',
                'Empleo',
                // 'Places',
            ],
        ],

        'help' => [
            'title' => 'Ayuda',
            'links' => [
                [
                    'text' => 'Preguntas frecuentes',
                    'route' => 'faq', // Reemplaza 'faq' con el nombre real de tu ruta
                ],
                [
                    'text' => 'Configuración de cookies',
                    'route' => 'home', // Reemplaza 'cookie-settings' con el nombre real de tu ruta
                ],
                [
                    'text' => 'Cómo vender en Buhogt',
                    'route' => 'home', // Reemplaza 'sell-on-buhogt' con el nombre real de tu ruta
                ],
            ],
        ],

        'followUs' => [
            'title' => 'Síguenos',
            'socialMedia' => [
                [
                    'name' => 'Instagram',
                    'link' => 'https://www.instagram.com/tucuenta',
                    'logo' => 'assets/instagram.svg',
                ],
                [
                    'name' => 'Facebook',
                    'link' => 'https://www.facebook.com/tucuenta',
                    'logo' => 'assets/facebook.svg',
                ],
                [
                    'name' => 'Twitter',
                    'link' => 'https://twitter.com/tucuenta',
                    'logo' => 'assets/twitter.svg',
                ],
                [
                    'name' => 'Pinterest',
                    'link' => 'https://www.pinterest.com/tucuenta',
                    'logo' => 'assets/pinteres.svg',
                ],
            ],
        ],
    ];

@endphp





<section class="footer mt-4 bg-primary text-white text-sm">
    <div class="max-w-10xl mx-auto py-10">
        <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-16">
            <div class="flex items-start flex-col md:w-1/2 lg:w-1/4">
                <img src="/assets/logo/logo_horizontal_dark.svg" class="w-full h-auto md:w-64 lg:w-64" alt="logo">

                <div class="flex justify-between gap-4 pt-4 font-semibold flex-wrap">
                    <button class="px-4 py-2 text-sm bg-white text-black">
                        Vende en Buhogt
                    </button>
                    <button class="px-4 py-2 text-sm bg-white text-black">
                        Contáctanos
                    </button>
                </div>
            </div>
            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="flex flex-col gap-2">

                    <p class="font-bold">
                        Tienda
                    </p>
                    @foreach ($footerLinks[1]['links'] as $link)
                        <a href="#" class="block">{{ $link }}</a>
                    @endforeach
                </div>

                <div class="flex flex-col gap-2">

                    <p class="font-bold">
                        {{ $footerLinks['help']['title'] }}
                    </p>
                    @foreach ($footerLinks['help']['links'] as $link)
                        <a href="{{ route($link['route']) }}" class="block">{{ $link['text'] }}</a>
                    @endforeach

                </div>

                <div class="flex-1 flex flex-col gap-2">
                    <p class="font-bold">
                        Sobre Nosotros
                    </p>
                    @foreach ($footerLinks[4]['links'] as $link)
                        <a href="#" class="block">{{ $link }}</a>
                    @endforeach
                </div>

                <div class="flex-1 flex flex-col gap-2">
                    <p class="font-bold">
                        Siguenos
                    </p>

                    @foreach ($footerLinks['followUs']['socialMedia'] as $socialMedia)
                        <div class="flex flex-row gap-2 items-center">
                            <img src="{{ $socialMedia['logo'] }}" alt="{{ $socialMedia['name'] }}" class="w-6 h-6">
                            <a href="{{ $socialMedia['link'] }}" class="block">

                                {{ $socialMedia['name'] }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-col items-center footer_copyright mt-6 text-[#9695A8]">
            <p class="text-gray space-x-7 ">
                <span>Condiciones de uso</span>
                <span class="">Política de privacidad </span>
                <span> Política de cookies</span>
            </p>
            <p class="mb-4 md:mb-0 mt-2">© Buhogt. Todos los derechos reservados.</p>
        </div>
    </div>
</section>
