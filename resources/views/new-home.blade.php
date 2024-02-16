@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <style>
        /* Añadir estilos personalizados */
        [data-carousel-parent] {
            scrollbar-width: none;
        }

        [data-carousel-parent]::-webkit-scrollbar {
            display: none;
        }
    </style>


    <div class="mt-[5dvh] xl:px-0 ">

        <!-- start hero -->
        <header class="max-w-7xl mx-auto flex lg:flex-row flex-col gap-5 mb-14 w-full">

            <!-- start carrousel -->
            <div x-data="carrousel" id="default-carousel"
                class=" w-full md:min-h-[400px] min-h-[200px] relative border border-black" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden lg:h-full h-[400px] w-auto">
                    <!-- Items -->
                    <template x-for="carrouselItem in carrouselItems">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img :src="carrouselItem.img"
                                class="object-cover absolute h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 z-10 left-1/2"
                                alt="...">
                            <div
                                class="absolute -translate-y-1/2 top-1/2 flex gap-5 flex-col justify-start items-start text-white z-20 md:px-10 px-5">
                                <h5 x-text="carrouselItem.title" class="md:text-3xl text-xl font-bold"></h5>
                                <p x-text="carrouselItem.description" class="md:text-base text-sm"></p>
                                <button class="bg-white text-black px-3 py-1" x-show="carrouselItem.buttonLabel"
                                    x-text="carrouselItem.buttonLabel"></button>
                            </div>
                            <div class="w-full h-full absolute top-0 left-0 bg-black/60 z-10 w-fit"></div>
                        </div>
                    </template>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse"
                    x-data="{ indexes: [0, 1, 2, 3, 4] }">
                    <template x-for="index in indexes">
                        <button type="button" class="w-3 h-3 rounded-full border border-white" :aria-current="index === 0"
                            :aria-label="`Slide ${index}`" :data-carousel-slide-to="index">
                        </button>
                    </template>
                </div>
            </div>
            <!-- end carrousel -->

            <div class="grid lg:grid-cols-1 lg:grid-rows-2 md:grid-cols-2 md:grid-rows-1 grid-cols-1 grid-rows-2 gap-5 lg:w-[700px]  w-auto"
                x-data="{ banners: ['productos Buhogt', 'servicios'] }">

                <template x-for="banner in banners">

                    <div class="lg:p-8 md:p-6 p-3 flex items-center gap-3 flex-1 "
                        :class="banner === 'servicios' ? 'bg-green-400/20' : 'bg-rose-400/20'">

                        <div class="flex flex-col gap-4 flex-1">
                            <h6 class="lg:text-xl md:text-lg text-base font-semibold"
                                x-text="`Encuentra los mejores ${banner}`">
                            </h6>
                            <span class="text-sm text-gray-500">Obtén la mejor tecnología</span>
                        </div>

                        <img src="https://placehold.co/120x90"
                            class="lg:w-[170px] sm:w-[130px] w-[100px] md:h-full sm:h-full h-auto  object-cover"
                            alt="image-banner">
                    </div>

                </template>

            </div>

        </header>
        <!-- end hero -->

        <!-- start sección "Tiendas BUHOGT" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h2 class="md:text-4xl text-3xl underline">Tiendas <span class="uppercase">Buhogt</span></h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Encuentra los mejores artículos</span>
            </header>

            <div class="relative w-full mt-8">
                <!-- start carousel -->
                <div class="transition-all w-full flex justify-start items-start lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                    data-carousel-parent data-type-template="store" id="seccion-1">
                    <!-- start item carousel -->

                    <!-- end item carousel -->
                </div>
                <!-- end carousel -->
                <!-- start botones Next y Previous -->
                <button data-prev-btn
                    class="absolute hidden top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <!-- end botones Next y Previous -->
            </div>

        </section>
        <!-- end sección "Tiendas BUHOGT" -->

        <!-- start sección "Patrocinado" -->
        <section class=" bg-gray-100 mb-20">
            <div class="max-w-7xl mx-auto px-5 py-4">

                <!-- start banner "patrocinado" -->
                <div class="grid md:grid-cols-[60%,1fr] grid-cols-1 gap-4 my-4 lg:w-[80%] w-full mx-auto">
                    <div>
                        <div x-data="carrousel" id="default-carousel-1"
                            class=" md:min-h-[300px] w-full min-h-[100px] relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative overflow-hidden h-[300px] w-[7full">
                                <!-- Items -->
                                <template x-for="carrouselItem in carrouselItems">
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://picsum.photos/seed/a/650/400"
                                            class="aspect-video absolute h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 z-10 left-1/2"
                                            alt="...">
                                    </div>
                                </template>
                            </div>
                            <button type="button"
                                class="absolute top-0  end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 py-2">
                        <span class="text-xs">Patrocinado</span>
                        <span class="xl">Primer compra</span>
                        <h4 class="md:text-3xl text-xl">New Balance Fresh Foam X 1080v13</h4>
                        <p class="text-sm">¡El acceso anticipado ha comenzado! Los miembros Plus ya pueden comprar este
                            lanzamiento antes que
                            nadie</p>
                        <button
                            class="md:w-4/6 w-full md:p-3 p-2 bg-transparent border border-black hover:bg-gray-200 font-semibold">Comprar</button>
                    </div>
                </div>
                <!-- end banner "patrocinado" -->

                <div class="md:mb-4 mb-10 md:pl-2 pl-0 lg:flex hidden gap-4 items-center md:w-[80%] w-full mx-auto">
                    <button
                        class="md:flex-none flex-1 w-fit p-2 px-3 bg-transparent border justify-center border-black hover:bg-gray-200 flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Seguir
                    </button>

                    <span class="md:flex-none flex-1 text-center">New Balance</span>
                </div>

                <!-- start carrousel -->
                <div class="relative overflow-hidden lg:mt-0 mt-10">
                    <!-- start carousel -->
                    <div class="flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                        data-carousel-parent data-type-template="product" id="seccion-2">
                        <!-- start item carousel -->
                        <div class="carousel-item xl:w-[220px] sm:w-[210px] w-full h-auto  ">
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
                                <h3 class="text-lg ">Item ${i + 1}</h3>
                                <!-- start stars  -->
                                <div class="flex items-center justify-start gap-2">
                                    <span class="text-sm">4.8</span>
                                    <div class="flex items-center">
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
                                <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                                    <b class="text-base">Q27.88</b>
                                    <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                                </div>
                                <span class="text-sm">by MysticArtByJose</span>
                                <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                    carrito</button>
                            </div>
                        </div>
                        <!-- end item carousel -->
                    </div>
                    <!-- start botones Next y Previous -->
                    <button data-prev-btn
                        class="absolute hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button data-next-btn
                        class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    <!-- end botones Next y Previous -->
                </div>
                <!-- end carrousel -->
            </div>
        </section>
        <!-- end sección "Patrocinado" -->

        <!-- start sección "Los productos mas vendidos" -->
        <section class=" max-w-7xl mx-auto mb-20  px-5">
            <header>
                <h2 class="md:text-3xl text-2xl ">Los productos más vendidos</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-1 inline-block">Completa tus compras</span>
            </header>

            <div class="relative overflow-hidden mt-16">
                <!-- start carousel -->
                <div class="flex justify-start items-center md:gap-[65px] gap-[30px] snap-mandatory snap-x overflow-x-scroll"
                    data-carousel-parent id="seccion-3" data-type-template="imageGrid">

                    <!-- start item carousel -->
                    <div class="carousel-item border xl:w-[320px] lg:w-[330px] md:w-[367px]  w-full h-auto  ">
                        <div class="relative h-[340px] w-full grid gap-2 grid-cols-2 grid-rows-2 px-8">
                            <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                            <img src=" https://placehold.co/100x310" class="w-full row-span-2 h-full object-cover rounded"
                                alt="image" />
                            <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                        </div>
                        <div class="flex gap-3 py-3 items-center mt-10">
                            <img src=" https://placehold.co/200x310" class="w-[50px] h-[70px] object-cover rounded"
                                alt="image" />
                            <p class="flex-1 text-sm ">
                                <span>Tienda ${i + 1}</span> <br>
                                <span>Tecnología y Accesorios</span>
                            </p>
                        </div>
                    </div>
                    <!-- end item carousel -->

                </div>
                <!-- start botones Next y Previous -->
                <button data-prev-btn
                    class="absolute left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6  h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>

                <button data-next-btn
                    class="absolute right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <!-- end botones Next y Previous -->
            </div>
        </section>
        <!-- end sección "Los productos mas vendidos" -->

        <!-- start sección "Productos de temporada" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h2 class="md:text-3xl text-2xl ">Productos de temporada</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Aprovecha las ofertas</span>
            </header>

            <div class="relative overflow-hidden mt-8">
                <!-- start carousel -->
                <div class="flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                    data-carousel-parent data-type-template="product" id="seccion-4">
                    <!-- start item carousel -->
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
                            <h3 class="text-lg ">Item ${i + 1}</h3>
                            <!-- start stars  -->
                            <div class="flex items-center justify-start gap-2">
                                <span class="text-sm">4.8</span>
                                <div class="flex items-center">
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
                            <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                carrito</button>
                        </div>
                    </div>
                    <!-- end item carousel -->
                </div>
                <!-- start botones Next y Previous -->
                <button data-prev-btn
                    class="absolute hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <!-- end botones Next y Previous -->
            </div>

        </section>
        <!-- end sección "Productos de temporada" -->

        <!-- start sección "Lo mejor de la temporada" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h2 class="md:text-3xl text-2xl ">Lo mejor de la temporada</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-1 inline-block">Completa tus compras</span>
            </header>

            <div class="flex justify-end">
                <div
                    class="bg-green-100 lg:w-[80%] w-full flex md:flex-row flex-col lg:pt-8 pt-4 lg:px-20 px-4 lg:items-start  pb-0 gap-8 mt-10 justify-center">

                    <aside class="flex flex-col flex-1">
                        <h6 class="lg:text-xl text-lg font-semibold">Encuentra tu estilo</h6>
                        <span class="lg:text-xl text-lg">Explora diferentes estilos de esta temporada</span>
                        <a href="" class="text-[blue] text-sm mt-5 flex items-center gap-1">
                            Intenta
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="blue" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    </aside>

                    <img src=" https://placehold.co/300x310"
                        class="lg:w-[350px] md:w-[300px] w-[350px] h-[180px] object-cover rounded" alt="image" />

                </div>
            </div>
        </section>
        <!-- end sección "Lo mejor de la temporada" -->

        <!-- start sección "Ofertas de año navideñas" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h2 class="md:text-3xl text-2xl ">Ofertas de año navideñas</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Encuentra tu regalo</span>
            </header>

            <div class="relative overflow-hidden mt-8">
                <!-- start carousel -->
                <div class="flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                    data-carousel-parent data-type-template="product" id="seccion-5">
                    <!-- start item carousel -->
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
                            <h3 class="text-lg ">Item ${i + 1}</h3>
                            <!-- start stars  -->
                            <div class="flex items-center justify-start gap-2">
                                <span class="text-sm">4.8</span>
                                <div class="flex items-center">
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
                            <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
                                carrito</button>
                        </div>
                    </div>
                    <!-- end item carousel -->
                </div>
                <!-- start botones Next y Previous -->
                <button data-prev-btn
                    class="absolute hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <!-- end botones Next y Previous -->
            </div>

        </section>
        <!-- end sección "Ofertas de año navideñas" -->

        <!-- start sección "Nuestros tops tiendas" -->
        <section class=" max-w-7xl mx-auto mb-20 md:px-10 px-4 md:w-3/4 w-full">
            <h2 class="md:text-2xl text-xl block mb-8 md:text-start text-center">Nuestros tops tiendas </h2>
            <div class="grid md:grid-cols-4 grid-cols-2 md:place-items-start place-items-center gap-10">
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">Anais</p>
                    <p class="text-gray-700 capitalize">Adoc</p>
                    <p class="text-gray-700 capitalize">Fila</p>
                    <p class="text-gray-700 capitalize">Laurance</p>
                    <p class="text-gray-700 capitalize">Jhly</p>
                    <p class="text-gray-700 capitalize">adidas</p>
                    <p class="text-gray-700 capitalize">tatiana</p>
                    <p class="text-gray-700 capitalize">asus</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">Levis premium</p>
                    <p class="text-gray-700 capitalize">Nike</p>
                    <p class="text-gray-700 capitalize">casio</p>
                    <p class="text-gray-700 capitalize">lacoste</p>
                    <p class="text-gray-700 capitalize">tommy</p>
                    <p class="text-gray-700 capitalize">boosts</p>
                    <p class="text-gray-700 capitalize">Lorem, ipsum.</p>
                    <p class="text-gray-700 capitalize">Lorem, ipsum.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">Anais</p>
                    <p class="text-gray-700 capitalize">Adoc</p>
                    <p class="text-gray-700 capitalize">Fila</p>
                    <p class="text-gray-700 capitalize">Laurance</p>
                    <p class="text-gray-700 capitalize">Jhly</p>
                    <p class="text-gray-700 capitalize">adidas</p>
                    <p class="text-gray-700 capitalize">tatiana</p>
                    <p class="text-gray-700 capitalize">asus</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">Levis premium</p>
                    <p class="text-gray-700 capitalize">Nike</p>
                    <p class="text-gray-700 capitalize">casio</p>
                    <p class="text-gray-700 capitalize">lacoste</p>
                    <p class="text-gray-700 capitalize">tommy</p>
                    <p class="text-gray-700 capitalize">boosts</p>
                    <p class="text-gray-700 capitalize">Lorem, ipsum.</p>
                    <p class="text-gray-700 capitalize">Lorem, ipsum.</p>
                </div>
            </div>
        </section>
        <!-- end sección "Nuestros tops tiendas" -->

        <!-- start sección "Nuestros tops productos" -->
        <section class=" max-w-7xl mx-auto mb-20 md:px-10 px-4 md:w-3/4 w-full">
            <h2 class="md:text-2xl text-xl block mb-8 md:text-start text-center">Nuestros tops productos </h2>
            <div class="grid md:grid-cols-4 grid-cols-2 md:place-items-start place-items-center gap-10">
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">televisores</p>
                    <p class="text-gray-700 capitalize">zapatos</p>
                    <p class="text-gray-700 capitalize">celulares</p>
                    <p class="text-gray-700 capitalize">medias</p>
                    <p class="text-gray-700 capitalize">ropa interior</p>
                    <p class="text-gray-700 capitalize">calcetines</p>
                    <p class="text-gray-700 capitalize">pantallas</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">televisores</p>
                    <p class="text-gray-700 capitalize">zapatos</p>
                    <p class="text-gray-700 capitalize">celulares</p>
                    <p class="text-gray-700 capitalize">medias</p>
                    <p class="text-gray-700 capitalize">ropa interior</p>
                    <p class="text-gray-700 capitalize">calcetines</p>
                    <p class="text-gray-700 capitalize">pantallas</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">televisores</p>
                    <p class="text-gray-700 capitalize">zapatos</p>
                    <p class="text-gray-700 capitalize">celulares</p>
                    <p class="text-gray-700 capitalize">medias</p>
                    <p class="text-gray-700 capitalize">ropa interior</p>
                    <p class="text-gray-700 capitalize">calcetines</p>
                    <p class="text-gray-700 capitalize">pantallas</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-gray-700 capitalize">televisores</p>
                    <p class="text-gray-700 capitalize">zapatos</p>
                    <p class="text-gray-700 capitalize">celulares</p>
                    <p class="text-gray-700 capitalize">medias</p>
                    <p class="text-gray-700 capitalize">ropa interior</p>
                    <p class="text-gray-700 capitalize">calcetines</p>
                    <p class="text-gray-700 capitalize">pantallas</p>
                </div>
            </div>
        </section>
        <!-- end sección "Nuestros tops productos" -->

        <!-- start sección "Buho Vendedores" -->
        <section class=" mb-20 py-4 bg-blue-200">
            <div class=" mx-auto bg-white p-10 flex justify-center items-center flex-col text-center gap-8">
                <h2 class="text-2xl block">Buho Vendedores</h2>
                <p class="block lg:w-[39%] md:w-[50%] w-full">Buho es un marketplace que ha estado potenciado a los
                    pequeños
                    negocios
                    ¿Quieres
                    vender
                    en Buhogt? Abre un
                    puesto y empieza a vender</>
                <div class="flex gap-5 sm:flex-row flex-col">
                    <button class=" p-2 px-5 bg-blue-900 hover:bg-blue-950 text-white">Comienza a vender</button>
                    <button class=" p-2 px-5 border-blue-900 border hover:bg-gray-200 text-blue-900">Requisitos para
                        vender</button>
                </div>
            </div>
        </section>
        <!-- end sección "Buho Vendedores" -->

        <!-- start sección "¿Que es Buhogt" -->
        <section class=" bg-blue-100 mt-[200px]">
            <div class="max-w-7xl mx-auto  px-5 flex justify-center items-center flex-col pt-16 pb-20">
                <h2 class="lg:text-5xl text-3xl md:text-start text-center font-light">¿Qúe es Buhogt?</h2>
                <a href="" class="text-blue-600 underline block mt-2 md:text-start text-center">Lee nuestra
                    maravillosa
                    excepcional historia</a>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 md:gap-20 gap-10 md:mt-16 mt-10">
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">Una comunidad
                            que
                            hace el bien</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet. Ex
                            non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus quos.
                            Culpa
                            voluptas dicta quo aspernatur? Ab dolore nesciunt commodi obcaecati.</p>
                    </div>
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">Apoya a
                            emprendedores</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet. Ex
                            non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus quos.
                            Culpa
                            voluptas dicta quo aspernatur? Ab dolore nesciunt commodi obcaecati.</p>
                    </div>
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">Tranquilidad
                            absoluta</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet. Ex
                            non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus quos.
                            Culpa
                            voluptas dicta quo aspernatur? Ab dolore nesciunt commodi obcaecati.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sección "¿Que es Buhogt" -->

        <!-- start sección "Suscríbase a nuestro boletín" -->
        <section class=" bg-blue-950 text-white">
            <div
                class="max-w-7xl mx-auto flex md:flex-row flex-col justify-around md:gap-0 gap-8 px-5 md:py-[80px] py-10 items-center">
                <form class="flex flex-col gap-5">
                    <h5 class="text-2xl">Suscríbase a nuestro boletín</h5>
                    <span class="text-sm">Suscríbase a nuestro boletín para recibir ofertas exclusivas, ultimas noticias y
                        actualizaciones</span>
                    <div class="flex gap-3 md:flex-row flex-col">
                        <input type="email" placeholder="Su correo electronico"
                            class="bg-white/10 p-3 px-5 text-sm md:w-[60%] w-full">
                        <button
                            class="h-full p-3 px-5 text-sm bg-white w-fit text-blue-900 hover:bg-white/90">Suscríbase</button>
                    </div>
                </form>
                <img src=" https://placehold.co/200x310" class="w-[200px] h-[150px] object-cover rounded"
                    alt="image" />
            </div>
        </section>
        <!-- end sección "Suscríbase a nuestro boletín" -->

        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
        </section>


    </div>

    <script>
        const carrouselItems = [{
                img: 'https://picsum.photos/seed/1/650/400',
                title: 'Buhogt',
                description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                buttonLabel: ''
            },
            {
                img: 'https://picsum.photos/seed/2/650/400',
                title: 'Buhogt',
                description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                buttonLabel: 'Comienza ahora'
            },
            {
                img: 'https://picsum.photos/seed/3/650/400',
                title: 'Buhogt',
                description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                buttonLabel: 'Comienza ahora'
            },
            {
                img: 'https://picsum.photos/seed/4/650/400',
                title: 'Buhogt',
                description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                buttonLabel: 'Comienza ahora'
            },
            {
                img: 'https://picsum.photos/seed/5/650/400',
                title: 'Buhogt',
                description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                buttonLabel: 'Comienza ahora'
            },
        ]
        document.addEventListener('alpine:init', () => {
            Alpine.data('carrousel', () => ({
                carrouselItems,
                indexes: Array.from({
                    length: carrouselItems.length
                }, (_, index) => index + 1)
            }))
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        const getTemplate = (type) => {
            const product = `<div class="carousel-item snap-start	">
    <div class="relative md:!w-[220px] md:!h-[250px] w-[130px] h-[180px]">
      <img src=" http://placehold.co/500x510" class="w-full h-full object-cover rounded" alt="image" />
      <button
        class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
          xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="1.5"
            d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
        </svg></button>
    </div>
    <div class="flex gap-4 flex-col pt-3">
      <h3 class="text-lg  ">Item</h3>
      <!-- start stars  -->
      <div class="flex md:flex-row flex-col md:items-center items-start justify-start gap-2">
        <span class="text-sm">4.8</span>
        <div class="flex items-center">
          <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
          </svg>
          <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
          </svg>
          <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
          </svg>
          <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
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
      <div class="flex lg:flex-row flex-col xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
        <b class="text-base">Q27.88</b>
        <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
      </div>
      <span class="text-sm">by MysticArtByJose</span>
      <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
        carrito</button>
    </div>
  </div>`

            const imageGrid = `<div class="carousel-item snap-start border border-transparent lg:w-[283px] w-[210px]">
    <div class="relative lg:w-[283px] w-[210px]  grid gap-2 grid-cols-2 grid-rows-2">
      <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded" alt="image" />
      <img src=" https://placehold.co/100x310" class="w-full row-span-2 h-full object-cover rounded"
        alt="image" />
      <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded" alt="image" />
    </div>
    <div class="flex gap-3 py-3 items-center mt-10">
      <img src=" https://placehold.co/200x310" class="w-[50px] h-[70px] object-cover rounded" alt="image" />
      <p class="flex-1 text-sm ">
        <span>Tienda </span> <br>
        <span>Tecnología y Accesorios</span>
      </p>
    </div>
  </div>`

            const store = `<div class="carousel-item snap-start	">
    <div class="relative md:!w-[220px] md:!h-[250px] w-[130px] h-[180px]">
      <img src=" http://placehold.co/500x510" class="w-full h-full object-cover rounded" alt="image" />
    </div>
    <div class="flex gap-4 flex-col pt-3">
    <p>descripción</p>
    <div class="flex items-center gap-2">
      <a href="" class="font-bold w-fit leading-5 md:text-base text-sm	border-b border-black ">
        Visitar tienda
      </a>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16">
        <path fill="#000" fill-rule="evenodd"
          d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8"
          clip-rule="evenodd" />
      </svg>
    </div>
    </div>
  </div>`

            const temp = {
                store,
                product,
                imageGrid
            }

            return temp[type]
        }

        const generateCarousel = () => {
            const total_items = 9
            document.querySelectorAll('[data-carousel-parent]').forEach(carousel => {

                let template = ''
                Array(total_items).fill(1).forEach((_, i) => {
                    template += getTemplate(carousel.dataset.typeTemplate)
                })

                carousel.innerHTML = template

                const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
                const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

                const item = carousel.querySelector('.carousel-item')

                // Función para avanzar al siguiente grupo de elementos
                nextBtn.addEventListener('click', function() {
                    carousel.scrollTo({
                        left: carousel.scrollLeft + item.clientWidth,
                        behavior: 'smooth'
                    })

                });

                // Función para retroceder al grupo anterior de elementos
                prevBtn.addEventListener('click', function() {
                    carousel.scrollTo({
                        left: carousel.scrollLeft - item.clientWidth,
                        behavior: 'smooth'
                    })
                });

                carousel.addEventListener('scrollend', e => {

                    prevBtn.classList[
                        e.target.scrollLeft > 0 ? 'remove' : 'add'
                    ]('hidden')

                    nextBtn.classList[
                        (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ?
                        'add' : 'remove'
                    ]('hidden')

                })


            });
        }
        generateCarousel()

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


        const $formSearch = document.getElementById('form-search-navbar')
        const $formSearchMovil = document.getElementById('form-search-navbar-movil')

        $formSearch.addEventListener('submit', e => {
            e.preventDefault()

            const search = Object.fromEntries(new FormData(e.target)).search
            document.getElementById('text-search').textContent = search

            activeModal()
        })

        $formSearchMovil.addEventListener('submit', e => {
            e.preventDefault()

            const search = Object.fromEntries(new FormData(e.target)).search
            document.getElementById('text-search-movil').textContent += `(${search})`
            activeModal()
        })

        const activeModal = () => {
            const $modalResults = document.getElementById('modal-results')

            const instanceOptions = {
                id: $modalResults.id,
                override: true
            };
            const options = {
                placement: 'bottom-right',
                closable: false,
                backdropClasses: 'bg-black/40 fixed inset-0 z-40',
                onHide: () => {
                    console.log('modal is hidden');
                },
                onShow: () => {
                    console.log('m  odal is shown');
                },
                onToggle: () => {
                    console.log('modal has been toggled');
                },
            };

            const modal = new Modal($modalResults, options, instanceOptions);
            modal.show();

            document.querySelector('#btn-modal-results-close').addEventListener('click', () => {
                modal.hide();
            })
        }
    </script>
@endsection
