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





{{-- <section class="footer mt-4 bg-primary text-white text-sm">
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
</section> --}}


<!--============================
        FOOTER PART START
    ==============================-->
<footer class="footer_2">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-sm-7 col-md-6 col-lg-3">
                <div class="wsus__footer_content">
                    <a class="wsus__footer_2_logo" href="#">
                        <img src="images/logo_horizontal_dark.svg" alt="logo">
                    </a>
                    <a class="action" href="callto:+8896254857456"><i class="fas fa-phone-alt"></i>
                        +8896254857456</a>
                    <a class="action" href="mailto:example@gmail.com"><i class="far fa-envelope"></i>
                        suporte@buhogt.com</a>
                    <p><i class="fal fa-map-marker-alt"></i> Guatemala</p>

                    <div>
                        <a href="{{route('seller_register')}}" style="padding: 10px; background: white; font-size: 0.875rem; line-height: 1.25rem; color: #272B60; border: none; font-weight: 600; margin-right: 10px; border-radius: 0.25rem;">
                            Vende en BuhoGT
                        </a>
                        <a href="#" style="padding: 10px; background: white; font-size: 0.875rem; line-height: 1.25rem; color: #272B60; border: none; font-weight: 600; border-radius: 0.25rem;">
                            Contactanos
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Tienda</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#"> Unete a buhogt</a></li>
                        <li><a href="#"> Nuestro blog</a></li>
                        <li><a href="#"> Optimiza tu tienda</a></li>
                        {{-- <li><a href="#"> Contact Us</a></li>
                        <li><a href="#"> Affilate</a></li>
                        <li><a href="#"> Order History</a></li>
                        <li><a href="#"> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Ayuda</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#">Preguntas frecuentes</a></li>
                        <li><a href="#">Configuración de cookies</a></li>
                        <li><a href="#">Como vender en Buhogt</a></li>
                        <li><a href="#">Manual de venta en Buhogt</a></li>
                        <li><a href="#"> Affilate</a></li>
                        {{-- <li><a href="#"> Order History</a></li>
                        <li><a href="#"> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-1 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Sobre nosotros</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#">Quiénes somos</a></li>
                        <li><a href="#">Politica de privacidad</a></li>
                        <li><a href="#">Politica de garantia</a></li>
                        <li><a href="#">Empleo</a></li>
                        {{-- <li><a href="#"> Affilate</a></li>
                        <li><a href="#"> Order History</a></li>
                        <li><a href="#"> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>

            <div class="col-xl-1 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Síguenos</h5>
                    <ul class="redes-sociales">
                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                        <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i> Pinterest</a></li>
                        <li><a class="behance" href="#"><i class="fab fa-behance"></i> Behance</a></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="wsus__footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="wsus__copyright d-flex justify-content-center">

                        <p style="color: #9695A8; padding-right: 20px;">Condiciones de uso</p>
                        <p style="color: #9695A8; padding-right: 20px;">Política de privacidad</p>
                        <p style="color: #9695A8; padding-right: 20px;">Política de cookies</p>
                    </div>
                    <div class="wsus__copyright d-flex justify-content-center">

                        <p style="color: #9695A8">Copyright © 2024 BuhoGT. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============================
        FOOTER PART END
    ==============================-->


<!--============================
        SCROLL BUTTON START
    ==============================-->
<div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
</div>
<!--============================
        SCROLL BUTTON  END
    ==============================-->
