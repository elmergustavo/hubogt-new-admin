@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <div class="xl:px-0 mt-16">

        <section class=" grid lg:grid-cols-[1fr,400px] grid-cols-1 gap-20 max-w-7xl mx-auto lg:px-0 px-4">

            <!-- start galería de imágenes del producto -->
            <div class="h-full">
                <div class="sticky h-fit top-5 grid lg:grid-cols-[auto,1fr] grid-cols-1 gap-5">

                    <!-- start lista lateral de imágenes -->
                    <div class="h-full">
                        <div id="sidebar-preview-images" class="h-fit lg:flex hidden flex-col gap-1 ">
                            <img id="preview-1" src="https://placehold.co/100x100/d1d1d1/000?text=Hello+World+1"
                                class="border border-black hover:border-black pointer-events-none cursor-pointer rounded-md w-[60px] h-[60px] object-cover"
                                alt="image" />
                            <img id="preview-2" src="https://placehold.co/100x100/d1d1d1/000?text=Hello+World+2"
                                class="border border-transparent hover:border-black rounded-md cursor-pointer w-[60px] h-[60px] object-cover"
                                alt="image" />
                            <img id="preview-3" src="https://placehold.co/100x100/d1d1d1/000?text=Hello+World+3"
                                class="border border-transparent hover:border-black rounded-md w-[60px] cursor-pointer h-[60px] object-cover"
                                alt="image" />
                        </div>
                    </div>
                    <!-- end lista lateral de imágenes -->

                    <!-- start imagen principal -->
                    <div class="relative md:h-[550px] h-[400px]">
                        <div id="carousel"
                            class="flex snap-x snap-mandatory overflow-x-scroll md:h-[550px] h-[400px] hidden-scroll">
                            <img src="https://placehold.co/400x550/d1d1d1/000?text=Hello+World+1"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                            <img src="https://placehold.co/400x550/d1d1d1/000?text=Hello+World+2"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                            <img src="https://placehold.co/400x550/d1d1d1/000?text=Hello+World+3"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                        </div>
                        <!-- start botones Next y Previous -->
                        <button data-prev-btn
                            class="hidden absolute top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-6  md:h-9 h-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                        </button>
                        <button data-next-btn
                            class="absolute -right-0 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-6  md:h-9 h-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <!-- end botones Next y Previous -->
                    </div>
                    <!-- end imagen principal -->

                </div>
            </div>
            <!-- end galería de imágenes del producto -->

            <!-- start información del producto y compra -->
            <div class="">
                <header>
                    <div class="flex justify-between items-center gap-2">
                        <span class="underline text-lg">Tienda Primary shoes</span>
                        <div class="flex gap-5">
                            <div class="w-5 h-5 bg-gray-300"></div>
                            <div class="w-5 h-5 bg-gray-300"></div>
                        </div>
                    </div>
                    <h1 class="block my-3 text-3xl">New Balance 598X</h1>
                    <div class="w-[50%] h-5 bg-gray-200"></div>
                    <div class="flex gap-5 items-center mt-5">
                        <span class="text-2xl text-green-500 font-semibold">Q 35.38</span>
                        <span class="line-through text-sm	text-gray-500">Q 65.73</span>
                    </div>
                    <span class="text-green-500 font-semibold">Oferta del 20%</span>
                    <p>Zapato Comodo para correr largas distancias</p>
                </header>

                <section class="mt-8 flex flex-col gap-3">
                    <span>
                        Descubre todos los estilos
                    </span>

                    <div class="flex overflow-x-scroll hidden-scroll gap-8">
                        <img src=" https://placehold.co/100x100" class="flex-none rounded-md w-[45px] h-[45px] object-cover"
                            alt="image" />
                        <img src=" https://placehold.co/100x100" class="flex-none rounded-md w-[45px] h-[45px] object-cover"
                            alt="image" />
                        <img src=" https://placehold.co/100x100" class="flex-none rounded-md w-[45px] h-[45px] object-cover"
                            alt="image" />
                        <img src=" https://placehold.co/100x100" class="flex-none rounded-md w-[45px] h-[45px] object-cover"
                            alt="image" />
                    </div>
                </section>

                <section class="space-y-3 mt-8">
                    <div class="w-full relative">
                        <button id="dropdown-sizes" data-dropdown-toggle="dropdown-size-toggle"
                            class="w-full p-3 px-4  !m-0 border border-black flex items-center justify-between"
                            type="button">
                            Seleccione el tamaño
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-size-toggle"
                            class="bg-white z-10 hidden shadow w-full border border-gray-500 p-2">
                            <span class="font-semibold mb-3 block">USA size</span>
                            <ul class="" aria-labelledby="dropdown-sizes">
                                <li class="hover:bg-blue-950 hover:text-white p-2">32</li>
                                <li class="hover:bg-blue-950 hover:text-white p-2">36</li>
                                <li class="hover:bg-blue-950 hover:text-white p-2">40</li>
                            </ul>
                        </div>

                    </div>
                    <button class="font-semibold p-3 w-full text-blue-900 bg-blue-200 hover:bg-blue-300">Añadir al
                        carrito</button>

                        <a href="{{route('onboarding-pago')}}">

                            <button class="font-semibold p-3 w-full text-white bg-blue-900 hover:bg-blue-950">Comprar ahora</button>
                        </a>

                </section>

                <section class="mt-8 border border-gray-500 flex flex-col">
                    <span class=" block text-center p-3">Envió de Buhogt, vendido por 1+mes</span>

                    <hr class="border border-gray-300">

                    <div class="p-3">
                        <div class="flex justify-between">
                            <div class="w-5 h-5 bg-black"></div>
                            <span>Q35.00</span>
                        </div>
                        <span>1-3 días de trabajo</span>
                        <span class="text-orange-500 w-full flex justify-end">Gratis con plus</span>
                        <span class="">Envíos premium</span>

                    </div>

                    <hr class="border border-gray-300 mt-4">

                    <div class="p-3 flex flex-col">
                        <div class="flex justify-between">
                            <div class="w-5 h-5 bg-black"></div>
                            <span>Q25.00</span>
                        </div>
                        <span><b>3 - 5</b> Tiempo de entrega</span>
                        <span>Envíos Standard</span>

                        <span class="font-semibold text-blue-900 mt-8">Prueba por 30 días gratis</span>
                    </div>
                </section>

                <section class="mt-10">

                    <div id="accordion-options" data-accordion="collapse">
                        <h2 id="accordion-heading-materials">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white"
                                data-accordion-target="#accordion-body-materials" aria-expanded="false"
                                aria-controls="accordion-body-materials">
                                <span class="font-bold">Materiales</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-materials" class="hidden bg-gray-100 p-3 rounded"
                            aria-labelledby="accordion-heading-materials">
                            Content...
                        </div>
                        <h2 id="accordion-heading-details" class="mt-3">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white"
                                data-accordion-target="#accordion-body-details" aria-expanded="false"
                                aria-controls="accordion-body-details">
                                <span class="font-bold">Detalles</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-details" class="hidden bg-gray-100 p-3 rounded"
                            aria-labelledby="accordion-heading-details">
                            Content...
                        </div>
                        <h2 id="accordion-heading-size" class="mt-3">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white"
                                data-accordion-target="#accordion-body-size" aria-expanded="false"
                                aria-controls="accordion-body-size">
                                <span class="font-bold">Tamaño y ajustes</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-size" class="hidden bg-gray-100 p-3 rounded"
                            aria-labelledby="accordion-heading-size">
                            Content...
                        </div>
                    </div>

                </section>
            </div>
            <!-- end información del producto y compra -->

        </section>

        <!-- start sección "Más artículos de esta tienda" -->
        <section class="mt-14 max-w-7xl mx-auto mb-20 px-5">
            <header class="flex lg:flex-row flex-col gap-3">
                <h4 class="md:text-3xl text-2xl font-light md:text-start text-center ">Mas artículos de esta tienda</h4>
                <button class="lg:ml-2 ml-0 p-2 px-4 border border-black flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                    </svg>
                    Seguir
                </button>
                <button class="p-2 px-4 border border-black">Ver 1,000 artículos más</button>
            </header>

            <div class="place-items-center mt-8 grid md:grid-cols-3 lg:grid-cols-5 grid-cols-2 gap-5"
                x-data="{ items: [1, 1, 1, 1, 1] }">
                <template x-for="item in items">
                    <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto  ">
                        <div class="relative h-[200px] aspect-square w-full">
                            <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                            <button
                                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                                </svg></button>
                        </div>
                        <div class="flex gap-4 flex-col pt-3">
                            <h3 class="text-lg ">Item</h3>
                            <!-- start stars  -->
                            <div class="flex items-center justify-start md:gap-2 gap-0">
                                <span class="text-sm">4.8</span>
                                <div class="flex md:items-center items-start md:scale-[1] scale-[0.8]">
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- end stars  -->
                            <div class="flex flex-col lg:flex-row xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button class="border border-black lg:text-base text-sm p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                carrito</button>
                        </div>
                    </div>
                </template>
            </div>
        </section>
        <!-- end sección "Más artículos de esta tienda" -->

        <!-- start sección "También podría interesante" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header class="flex lg:flex-row flex-col lg:text-start text-center gap-3 justify-between">
                <div class="flex lg:flex-row flex-col lg:gap-5 gap-2 lg:items-end items-center">
                    <h4 class="md:text-3xl text-2xl font-light">También podría interesante</h4>
                    <p class="flex items-center gap-2 text-sm">
                        <span>incluyendo anuncios</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9.879 7.519c1.172-1.025 3.071-1.025 4.243 0c1.171 1.025 1.171 2.687 0 3.712a2.98 2.98 0 0 1-.67.442c-.746.361-1.452.999-1.452 1.827v.75M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0m-9 5.25h.008v.008H12z" />
                        </svg>
                    </p>
                </div>
                <button class="p-2 px-4 border border-black">Ver más</button>
            </header>

            <div class="place-items-center mt-8 grid md:grid-cols-3 lg:grid-cols-5 grid-cols-2 gap-5"
                x-data="{ items: [1, 1, 1, 1, 1] }">
                <template x-for="item in items">
                    <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto  ">
                        <div class="relative h-[200px] aspect-square w-full">
                            <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                            <button
                                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                                </svg></button>
                        </div>
                        <div class="flex gap-4 flex-col pt-3">
                            <h3 class="text-lg ">Item</h3>
                            <!-- start stars  -->
                            <div class="flex items-center justify-start md:gap-2 gap-0">
                                <span class="text-sm">4.8</span>
                                <div class="flex md:items-center items-start md:scale-[1] scale-[0.8]">
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- end stars  -->
                            <div class="flex flex-col lg:flex-row xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button class="border border-black lg:text-base text-sm p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                carrito</button>
                        </div>
                    </div>
                </template>
            </div>
        </section>
        <!-- end sección "También podría interesante" -->

        <!-- start "Tiendas similares" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header class="flex md:flex-row flex-col lg:gap-16 gap-5 md:items-end items-center">
                <h4 class=" md:text-3xl text-2xl font-semibold">Tiendas similares</h4>
                <span class="text-gray-400 text-xl">Patrocinado</span>
            </header>

            <div class="place-items-center mt-8 grid md:grid-cols-3 lg:grid-cols-4 grid-cols-2 gap-5"
                x-data="{ items: [1, 1, 1, 1] }">
                <template x-for="item in items">
                    <div class="">
                        <span class="block mb-4">Tienda Lewis</span>
                        <div class="relative w-full">
                            <img src=" http://placehold.co/500x450" class="w-full h-full object-cover rounded"
                                alt="image" />
                        </div>
                        <div class="flex gap-2 flex-col pt-3">
                            <p>descripción</p>
                            <a href=""
                                class="font-bold w-fit leading-5 md:text-base text-sm	border-b border-black ">
                                <div class="flex items-center gap-2">
                                    Visitar tienda
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
            </div>
            </template>
            </div>
        </section>
        <!-- end "Tiendas similares" -->

        <!-- start sección "Productos relacionados" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h4 class="md:text-3xl lg:text-start text-center text-2xl font-light">Productos relacionados</h4>
            </header>

            <div class="place-items-center mt-8 grid md:grid-cols-3 lg:grid-cols-5 grid-cols-2 gap-5"
                x-data="{ items: [1, 1, 1, 1, 1] }">
                <template x-for="item in items">
                    <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto  ">
                        <div class="relative h-[200px] aspect-square w-full">
                            <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                            <button
                                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                                </svg></button>
                        </div>
                        <div class="flex gap-4 flex-col pt-3">
                            <h3 class="text-lg ">Item</h3>
                            <!-- start stars  -->
                            <div class="flex items-center justify-start md:gap-2 gap-0">
                                <span class="text-sm">4.8</span>
                                <div class="flex md:items-center items-start md:scale-[1] scale-[0.8]">
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- end stars  -->
                            <div class="flex flex-col lg:flex-row xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button class="border border-black lg:text-base text-sm p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                carrito</button>
                        </div>
                    </div>
                </template>
            </div>

            <!-- start pagination -->
            <div class="w-fit mt-16 flex flex-col flex-wrap lg:mx-0 mx-auto">
                <span class="text-sm md:text-start text-center mb-8 block">Te queda mucho por descubrir</span>

                <div class="flex md:justify-between justify-center items-center gap-5">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>

                    <div class="flex md:gap-5 gap-10 md:overflow-x-auto overflow-x-scroll md:w-auto w-[170px]">
                        <a class=" w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid
            place-items-center"
                            href="">1</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">2</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">3</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">4</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">5</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">6</a>
                        <a class="w-12 h-12 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                            href="">7</a>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
            <!-- end pagination -->

        </section>
        <!-- end sección "Productos relacionados" -->

        <!-- start "Comentarios" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5 grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-16">
            <div class="flex flex-col gap-3">
                <span class="text-2xl">Calidad del articulo</span>
                <div class="h-5 w-[25%] bg-gray-300"></div>
                <span class="text-2xl">Envío</span>
                <div class="h-5 w-[25%] bg-gray-300"></div>
            </div>
            <div>
                <span class="text-2xl">Comentarios</span>
                <div class="flex flex-col gap-10 mt-5" x-data="{ items: [1, 1, 1] }">

                    <template x-for="item in items">

                        <div class="flex flex-col gap-3 text-sm">
                            <div class="h-5 w-[25%] bg-gray-300"></div>
                            <p class="text-base">Tan lindo! Va con mi decoración costera</p>
                            <span>Ver en el idioma original</span>
                            <div class="flex gap-2">
                                <b class="flex-none">Articulo comprado:</b>
                                <p class="truncate text-gray-500 underline">
                                    <a href="">Blue Beach Umbrellas Print Beach Umbrella Printable,
                                        Beach Di Print Beach Umbrella Printable,
                                        Beach Di </a>
                                </p>
                            </div>
                            <div class="flex items-center gap-4 text-gray-500 ">
                                <div class="w-10 h-10 bg-orange-200 rounded-full"></div>
                                <span class="underline">Carl Stewart</span>
                                <span class="">26 ago 2023</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-5 h-5 bg-gray-300"></div>
                                <span>¿Te ha resultado util?</span>
                            </div>
                        </div>

                    </template>

                </div>
            </div>
        </section>
        <!-- end " Comentarios" -->

        <!-- start "Explora más búsquedas relacionadas" -->
        <section class="max-w-7xl mx-auto mb-20 px-5">
            <span class="text-xl font-light block mb-10">Explora más búsquedas relacionadas</span>
            <div class="flex flex-wrap gap-2">
                <div class="border border-black p-3">arte de sombrilla de playa</div>
                <div class="border border-black p-3">playa imprimirle</div>
                <div class="border border-black p-3">Impresión de playa</div>
                <div class="border border-black p-3">Azul y blanco</div>
                <div class="border border-black p-3">fotografía de playa</div>
                <div class="border border-black p-3">descarga instantánea</div>
                <div class="border border-black p-3">Estampado playa azul</div>
                <div class="border border-black p-3">Decoración de la pared de playa</div>
            </div>

            <div class="mt-14 text-sm flex flex-wrap gap-5">
                <span>Fecha de publicación: 21 sep 2023</span>
                <div class="flex gap-2 flex-wrap">
                    <span class="underline">1058 favoritos</span>
                    <span class="underline">Informar sobre este articulo en Buhogt</span>
                </div>
            </div>

            <div class="mt-5 flex gap-1 text-sm flex-wrap">

                <a class="underline" href="">Todas las categorías</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>

                <a class="underline" href="">Arte y objetos de colección</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>

                <a class="underline" href="">Impresiones y laminas</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>
                <div class="flex items-center">
                    <a class="underline" href="">Impresiones digitales</a>

                </div>
            </div>

        </section>
        <!-- end " Explora más búsquedas relacionadas" -->

        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
        </section>
    </div>


    <script>
        const generateCategoriesMovil = () => {

            const $category_container = document.querySelector('#accordion-collapse-body-1')

            const categories = ['Moda Mujer', 'Moda Hombre', 'Hogar & Jardín', 'Salud & Belleza',
                'Coleccionables y Arte', 'Bolsos', 'Joyería', 'Más'
            ]

            let template = ''

            categories.forEach((category, index) => {
                template += `
      <div id="accordion-collapse-categoria-${index}" data-accordion="collapse" class="w-full">
        <h2 id="accordion-collapse-categoria-${index}">
          <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 gap-3"
            data-accordion-target="#accordion-categoria-${index}" aria-expanded="false"
            aria-controls="accordion-categoria-${index}">
            <span>${category}</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-categoria-${index}" class="hidden p-3"
          aria-labelledby="accordion-collapse-categoria-${index}">
          Content
        </div>
      </div>
    `
            })

            $category_container.innerHTML = template
        }
        generateCategoriesMovil()

        const carouselActions = async () => {

            const carousel = document.querySelector('#carousel');
            const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
            const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

            const item = carousel.querySelector('img')

            // Función para avanzar al siguiente grupo de elementos
            nextBtn.addEventListener('click', function() {
                carousel.scrollTo({
                    left: carousel.scrollLeft + item.clientWidth,
                    behavior: 'smooth'
                })


                let id = (carousel.scrollLeft / item.clientWidth) + 2
                const img = document.querySelector(`#preview-${id}`)
                document.querySelectorAll('#sidebar-preview-images img').forEach($img => {
                    $img.classList.add('hover:border-black', 'cursor-pointer', 'border-transparent')
                    $img.classList.remove('pointer-events-none', 'border-black')
                })

                img.classList.remove('hover:border-black', 'cursor-pointer', 'border-transparent')
                img.classList.add('pointer-events-none', 'border-black')
            });

            // Función para retroceder al grupo anterior de elementos
            prevBtn.addEventListener('click', function() {
                carousel.scrollTo({
                    left: carousel.scrollLeft - item.clientWidth,
                    behavior: 'smooth'
                })

                let id = (carousel.scrollLeft / item.clientWidth)
                const img = document.querySelector(`#preview-${id}`)
                document.querySelectorAll('#sidebar-preview-images img').forEach($img => {
                    $img.classList.add('hover:border-black', 'cursor-pointer', 'border-transparent')
                    $img.classList.remove('pointer-events-none', 'border-black')
                })

                img.classList.remove('hover:border-black', 'cursor-pointer', 'border-transparent')
                img.classList.add('pointer-events-none', 'border-black')
            });

            carousel.addEventListener('scrollend', e => {

                prevBtn.classList[
                    e.target.scrollLeft > 0 ? 'remove' : 'add'
                ]('hidden')

                nextBtn.classList[
                    (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ? 'add' :
                    'remove'
                ]('hidden')

            })

            document.querySelector('#sidebar-preview-images').addEventListener('click', e => {
                if (e.target.hasAttribute('alt')) {
                    const position_img = +e.target.id.at(-1) - 1
                    carousel.scrollTo({
                        left: item.clientWidth * position_img,
                        behavior: 'smooth'
                    })

                    document.querySelectorAll('#sidebar-preview-images img').forEach($img => {
                        $img.classList.add('hover:border-black', 'cursor-pointer',
                            'border-transparent')
                        $img.classList.remove('pointer-events-none', 'border-black')
                    })

                    e.target.classList.remove('hover:border-black', 'cursor-pointer', 'border-transparent')
                    e.target.classList.add('pointer-events-none', 'border-black')
                }
            })
        }
        carouselActions()
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
