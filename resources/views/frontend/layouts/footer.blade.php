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
                    <ul class="wsus__footer_social">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a class="behance" href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Tienda</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#"><i class="fas fa-caret-right"></i> Unete a buhogt</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Nuestro blog</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Optimiza tu tienda</a></li>
                        {{-- <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Affilate</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Order History</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Ayuda</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#"><i class="fas fa-caret-right"></i>Preguntas frecuentes</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Configuración de cookies</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Como vender en Buhogt</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Manual de venta en Buhogt</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Affilate</a></li>
                        {{-- <li><a href="#"><i class="fas fa-caret-right"></i> Order History</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-1 col-sm-5 col-md-4 col-lg-2">
                <div class="wsus__footer_content">
                    <h5>Sobre nosotros</h5>
                    <ul class="wsus__footer_menu">
                        <li><a href="#"><i class="fas fa-caret-right"></i>Quiénes somos</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Politica de privacidad</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Politica de garantia</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Empleo</a></li>
                        {{-- <li><a href="#"><i class="fas fa-caret-right"></i> Affilate</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Order History</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-7 col-md-8 col-lg-5">
                <div class="wsus__footer_content wsus__footer_content_2">
                    <h3>Subscribe To Our Newsletter</h3>
                    <p>Get all the latest information on Events, Sales and Offers.
                        Get all the latest information on Events.</p>
                    <form>
                        <input type="text" placeholder="Search...">
                        <button type="submit" class="common_btn">subscribe</button>
                    </form>
                    <div class="footer_payment">
                        <p>We're using safe payment for :</p>
                        <img src="images/credit2.png" alt="card" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wsus__footer_bottom bg-[#272B60]">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__copyright d-flex justify-content-center">
                        <p>Copyright © 2024 BuhoGT. Todos los derechos reservados.</p>
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
