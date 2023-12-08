@extends('components.layouts.app')


@section('content')
    @php
        $navIcons = [['src' => '/assets/icons/search.svg', 'alt' => 'search', 'href' => '/'], ['src' => '/assets/icons/like.svg', 'alt' => 'heart', 'href' => '/'], ['src' => '/assets/icons/user.svg', 'alt' => 'user', 'href' => '/login'], ['src' => '/assets/icons/card.svg', 'alt' => 'card', 'href' => '/login']];
    @endphp

    <header class="max-w-10xl mx-auto">
        <nav class="flex justify-between items-center px-6 md:px-20 py-4">
            <a href="/" class="flex items-center gap-1">
                <img src="/assets/logo/logo_horizontal.svg" alt="logo" width="180" height="180">

            </a>

            <div class="flex items-center gap-5 font-semibold">
                @foreach ($navIcons as $icon)
                    <a href="{{ $icon['href'] }}">
                        <img src="{{ $icon['src'] }}" alt="{{ $icon['alt'] }}" width="25" height="25"
                            class="object-contain">
                    </a>
                @endforeach
            </div>
        </nav>
    </header>




    @php
        $navLinks = [['href' => '/', 'key' => 'Inspiration', 'text' => 'Moda Mujer'], ['href' => '/', 'key' => 'Find Projects', 'text' => 'Moda Hombre'], ['href' => '/', 'key' => 'Learn Development', 'text' => 'Hogar & Jardín'], ['href' => '/', 'key' => 'Career Advancement', 'text' => 'Salud y Belleza'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Coleccionables y Arte'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Zapatos'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Joyería'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Cupones'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Más']];
    @endphp

    <div class="bg-[#F5F5F5] w-full text-sm font-semibold text-center flex justify-center items-center">
        <nav class="p-4">
            <ul class="flex justify-between items-center space-x-10">
                @foreach ($navLinks as $link)
                    <li class="">
                        <a href="{{ $link['href'] }}" class="flex gap-1">
                            {{ $link['text'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

    {{--
    <div class="flex justify-center items-center mt-8">
        <div class="max-w-3xl text-center">
            <img src="assets/mantenimiento.svg" alt="En Mantenimiento" />
            <p>Aún estamos contruyendo este modulo ¡Vuelve pronto!</p>
        </div>
    </div>
 --}}






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


    <livewire:faq-component />



    <section class=" mt-4 bg-primary text-white text-sm">
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
@endsection
