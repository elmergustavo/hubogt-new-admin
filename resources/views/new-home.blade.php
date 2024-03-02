@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <style>
        /* Añadir estilos personalizados */
        [data-carousel-parent],
        .hidden-scroll {
            scrollbar-width: none;
        }

        [data-carousel-parent]::-webkit-scrollbar,
        .hidden-scroll::-webkit-scrollbar {
            display: none;
        }
    </style>


    <main class="mt-[5dvh] xl:px-0 ">

        <!-- start hero -->
        <header class="max-w-7xl px-5 mx-auto flex lg:flex-row flex-col gap-5 mb-14 w-full">

            <!-- start carrousel -->
            <div class=" w-full md:min-h-[450px] min-h-[200px] relative border rounded" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div id="carousel-section-hero" class="relative overflow-hidden lg:h-full h-[400px] w-auto">
                    <!-- Items -->

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse"
                    x-data="{ indexes: [0, 1, 2, 3, 4] }">
                    <template x-for="index in indexes">
                        <button type="button" class="md:w-3 w-2 md:h-3 h-2 rounded-full  bg-white"
                            :aria-current="index === 0" :aria-label="`Slide ${index}`" :data-carousel-slide-to="index">
                        </button>
                    </template>
                </div>
            </div>
            <!-- end carrousel -->

            <div
                class="lg:overflow-x-auto overflow-x-scroll lg:w-[700px] lg:h-[450px] h-fit w-full  hidden-scroll snap-mandatory snap-x">

                <div class="lg:grid flex grid-cols-1 gap-5 justify-between h-full w-full">

                    <div
                        class="lg:p-8 rounded p-3 md:flex-1 flex-none w-[80%] sm:flex-nowrap flex-wrap justify-between  md:gap-5 gap-2 flex lg:grid grid-cols-[1fr,auto] md:w-full items-center place-items-center bg-blue-950 snap-start">

                        <div class="flex flex-col lg:gap-4 md:gap-1 gap-3 text-start h-auto">
                            <h6 class="lg:text-xl md:text-lg text-base font-semibold text-white ">
                                Encuentra los mejores productos Buhogt
                            </h6>
                            <span class="text-sm text-gray-200">Obtén la mejor tecnología</span>
                        </div>

                        <img src="/images/malvestida-u79wy47kvVs-unsplash.jpg"
                            class="lg:w-[170px] md:w-[100px] w-[125px] h-[145px] object-cover" alt="image-banner">
                    </div>

                    <div
                        class="lg:p-8 rounded p-3 md:flex-1 flex-none w-[80%] sm:flex-nowrap flex-wrap justify-between  md:gap-5 gap-2 flex lg:grid grid-cols-[1fr,auto] md:w-full items-center place-items-center bg-green-950/90 snap-start">

                        <div class="flex flex-col lg:gap-4 md:gap-1 gap-3 text-start h-auto">
                            <h6 class="lg:text-xl md:text-lg text-base font-semibold text-white">
                                Encuentra los mejores servicios
                            </h6>
                            <span class="text-sm text-gray-200">Obtén la mejor tecnología</span>
                        </div>

                        <img src="/images/tim-van-der-kuip-CPs2X8JYmS8-unsplash.jpg"
                            class="lg:w-[170px] md:w-[100px] w-[125px] h-[145px] object-cover" alt="image-banner">
                    </div>

                </div>

            </div>
        </header>
        <!-- end hero -->

        <!-- start sección "Tiendas BUHOGT" -->
        <section class=" md:mb-20 mb-10">
            <header class="max-w-7xl mx-auto px-5">
                <h2 class="md:text-4xl text-3xl underline font-bold">Tiendas <span class="uppercase">Buhogt</span></h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Encuentra los mejores artículos</span>
            </header>

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-0 px-5 ">
                    <div class="w-full mt-8">
                        <!-- start carousel -->
                        <div class="transition-all w-full flex justify-start items-start lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                            data-carousel-parent data-type-template="store" id="seccion-1">
                            <!-- start item carousel -->

                            <!-- end item carousel -->
                        </div>
                        <!-- end carousel -->
                        <!-- start botones Next y Previous -->
                        <button data-prev-btn
                            class="absolute -left-0 hidden top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
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
                </div>
            </div>

        </section>
        <!-- end sección "Tiendas BUHOGT" -->

        <!-- start sección "Patrocinado" -->
        <section class=" md:mb-20 mb-10">
            <!-- start banner "patrocinado" -->
            <div class="bg-blue-100 px-5 py-4">
                <div class="grid md:grid-cols-[60%,1fr]  max-w-7xl mx-auto  grid-cols-1 gap-4  lg:w-[80%] w-full mx-auto ">
                    <div>
                        <span class="text-xs md:hidden block mb-8">Patrocinado</span>
                        <div class=" md:min-h-[300px] w-full min-h-[100px] relative" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div id="carousel-section-patrocinado" class="relative overflow-hidden h-[300px] w-[7full">
                                <!-- Items -->

                            </div>

                        </div>
                    </div>

                    <div class="flex flex-col gap-2 py-2">
                        <span class="text-xs md:block hidden">Patrocinado</span>
                        <span class="xl">Primer compra</span>
                        <h4 class="md:text-3xl text-xl">New Balance Fresh Foam X 1080v13</h4>
                        <p class="text-sm">¡El acceso anticipado ha comenzado! Los miembros Plus ya pueden comprar este
                            lanzamiento antes que
                            nadie</p>
                        <button
                            class="md:w-4/6 w-full md:p-3 p-2 bg-transparent border-2 border-black rounded hover:bg-blue-300 font-bold">Comprar</button>
                    </div>
                </div>
            </div>
            <!-- end banner "patrocinado" -->
            <div class="bg-blue-100 px-5 py-4 px-5 py-4  ">

                <div class="md:pl-2 pl-0 lg:flex hidden gap-4 items-center md:w-[80%] w-full max-w-7xl mx-auto">
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

            </div>

            <!-- start carrousel -->
            <div class="pt-10 md:pb-10 pb-4 bg-blue-950 text-white">
                <div class="max-w-7xl mx-auto relative mt-0 px-5 ">
                    <!-- start carousel -->
                    <div class="flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                        data-carousel-parent data-color="white" data-type-template="product" id="seccion-2">
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
                            <div class="flex gap-4 flex-col pt-3 ">
                                <h3 class="text-sm ">Item ${i + 1}</h3>
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

                    <div class="md:pl-2 pl-0 md:hidden flex gap-4 items-center md:w-[80%] w-full max-w-7xl mx-auto mt-14">
                        <button
                            class="w-fit p-2 px-3 bg-transparent border justify-center border-white hover:bg-gray-200 hover:text-black flex gap-2 items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Seguir
                        </button>

                        <span class="text-center text-white">New Balance</span>
                    </div>
                </div>
            </div>
            <!-- end carrousel -->

        </section>
        <!-- end sección "Patrocinado" -->

        <!-- start sección "Los productos mas vendidos" -->
        <section class=" max-w-7xl mx-auto md:mb-20 mb-10 px-5">
            <header>
                <h2 class="md:text-4xl text-3xl font-bold">Los productos más vendidos</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-1 inline-block">Completa tus compras</span>
            </header>

            <div class="relative overflow-hidden mt-16">
                <!-- start carousel -->
                <div class="flex justify-start items-center md:gap-[65px] md:gap-[30px] gap-5 snap-mandatory snap-x overflow-x-scroll"
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
        <section class="md:mb-20 mb-10 bg-yellow-500 py-6 ">
            <header class="mx-auto px-5 max-w-7xl">
                <h2 class="md:text-4xl text-3xl font-bold text-gray-950">Productos de temporada</h2>
                <span class="md:text-xl text-lg text-gray-800 mt-3 inline-block">Aprovecha las ofertas</span>
            </header>

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-0 px-5 ">
                    <div class=" mt-8">
                        <!-- start carousel -->
                        <div class="flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x overflow-x-scroll"
                            data-carousel-parent data-type-template="product" id="seccion-4">
                            <!-- start item carousel -->
                            <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto ">
                                <div class="relative h-[200px] aspect-square w-full">
                                    <img src="./images/zapatos1.jpg" class="w-full h-full object-cover rounded"
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
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
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
                            class="absolute -left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
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
                </div>
            </div>

        </section>
        <!-- end sección "Productos de temporada" -->

        <!-- start sección "Lo mejor de la temporada" -->
        <section class=" max-w-7xl mx-auto md:mb-20 mb-10">
            <header class="px-5">
                <h2 class="md:text-4xl text-3xl font-bold">Lo mejor de la temporada</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-1 inline-block">Completa tus compras</span>
            </header>

            <div class="flex justify-end md:px-5 px-0">
                <div
                    class="bg-green-100 lg:w-[80%] w-[90%] flex flex-row pt-8 md:px-20 px-0 md:pl-20 pl-5 md:items-start items-end pb-0 gap-8 mt-10 justify-center">

                    <aside class="flex flex-col flex-1">
                        <h6 class="text-2xl font-bold">Encuentra tu estilo</h6>
                        <span class="lg:text-xl sm:text-lg text-sm mt-5">Explora diferentes estilos de esta
                            temporada</span>
                        <a href="" class="text-[blue] text-sm mt-5 flex items-center gap-1 mb-5">
                            Intenta
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="blue" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    </aside>

                    <img src="https://s3-alpha-sig.figma.com/img/fa81/cac8/02bbd49f6db6141c6c06a54fe8534092?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fvCfut2UPJ5jmI8OmmwcHphkK0LaWstBxCf7l~ymuQyMf~Vd8FBA8UCymvX2j7se6QUIuUvbo2MUFs-I0CuN-NpZU4OuVcl0TzsLWN0pfN1rb7IQYUqdYUMBdLhRgDEcbZNLasjUGWuHh-rvU4Qr~cQY0CKtHJJPDcRumlg4wmkxjHN0sNeqHMNJRAbcUzvHSUbBtoN5-~Q3WoprTjCGRh8OCnRPiJXto924ksnlH4XPZoHxaj0TalO-Wz1jgL-Z3YtTcpQt8epOV6vug3~ocbU396vuEVBNC~q-Pm1VtTXnIRFalFJ0gpguGlCYWUhQ1fmbvsm4WpLoV2AaBIwoJQ__"
                        class="lg:w-[350px] w-[120px] lg:h-[190px] h-[130px] object-cover" alt="image" />

                </div>
            </div>
        </section>
        <!-- end sección "Lo mejor de la temporada" -->

        <!-- start sección "Ofertas de año navideñas" -->
        <section class=" md:mb-20 mb-10">
            <header class="max-w-7xl mx-auto px-5">
                <h2 class="md:text-4xl text-3xl font-bold">Ofertas de año navideñas</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Encuentra tu regalo</span>
            </header>

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-0 px-5 ">

                    <div class="mt-8">
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
                                        <!-- <span class="text-sm">4.8</span> -->
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-3 h-3 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- end stars  -->
                                    <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                                        <b class="text-xl">Q27.88</b>
                                        <span class="text-green-600 text-xs">Q37.17 </span>
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
                            class="absolute -left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
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
                </div>
            </div>

        </section>
        <!-- end sección "Ofertas de año navideñas" -->

        <!-- start sección "Nuestros tops tiendas" -->
        <!-- <section class=" max-w-7xl mx-auto md:mb-20 mb-10 md:px-10 px-4 md:w-3/4 w-full">
              <h2 class="md:text-3xl text-xl block mb-8 md:text-start text-left font-bold">Nuestros tops tiendas </h2>
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
            </section> -->
        <!-- end sección "Nuestros tops tiendas" -->

        <!-- start sección "Nuestros tops productos" -->
        <!-- <section class=" max-w-7xl mx-auto md:mb-20 mb-10 md:px-10 px-4 md:w-3/4 w-full">
              <h2 class="md:text-3xl text-xl block mb-8 md:text-start text-left font-bold">Nuestros tops productos </h2>
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
            </section> -->
        <!-- end sección "Nuestros tops productos" -->

        <!-- start sección "Buho Vendedores" -->
        <section class=" md:mb-20 mb-10 py-4 bg-blue-200">
            <div class=" mx-auto bg-white p-10 flex justify-center items-center flex-col text-center gap-8">
                <h2 class="md:text-3xl text-xl block ">Buho Vendedores</h2>
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
            <div class="max-w-7xl mx-auto  px-5 flex justify-center items-center flex-col pt-8 pb-20">
                <h2 class="lg:text-5xl text-3xl md:text-start text-center font-semibold">¿Qúe es Buhogt?</h2>
                <a href="" class="text-blue-600 underline block mt-2 md:text-start text-center">Lee nuestra
                    maravillosa
                    excepcional historia</a>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 md:gap-20 gap-10 md:mt-16 mt-10">
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-left text-2xl font-bold">Una
                            comunidad que
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
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-left text-2xl font-bold">Apoya
                            a
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
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-left text-2xl font-bold">
                            Tranquilidad
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
                    <h5 class="md:text-3xl text-2xl">Suscríbase a nuestro boletín</h5>
                    <span class="">Suscríbase a nuestro boletín para recibir ofertas exclusivas, ultimas noticias y
                        actualizaciones</span>
                    <div class="flex gap-3 md:flex-row flex-col">
                        <input type="email" placeholder="Su correo electronico"
                            class="bg-white/10 p-3 px-5 text-sm md:w-[60%] w-full">
                        <button
                            class="h-full p-3 px-5 text-sm bg-white w-fit text-blue-900 hover:bg-white/90">Suscríbase</button>
                    </div>
                </form>

                <svg class="w-[200px] h-[150px] md:block hidden object-cover" viewBox="0 0 186 122" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_488_39583" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                        width="186" height="122">
                        <path d="M185.379 0.831055H0.371582V121.086H185.379V0.831055Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_488_39583)">
                        <path
                            d="M185.38 57.2905C185.38 62.0751 183.577 66.6835 180.33 70.1942C177.083 73.705 172.632 75.8593 167.866 76.2271C167.706 76.2396 167.542 76.2516 167.38 76.2592V58.233C167.38 58.0528 167.339 57.8749 167.262 57.7122C167.185 57.5495 167.072 57.4064 166.932 57.2932C166.916 57.2764 166.898 57.2617 166.879 57.2492C166.861 57.235 166.842 57.2219 166.823 57.2105C166.652 57.1001 166.456 57.0348 166.253 57.0201C166.05 57.0048 165.847 57.0413 165.662 57.1251L165.461 56.6822C165.681 56.5815 165.921 56.5293 166.164 56.5287L152.308 44.5803C152.415 44.4585 152.526 44.3392 152.638 44.2199C155.25 41.4636 158.628 39.5548 162.336 38.74C166.043 37.9253 169.909 38.242 173.434 39.6494C176.96 41.0568 179.983 43.4901 182.112 46.6349C184.242 49.7797 185.38 53.4915 185.38 57.2905Z"
                            fill="white" />
                        <path
                            d="M5.18266 70.24C5.11375 69.8874 5.12287 69.5244 5.20938 69.1756C5.29588 68.8274 5.45766 68.502 5.68336 68.2229C5.90901 67.9437 6.19305 67.7173 6.51551 67.5601C6.83797 67.4028 7.19095 67.3185 7.54965 67.312L18.4869 54.2795L21.2174 57.7743L10.0708 69.9032C10.0409 70.5072 9.79085 71.079 9.36795 71.5105C8.94504 71.942 8.37865 72.2032 7.77612 72.2446C7.17359 72.2865 6.57678 72.1053 6.09881 71.7358C5.62078 71.3663 5.29483 70.8336 5.18266 70.24Z"
                            fill="#FFB8B8" />
                        <path
                            d="M57.1204 54.2004C57.0437 54.3113 56.9762 54.4279 56.918 54.5494L44.9756 56.2582L43.1621 53.9536L39.3298 56.2386L42.9321 61.8606L57.497 57.563C57.8817 57.9113 58.3627 58.1338 58.8764 58.2018C59.3906 58.2698 59.913 58.1795 60.3744 57.9428C60.8358 57.7061 61.2145 57.3345 61.4599 56.8774C61.7048 56.4203 61.8055 55.899 61.7478 55.3832C61.6901 54.8677 61.4768 54.3818 61.1362 53.9903C60.7961 53.5989 60.3445 53.3204 59.8422 53.192C59.34 53.0636 58.8105 53.0913 58.3241 53.2714C57.8382 53.4515 57.4181 53.7756 57.1204 54.2004Z"
                            fill="#FFB8B8" />
                        <path d="M36.7205 97.7404L38.8338 99.8468L47.9559 92.6897L44.8369 89.5811L36.7205 97.7404Z"
                            fill="#FFB8B8" />
                        <path
                            d="M40.9535 105.875L34.3118 99.2554L36.8669 96.6865L40.9425 100.749C41.2795 101.085 41.5471 101.484 41.73 101.923C41.913 102.362 42.0076 102.834 42.0087 103.31C42.0097 103.786 41.917 104.258 41.736 104.697C41.555 105.138 41.2891 105.538 40.9535 105.875Z"
                            fill="#FAFAF4" />
                        <path d="M25.4854 117.945H28.4677L29.8863 106.431H25.4849L25.4854 117.945Z" fill="#FFB8B8" />
                        <path
                            d="M34.2191 120.72L24.8464 120.721L24.8462 117.096H30.5976C31.0732 117.096 31.5441 117.19 31.9835 117.372C32.4229 117.554 32.8221 117.821 33.1584 118.158C33.4946 118.494 33.7614 118.894 33.9434 119.333C34.1254 119.773 34.2191 120.244 34.2191 120.72Z"
                            fill="#FAFAF4" />
                        <path
                            d="M24.8393 109.055L21.4424 83.9784C20.9108 80.1885 21.0758 76.3333 21.9292 72.6032C22.6263 69.6055 23.568 67.5285 24.7283 66.4315C24.9114 66.2596 25.1458 66.1524 25.3956 66.1263L36.6112 64.9569C36.8272 64.9346 37.0451 64.9749 37.2393 65.0717C37.4336 65.1691 37.5962 65.3193 37.7082 65.5054L38.077 66.1208C38.1217 66.1954 38.1578 66.2748 38.1845 66.3575L40.5558 73.7159C40.5912 73.8275 40.6483 73.9303 40.7238 74.019C40.7993 74.1083 40.8918 74.1812 40.9957 74.234C44.7292 76.1417 56.8564 82.5827 56.1626 85.3616C55.5108 87.9724 49.4052 92.2064 47.5496 93.4416C47.3606 93.5678 47.138 93.6347 46.9107 93.6331C46.6834 93.6309 46.4619 93.5613 46.2749 93.4318L43.1945 91.3221C43.0441 91.2193 42.9206 91.0816 42.8342 90.9211C42.7477 90.7606 42.701 90.5816 42.6978 90.3993C42.6946 90.2164 42.7351 90.0363 42.8159 89.8726C42.8966 89.7093 43.0153 89.5673 43.162 89.459L45.2862 87.8924C45.4162 87.7967 45.5176 87.6666 45.5796 87.5175C45.6414 87.3684 45.6615 87.2046 45.6376 87.0452C45.6136 86.8852 45.5466 86.735 45.4437 86.6104C45.3407 86.4858 45.2058 86.3917 45.0535 86.3378L33.6452 82.3313C33.5171 82.2861 33.3804 82.2709 33.2456 82.2872C33.1109 82.3036 32.9816 82.3504 32.8677 82.4244C32.7539 82.4984 32.6585 82.5974 32.5889 82.7138C32.5193 82.8308 32.4774 82.962 32.4663 83.0975L30.3628 108.831C30.3396 109.108 30.2173 109.366 30.0187 109.558C29.82 109.751 29.5583 109.865 29.2821 109.879L26.0275 110.043C26.0077 110.044 25.988 110.044 25.9684 110.044C25.6922 110.045 25.4251 109.945 25.2172 109.763C25.0093 109.581 24.8749 109.329 24.8393 109.055Z"
                            fill="#84CDE4" />
                        <path
                            d="M29.9812 44.1907C33.2809 44.1907 35.9557 41.5131 35.9557 38.2102C35.9557 34.9073 33.2809 32.2297 29.9812 32.2297C26.6815 32.2297 24.0066 34.9073 24.0066 38.2102C24.0066 41.5131 26.6815 44.1907 29.9812 44.1907Z"
                            fill="#FFB8B8" />
                        <path
                            d="M24.3947 65.4041L19.9968 49.3421L20.0721 49.2912C20.1666 49.2275 29.6457 42.962 40.744 48.0112L40.9452 48.1267L38.3392 64.798C38.2824 65.1783 38.0947 65.5271 37.8085 65.784C37.5223 66.0408 37.1556 66.1893 36.7716 66.2046L26.0483 66.6176C26.0267 66.6181 26.0051 66.6187 25.9837 66.6187C25.6222 66.6198 25.2706 66.5011 24.9833 66.2813C24.696 66.062 24.489 65.7535 24.3947 65.4041Z"
                            fill="white" />
                        <path
                            d="M19.8296 59.7981L16.1669 55.5815C15.9905 55.3791 15.8911 55.1206 15.8864 54.852C15.8817 54.5833 15.9718 54.3216 16.141 54.1129L19.97 49.3782L22.9093 50.1806L24.4677 55.6403L21.6263 59.7034C21.5272 59.846 21.3967 59.964 21.245 60.0484C21.0932 60.1322 20.9242 60.1806 20.7509 60.1893C20.7303 60.1904 20.71 60.1909 20.6896 60.1909C20.5265 60.1909 20.3652 60.1561 20.2168 60.0881C20.0683 60.0206 19.9363 59.9216 19.8296 59.7981Z"
                            fill="white" />
                        <path
                            d="M40.0837 58.9219C39.9104 58.9131 39.7414 58.8653 39.5896 58.7809C39.4379 58.6966 39.3074 58.5785 39.2083 58.4359L36.3669 54.3729L37.7337 48.6258L40.4399 47.887L40.945 48.1282L44.6936 52.8455C44.8628 53.0542 44.9529 53.316 44.9482 53.5847C44.9435 53.8534 44.8441 54.1118 44.6677 54.3143L41.005 58.5306C40.8983 58.6541 40.7663 58.7532 40.6179 58.8212C40.4694 58.8887 40.3082 58.9235 40.145 58.9235C40.1247 58.9235 40.1042 58.9229 40.0837 58.9219Z"
                            fill="white" />
                        <path
                            d="M167.378 57.0402C167.38 57.1006 167.359 57.1599 167.32 57.2056C167.278 57.2546 167.218 57.285 167.154 57.2899C167.09 57.2954 167.026 57.2747 166.977 57.2323L166.162 56.5287L152.306 44.5805L113.444 11.0634C113.222 10.8735 112.94 10.7693 112.648 10.7697C112.356 10.7702 112.074 10.8752 111.853 11.0659L59.5191 56.5777L59.0473 56.9863C59.0294 57.0026 59.0087 57.0157 58.9864 57.0255C58.9477 57.0429 58.9047 57.0494 58.8623 57.0451C58.8019 57.0386 58.7453 57.0097 58.7045 56.9646C58.6833 56.9406 58.667 56.9129 58.6566 56.8824C58.6463 56.8525 58.6419 56.8204 58.6441 56.7883C58.6463 56.7567 58.6544 56.7251 58.6686 56.6968C58.6827 56.668 58.7023 56.6424 58.7263 56.6212L58.7921 56.563L111.535 10.6982C111.844 10.4317 112.239 10.2848 112.647 10.2839C113.056 10.2831 113.452 10.4282 113.762 10.6933L152.637 44.2201L167.293 56.8623C167.319 56.8846 167.339 56.9118 167.354 56.9422C167.369 56.9727 167.377 57.0065 167.378 57.0402Z"
                            fill="white" />
                        <path
                            d="M137.83 64.2291L137.19 62.466L134.986 56.3788L130.238 43.2714L124.93 28.6203L115.358 2.19378C115.17 1.67844 114.786 1.25867 114.289 1.02637C113.793 0.79407 113.224 0.76819 112.709 0.954395L57.366 21.0403C56.8512 21.2282 56.4317 21.6129 56.1993 22.11C55.9675 22.607 55.942 23.1759 56.1281 23.6919L69.6994 61.1563L69.9302 61.7962L84.1752 68.259L88.179 70.0753L88.8287 70.3697L105.781 78.0622L106.438 77.8233L117.557 73.7885L134.329 67.7012L136.589 66.8807C137.104 66.6929 137.524 66.3082 137.757 65.8114C137.989 65.3146 138.016 64.7455 137.83 64.2291Z"
                            fill="white" />
                        <path
                            d="M114.625 33.0225C114.349 32.2641 113.784 31.6462 113.053 31.3043C112.323 30.9624 111.486 30.9245 110.728 31.1988L88.8304 39.1489L78.2562 42.9863C77.8802 43.1223 77.5352 43.331 77.2397 43.6006C76.9448 43.8702 76.7059 44.1953 76.5361 44.5575C76.3669 44.9196 76.2706 45.3116 76.2521 45.7112C76.2341 46.1107 76.2951 46.5098 76.4311 46.8857C76.5677 47.2617 76.7761 47.6071 77.046 47.9022C77.3153 48.1973 77.6407 48.4364 78.0026 48.6056C78.3644 48.7749 78.7562 48.8711 79.1551 48.8888C79.5545 48.9064 79.9533 48.8451 80.3288 48.7085L88.8304 45.6234L112.803 36.9233C113.561 36.647 114.178 36.0811 114.519 35.3499C114.861 34.6187 114.899 33.7817 114.625 33.0225Z"
                            fill="#272B60" />
                        <path
                            d="M118.481 43.6681C118.205 42.9096 117.64 42.2917 116.909 41.9498C116.179 41.6079 115.343 41.57 114.584 41.8443L110.875 43.1908L88.8311 51.192L82.1126 53.6294C81.3546 53.9051 80.7376 54.4705 80.3959 55.2016C80.0547 55.9324 80.0171 56.7693 80.2919 57.5278C80.5667 58.2869 81.131 58.905 81.8607 59.2478C82.5909 59.5901 83.4267 59.6282 84.1847 59.3539L88.8311 57.6665L116.66 47.5664C116.723 47.5445 116.784 47.5177 116.844 47.4909C117.551 47.1806 118.113 46.613 118.417 45.9031C118.721 45.1932 118.744 44.3942 118.481 43.6681Z"
                            fill="#272B60" />
                        <path
                            d="M122.376 54.4238C122.101 53.6656 121.536 53.0477 120.806 52.7057C120.075 52.3638 119.24 52.3258 118.482 52.6001L108.078 56.3765L100.023 59.3012L88.8293 63.3627L86.0074 64.3879C85.3555 64.6256 84.8038 65.0789 84.4441 65.6731C84.0844 66.2673 83.938 66.9665 84.0295 67.6554C84.0578 67.8606 84.1067 68.0619 84.1758 68.2567L88.1796 70.073L88.8293 69.8369H88.8342L109.148 62.4643L120.554 58.3245C121.312 58.0486 121.93 57.4833 122.272 56.7519C122.613 56.0201 122.651 55.1832 122.376 54.4238Z"
                            fill="#272B60" />
                        <path
                            d="M99.5778 22.5587C99.3014 21.8002 98.7366 21.1823 98.0058 20.8404C97.275 20.4985 96.4392 20.4606 95.6807 20.7349L83.1045 25.298C82.3465 25.5736 81.7295 26.139 81.3883 26.8701C81.0466 27.6011 81.009 28.4379 81.2838 29.1966C81.5586 29.9553 82.1229 30.5737 82.8531 30.9161C83.5828 31.2585 84.4186 31.2968 85.1771 31.0225L89.1564 29.5786L91.7912 28.6217L97.7555 26.457C98.5135 26.1812 99.1305 25.6159 99.4722 24.885C99.8134 24.1541 99.8515 23.3175 99.5778 22.5587Z"
                            fill="#272B60" />
                        <path
                            d="M149.765 28.6187H90.8976C90.5504 28.619 90.2087 28.7068 89.9045 28.8741C89.5998 29.0413 89.3424 29.2826 89.1558 29.5756C88.9425 29.9073 88.8293 30.2937 88.8298 30.6883V70.3682L105.782 78.0601L108.171 79.1441L111.944 80.8554C112.165 80.9555 112.404 81.0072 112.647 81.0072C112.889 81.0072 113.129 80.9555 113.35 80.8554L117.122 79.1441L128.93 73.787L139.935 68.7929L151.833 63.3972V30.6883C151.832 30.1395 151.614 29.6133 151.226 29.2252C150.839 28.8372 150.313 28.619 149.765 28.6187Z"
                            fill="#84CDE4" />
                        <path
                            d="M137.603 56.3801H103.061C102.275 56.3807 101.521 56.6854 100.955 57.2306C100.389 57.7758 100.056 58.5186 100.025 59.3043C100.021 59.3441 100.019 59.3838 100.02 59.4235C100.021 60.2305 100.342 61.0042 100.912 61.5745C101.482 62.1453 102.255 62.4663 103.061 62.4674H137.603C138.409 62.4674 139.183 62.1469 139.753 61.5761C140.323 61.0053 140.644 60.231 140.644 59.4235C140.644 58.6165 140.323 57.8422 139.753 57.2714C139.183 56.7006 138.409 56.3801 137.603 56.3801Z"
                            fill="white" />
                        <path
                            d="M139.571 68.4253C139.022 67.9557 138.324 67.6983 137.603 67.7H103.061C102.254 67.7 101.481 68.0205 100.911 68.5913C100.341 69.1621 100.02 69.9364 100.02 70.7433C100.02 71.5508 100.341 72.3246 100.911 72.8954C101.481 73.4662 102.254 73.7873 103.061 73.7873H128.931L139.936 68.7931C139.825 68.6604 139.703 68.5374 139.571 68.4253Z"
                            fill="white" />
                        <path
                            d="M108.173 79.1494L111.945 80.8613C112.166 80.9609 112.406 81.0126 112.648 81.0126C112.891 81.0126 113.13 80.9609 113.351 80.8613L117.124 79.1494H108.173Z"
                            fill="white" />
                        <path
                            d="M129.876 43.4027C129.662 42.8168 129.273 42.3108 128.762 41.9533C128.251 41.5957 127.643 41.4038 127.02 41.4036H113.641C113.057 41.4041 112.485 41.5729 111.995 41.8899C111.503 42.2068 111.114 42.6584 110.873 43.1908C110.693 43.5851 110.6 44.0137 110.601 44.4473C110.602 45.2542 110.922 46.0277 111.492 46.5983C112.062 47.1688 112.835 47.4898 113.641 47.491H127.02C127.509 47.491 127.991 47.3729 128.425 47.1467C128.859 46.9205 129.231 46.5929 129.512 46.1916C129.792 45.7903 129.972 45.3273 130.035 44.8417C130.098 44.3562 130.044 43.8625 129.876 43.4027Z"
                            fill="white" />
                        <path
                            d="M127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75ZM127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75ZM127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75ZM167.379 57.0405C167.289 56.9512 167.19 56.8712 167.084 56.8021C166.845 56.6471 166.571 56.5545 166.287 56.5339C166.003 56.5126 165.718 56.5643 165.459 56.6824L139.57 68.4288L127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472L106.439 77.8255L88.8341 69.8408L88.8292 69.8386L84.0299 67.6594L69.7 61.158L59.8336 56.6824C59.7335 56.6362 59.6279 56.6008 59.5196 56.5779C59.2819 56.5181 59.0332 56.5132 58.7927 56.5633C58.408 56.6422 58.0619 56.8511 57.8132 57.1558C57.5651 57.46 57.4285 57.8403 57.428 58.2338V119.383C57.4285 119.834 57.6081 120.268 57.927 120.587C58.2464 120.907 58.679 121.086 59.1306 121.087H166.162C166.614 121.086 167.047 120.907 167.366 120.587C167.685 120.268 167.864 119.834 167.865 119.383V58.2338C167.866 57.7876 167.691 57.3588 167.379 57.0405ZM167.379 119.383C167.379 119.705 167.25 120.015 167.022 120.243C166.794 120.471 166.485 120.6 166.162 120.6H59.1306C58.8079 120.6 58.4988 120.471 58.2708 120.243C58.0429 120.015 57.9144 119.705 57.9144 119.383V58.2338C57.9144 58.0303 57.9656 57.83 58.063 57.6515C58.1604 57.4725 58.3008 57.3212 58.4716 57.2108C58.5919 57.1341 58.7241 57.078 58.8629 57.0454C58.9042 57.0367 58.9456 57.0301 58.9869 57.0258C59.0348 57.0192 59.0827 57.016 59.1306 57.016C59.3036 57.0165 59.4745 57.0535 59.6317 57.1259L69.9312 61.7984L84.1763 68.2606L88.18 70.0775L88.8292 70.3719L105.782 78.0639L108.171 79.1472L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907L139.935 68.7966L165.661 57.1259C165.846 57.0416 166.05 57.0056 166.252 57.0203C166.455 57.0356 166.65 57.1009 166.821 57.2108C166.841 57.2228 166.86 57.2358 166.877 57.25C166.897 57.2625 166.915 57.2772 166.931 57.294C167.071 57.4072 167.184 57.5503 167.261 57.713C167.339 57.8757 167.379 58.0537 167.379 58.2338V119.383ZM127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75ZM127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75ZM88.18 70.0775L88.8292 70.3719V69.8408L88.18 70.0775ZM127.75 73.7907L115.943 79.1472L113.147 80.4162C112.99 80.4869 112.819 80.5239 112.647 80.5239C112.474 80.5239 112.303 80.4869 112.146 80.4162L109.35 79.1472H108.171L111.944 80.8591C112.165 80.9592 112.404 81.0109 112.647 81.0109C112.889 81.0109 113.129 80.9592 113.35 80.8591L117.122 79.1472L128.93 73.7907H127.75Z"
                            fill="white" />
                        <path
                            d="M43.0693 121.083H15.5817C15.5171 121.083 15.4553 121.058 15.4097 121.012C15.364 120.966 15.3384 120.905 15.3384 120.84C15.3384 120.775 15.364 120.713 15.4097 120.668C15.4553 120.622 15.5171 120.597 15.5817 120.597H43.0693C43.1339 120.597 43.1957 120.622 43.2413 120.668C43.287 120.713 43.3126 120.775 43.3126 120.84C43.3126 120.905 43.287 120.966 43.2413 121.012C43.1957 121.058 43.1339 121.083 43.0693 121.083Z"
                            fill="white" />
                        <path
                            d="M27.7098 42.5856C27.261 42.3577 26.8879 42.0044 26.6355 41.5686C26.3832 41.1328 26.2624 40.6331 26.2879 40.13C26.3134 39.6269 26.484 39.142 26.7791 38.7339C27.0742 38.3259 27.4811 38.0122 27.9506 37.8308C29.7535 37.1344 31.7746 38.5557 33.6644 38.1516C35.548 37.7488 36.6376 35.4947 36.188 33.62C35.7385 31.7452 34.1021 30.3332 32.2976 29.6588C31.1191 29.2194 29.8571 29.051 28.6048 29.1659C27.3524 29.2808 26.142 29.6761 25.063 30.3226C23.995 30.988 23.1056 31.9044 22.4721 32.9922C21.8386 34.08 21.48 35.3062 21.4276 36.5643C21.4031 37.8235 21.7104 39.0669 22.3187 40.1694C22.927 41.2718 23.8147 42.1944 24.8924 42.8442C25.3728 43.1213 25.9319 43.3438 26.4721 43.2191C26.9156 43.0749 27.3333 42.8611 27.7098 42.5856Z"
                            fill="#84CDE4" />
                        <path
                            d="M25.7744 30.1785C24.1847 28.0678 22.0386 26.3338 19.5414 25.4741C17.0442 24.6144 14.1905 24.6835 11.8452 25.8984C9.4998 27.1133 7.75077 29.5261 7.56822 32.1632C7.26437 36.5521 11.0108 40.2829 11.3953 44.6654C11.5172 46.0546 11.2919 47.4522 10.7399 48.7325C10.1878 50.0128 9.32622 51.1356 8.23277 51.9996C7.13932 52.8637 5.8483 53.4419 4.47605 53.6821C3.10379 53.9224 1.69337 53.8172 0.371826 53.3761C1.3131 54.1516 2.40444 54.724 3.57729 55.057C4.75013 55.3905 5.97911 55.477 7.1871 55.3122C8.39308 55.131 9.54366 54.6834 10.5554 54.0019C11.5672 53.3204 12.4148 52.4221 13.0367 51.3721C13.8799 49.9056 14.2261 48.2022 14.3606 46.5156C14.5718 43.8487 14.2857 41.1658 13.517 38.6036C13.0968 37.2056 12.5269 35.7671 12.7934 34.3318C12.9453 33.5853 13.313 32.8999 13.8508 32.3607C14.3886 31.8216 15.0728 31.4526 15.8184 31.2994C17.0232 31.0734 18.2552 31.4415 19.4057 31.8651C20.5562 32.2888 21.7162 32.779 22.9417 32.8071C24.1673 32.8351 25.5022 32.2736 25.9758 31.1417L25.7744 30.1785Z"
                            fill="#84CDE4" />
                    </g>
                </svg>

            </div>
        </section>
        <!-- end sección "Suscríbase a nuestro boletín" -->

        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
        </section>
    </main>

    <script>
        const generateStars = () => {
            return `<div class="flex items-center ">
   <svg class="w-3 h-3 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
     fill="currentColor" viewBox="0 0 22 20">
     <path
       d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
   </svg>
   <svg class="w-3 h-3 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
     fill="currentColor" viewBox="0 0 22 20">
     <path
       d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
   </svg>
   <svg class="w-3 h-3 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
     fill="currentColor" viewBox="0 0 22 20">
     <path
       d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
   </svg>
   <svg class="w-3 h-3 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
     fill="currentColor" viewBox="0 0 22 20">
     <path
       d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
   </svg>
   <svg class="w-3 h-3 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
     <path
       d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
   </svg>
 </div>`
        }

        const generateCarousel = () => {

            document.querySelectorAll('[data-carousel-parent]').forEach((carousel) => {

                let template = '';

                if (carousel.dataset.typeTemplate === 'store') {

                    const data = [{
                            store: 'Levis',
                            img: '/images/tienda-1.png'
                        },
                        {
                            store: 'Nike',
                            img: '/images/tienda-2.png'
                        },
                        {
                            store: 'NB',
                            img: '/images/tienda-3.png'
                        },
                        {
                            store: 'Levis',
                            img: '/images/tienda-4.png'
                        },
                        {
                            store: 'Adidas',
                            img: '/images/tienda-5.png'
                        },
                        {
                            store: 'Levis',
                            img: '/images/tienda-1.png'
                        },
                    ]

                    data.forEach(({
                        img,
                        store
                    }, i) => {
                        template += `<div class="carousel-item snap-start	">
        <span class="text-lg">Tienda ${store}</span>
        <div class="relative md:!w-[220px] md:!h-[250px] w-[130px] h-[180px]">
          <img loading="lazy" src="${img}" class="w-full h-full object-cover rounded shadow-lg shadow-black/20" alt="${store}" />
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
                    });

                } else if (carousel.dataset.typeTemplate === 'imageGrid') {

                    const data = [{
                            title: 'Jhly',
                            category: 'Zapatos'
                        },
                        {
                            title: 'Fendi',
                            category: 'Tecnologías y accesorios'
                        },
                        {
                            title: 'Tiendas Ipad',
                            category: 'Productos de Apple'
                        },
                        {
                            title: 'Art Design',
                            category: 'Muebles a mano'
                        },
                        {
                            title: 'Fendi',
                            category: 'Tecnologías y accesorios'
                        },
                        {
                            title: 'Tiendas Ipad',
                            category: 'Productos de Apple'
                        },
                    ]

                    data.forEach(({
                        category,
                        title
                    }, i) => {
                        template += `
              <div class="carousel-item snap-start border border-transparent lg:w-[283px] md:w-[210px] w-[180px]">

              <div class="relative lg:w-[283px] md:w-[210px] w-[180px] lg:h-[450px] h-auto  grid gap-2 grid-cols-2 grid-rows-2 border border-gray-200  p-5">
                <img loading="lazy" src="/images/best-products/best-m1-1.png" class="w-full h-full object-cover rounded" alt="image" />
                <img loading="lazy" src="/images/best-products/best-1-large.png" class="w-full row-span-2 h-full object-cover rounded"
                  alt="image" />
                <img loading="lazy" src="/images/best-products/best-m1-2.png" class="w-full h-full object-cover rounded" alt="image" />
              </div>

              <div class="flex gap-3 py-3 items-center lg:mt-10 mt-3">
                <img loading="lazy" src="/images/best-products/best-title.png" class="lg:w-[50px] w-[35px] h-[50px] lg:h-[70px] object-cover rounded" alt="image" />
                <p class="flex-1">
                  <span>${title} </span> <br>
                  <span class="md:text-sm text-xs">${category}</span>
                </p>
              </div>

            </div>
          `
                    });

                } else {

                    const color = carousel.dataset.color || 'black'

                    const breakPointsWidth =
                        'max-[320px]:!w-[130px] max-[375px]:!w-[160px] max-[425px]:!w-[185px] max-[768px]:!w-[229px] lg:!w-[220px]'

                    const data = [{
                            title: 'New balance age',
                            img: 'product-1.png',
                            price: '17.17',
                            discount: '15.17'
                        },
                        {
                            title: 'Jeans Buda',
                            img: 'product-2.png',
                            price: '117.17',
                            discount: '55.12'
                        },
                        {
                            title: 'Buda Mandala Hoodie',
                            img: 'product-3.png',
                            price: '217.17',
                            discount: '155.17'
                        },
                        {
                            title: 'Jeans Buda',
                            img: 'product-4.png',
                            price: '205.17',
                            discount: '22.17'
                        },
                        {
                            title: 'Chaqueta line',
                            img: 'product-5.png',
                            price: '57.17',
                            discount: '65.14'
                        },
                        {
                            title: 'Jeans Buda',
                            img: 'product-2.png',
                            price: '97.17',
                            discount: '15.17'
                        },
                        {
                            title: 'Anillos veranos',
                            img: 'product-1.png',
                            price: '34.17',
                            discount: '5.17'
                        },
                        {
                            title: 'Chaqueta line',
                            img: 'product-4.png',
                            price: '219.19',
                            discount: '55.17'
                        },
                    ]

                    data.forEach(({
                        discount,
                        img,
                        price,
                        title
                    }, i) => {
                        template += `
          <div class="carousel-item snap-start group ">
            <div class="relative md:!h-[270px] h-[200px] ${breakPointsWidth} overflow-hidden shadow-lg shadow-black/10 rounded bg-transparent">
              <img loading="lazy" src="/images/products/${img}" class="group-hover:scale-[1.1] transition-transform !w-full !h-full !align-bottom	 object-cover rounded" alt="${title}" />
              <button
                data-btn-like
                class=" w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                </svg></button>
            </div>
            <div class="flex gap-4 flex-col pt-3 text-[${color}]">
              <h3 class="text-lg  md:min-h-fit min-h-[60px]">${title}</h3>
              <!-- start stars  -->
              <div class="flex md:flex-row flex-col md:items-center items-start justify-start gap-2 text-[${color}]">
                <span class="text-sm">4.8</span>
                ${generateStars()}
              </div>
              <!-- end stars  -->
              <div class="flex lg:flex-row flex-col xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
                <b class="text-base price">Q${price}</b>
                <span class="${color === 'white' ? 'text-green-400' : 'text-green-600'} line-through text-xs">Q${discount} (25% descuento)</span>
              </div>
              <span class="text-sm">by MysticArtByJose</span>
            </div>
          </div>
          `
                    });
                }

                carousel.innerHTML = template;


                const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
                const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

                const item = carousel.querySelector('.carousel-item');

                // Función para avanzar al siguiente grupo de elementos
                nextBtn.addEventListener('click', function() {
                    carousel.scrollTo({
                        left: carousel.scrollLeft + item.clientWidth,
                        behavior: 'smooth',
                    });
                });

                // Función para retroceder al grupo anterior de elementos
                prevBtn.addEventListener('click', function() {
                    carousel.scrollTo({
                        left: carousel.scrollLeft - item.clientWidth,
                        behavior: 'smooth',
                    });
                });

                carousel.addEventListener('scrollend', (e) => {

                    if (window.screen.width < 1024) return

                    prevBtn.classList[e.target.scrollLeft > 0 ? 'remove' : 'add']('hidden');

                    nextBtn.classList[
                        (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ?
                        'add' :
                        'remove'
                    ]('hidden');

                });

                if (window.screen.width < 1024) {
                    prevBtn.classList.add('hidden')
                    nextBtn.classList.add('hidden')
                }
            });
        };
        generateCarousel();


        const generateCarouselHero = () => {

            const generateTemplateCarouselHero = (isHeroSection) => {

                const carrouselItems = [{
                        img: 'https://picsum.photos/seed/1/650/400',
                        title: 'Buhogt',
                        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                        buttonLabel: '',
                    },
                    {
                        img: 'https://picsum.photos/seed/2/650/400',
                        title: 'Buhogt',
                        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                        buttonLabel: 'Comienza ahora',
                    },
                    {
                        img: 'https://picsum.photos/seed/3/650/400',
                        title: 'Buhogt',
                        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                        buttonLabel: 'Comienza ahora',
                    },
                    {
                        img: 'https://picsum.photos/seed/4/650/400',
                        title: 'Buhogt',
                        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                        buttonLabel: 'Comienza ahora',
                    },
                    {
                        img: 'https://picsum.photos/seed/5/650/400',
                        title: 'Buhogt',
                        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime atque alias magni, numquam accusamus, corrupti soluta praesentium magnam similique, delectus sapiente dolores quasi excepturi molestias odit ipsam aspernatur ullam non!',
                        buttonLabel: 'Comienza ahora',
                    },
                ];

                let template = ''

                carrouselItems.forEach(item => {
                    template += !isHeroSection ?
                        `<div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="${item.img}"
            class="aspect-video absolute h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 z-10 left-1/2"
            alt="...">
        </div>` :
                        `<div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="${item.img}"
          class="object-cover absolute h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 z-10 left-1/2"
          alt="...">
        <div
          class="absolute -translate-y-1/2 top-1/2 flex gap-5 flex-col justify-start items-start text-white z-20 md:px-10 px-5">
          <h5 class="md:text-3xl text-xl font-bold">${item.title}</h5>
          <p class="md:text-base text-sm">${item.description}</p>
        </div>
        <div class="w-full h-full absolute top-0 left-0 bg-black/70 z-10"></div>
      </div>`
                })
                return template
            }

            document.querySelector('#carousel-section-patrocinado').innerHTML = generateTemplateCarouselHero(false)
            document.querySelector('#carousel-section-hero').innerHTML = generateTemplateCarouselHero(true)

        };
        generateCarouselHero()
    </script>


    <script>
        const manageLikes = () => {
            const likesNavbar = document.querySelector('#button-like-navbar')
            let counter = 0

            document.querySelectorAll('.carousel-item [data-btn-like]').forEach($btnLike => {

                $btnLike.addEventListener('click', () => {
                    const svgHeart = $btnLike.children[0].children[0]

                    svgHeart.classList.toggle('fill-red-500')

                    svgHeart.classList.contains('fill-red-500') ?
                        counter++
                        :
                        counter--


                    if (counter > 0) {
                        likesNavbar.children[0].classList.add('text-red-500')
                        likesNavbar.children[1].classList.remove('hidden')
                        likesNavbar.children[1].textContent = counter > 99 ? '99+' : counter

                    } else {
                        likesNavbar.children[0].classList.remove('text-red-500')
                        likesNavbar.children[1].classList.add('hidden')
                        likesNavbar.children[1].textContent = ''
                    }

                })
            })

        }

        manageLikes()
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
