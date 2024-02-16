@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <main class="xl:px-0 ">

        <!-- start hero -->
        <header class=" 2xl:max-w-7xl max-w-full mx-auto mb-14 w-full md:h-[350px] h-[200px]">
            <div class="w-full h-full">
                <img src=" https://placehold.co/600x310" class="w-full h-full object-cover" alt="image" />
            </div>
        </header>
        <!-- end hero -->

        <!-- start sección sobre información de la tienda -->
        <section class=" max-w-7xl mx-auto px-4 ">

            <div class="lg:grid grid-cols-[1fr,1fr,auto] flex flex-wrap lg:gap-12 gap-5 place-items-start">

                <div
                    class="lg:order-1 sm:order-1 order-1 flex md:flex-nowrap flex-wrap md:justify-start justify-center items-center gap-3">
                    <img src=" https://placehold.co/300x300" class="w-[130px] rounded-md h-[130px] object-cover"
                        alt="image" />
                    <div class="flex flex-col gap-1">
                        <h2 class="text-3xl">Levis</h2>
                        <span>Archivos SVG para cortar imprimir o Sublimar</span>
                        <span class="text-gray-500">America del Norte</span>
                        <div class="flex md:flex-row flex-col justify-start gap-3 md:items-center items-start text-sm">
                            <span class="text-orange-500 flex items-center justify-start gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path fill="orange"
                                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2m3.23 15.39L12 15.45l-3.22 1.94a.502.502 0 0 1-.75-.54l.85-3.66l-2.83-2.45a.505.505 0 0 1 .29-.88l3.74-.32l1.46-3.45c.17-.41.75-.41.92 0l1.46 3.44l3.74.32a.5.5 0 0 1 .28.88l-2.83 2.45l.85 3.67c.1.43-.36.77-.74.54" />
                                </svg>
                                Vendedor estrella
                            </span>
                            <span>7,654 ventas</span>
                            <div class="flex items-center justify-start gap-2">
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
                                    <svg class="w-4 h-4 text-black ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- end stars -->
                        </div>
                    </div>
                </div>

                <div class="lg:order-2 sm:order-3 order-2 ">
                    <span class="text-lg block mb-6">Levis es uno de los mejores jeans</span>
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-5">
                        <div>
                            <div class="mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                                    <g fill="orange">
                                        <path
                                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793a.72.72 0 0 1 .076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3z" />
                                        <path
                                            d="M15 6.954L8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5z" />
                                    </g>
                                </svg>
                            </div>
                            <h6 class="block mb-1">Respuestas rápidas</h6>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, laudantium!
                            </p>
                        </div>
                        <div>
                            <div class="mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                                    <path fill="orange" fill-rule="evenodd"
                                        d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393l3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39l.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574l-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293l1.41-3.393A.75.75 0 0 1 8 1.75"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h6 class="block mb-1">Buenas reseñas</h6>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eos expedita
                                non!</p>
                        </div>
                    </div>
                </div>

                <div class="lg:order-3 sm:order-2 order-3 flex justify-center items-start flex-1">
                    <div class="flex flex-col gap-2 items-center">
                        <img src=" https://placehold.co/300x300" class="w-[90px] rounded-full h-[90px] object-cover"
                            alt="image" />
                        <div class="flex flex-col lg:text-base md:text-sm text-base gap-2 justify-center items-center">
                            <span>Tracey</span>
                            <span class="flex items-center justify-center lg:gap-2 gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16">
                                    <g fill="#000">
                                        <path
                                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793a.72.72 0 0 1 .076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3z" />
                                        <path
                                            d="M15 6.954L8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5z" />
                                    </g>
                                </svg>
                                Contacto
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <button
                class="lg:mt-2 mt-10 p-3 border border-black lg:w-[30%] md:w-[50%] lg:mx-0 mx-auto w-full flex justify-center gap-3 items-center hover:bg-gray-100">
                Seguir esta tienda
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="none" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                </svg>
            </button>
        </section>
        <!-- end sección sobre información de la tienda -->

        <!-- start sección productos -->
        <section class="max-w-7xl mx-auto px-4 grid lg:grid-cols-[200px,1fr] grid-cols-1 gap-10 mt-16">
            <aside class="">
                <div class="lg:block hidden sticky top-5 left-0">
                    <h3 class="text-orange-500 underline text-xl block mb-3">Jeans</h3>
                    <div class="flex flex-col gap-2">
                        <a href="" class="hover:underline font-semibold">Slim chicos</a>
                        <a href="" class="hover:underline font-semibold">Vaqueros</a>
                        <a href="" class="hover:underline font-semibold">Vintage Jeans</a>
                        <a href="" class="hover:underline font-semibold">Encampanados</a>
                        <a href="" class="hover:underline font-semibold">Jeans deportivos</a>
                        <a href="" class="hover:underline font-semibold">Accesorios</a>
                    </div>
                </div>


                <div id="accordion-collapse-tienda" data-accordion="collapse" class="w-full lg:hidden block">
                    <h2 id="accordion-collapse-heading-tienda">
                        <button type="button"
                            class="flex items-center block border border-black justify-between w-full p-2 font-medium  gap-3 !bg-white"
                            data-accordion-target="#accordion-collapse-body-tienda" aria-expanded="false"
                            aria-controls="accordion-collapse-body-tienda">
                            <h3 class="text-orange-500 underline text-xl">Jeans</h3>
                            <svg data-accordion-icon class="w-3 h-3 rotate-360 shrink-0" aria-hidden="false"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-tienda" class="hidden p-3"
                        aria-labelledby="accordion-collapse-heading-tienda">
                        <div class="flex flex-col gap-3">
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Slim
                                chicos</a>
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Vaqueros</a>
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Vintage
                                Jeans</a>
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Encampanados</a>
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Jeans
                                deportivos</a>
                            <a href=""
                                class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Accesorios</a>
                        </div>
                    </div>
                </div>

            </aside>

            <div class="grid  md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-center gap-5 gap-y-10"
                x-data="{ items: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1] }">
                <!-- start item -->
                <template x-for="item in items">
                    <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto ">
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
                            <div class="flex md:items-center items-start flex-col md:flex-row justify-start gap-2">
                                <span class="text-sm">4.8</span>
                                <div class="flex md:items-center items-start">
                                    <svg class="w-4 h-4 text-black md:ms-1 ms-0" aria-hidden="true"
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
                            <div class="flex xl:gap-8 md:gap-5 gap-3 md:items-center items-start md:flex-row flex-col">
                                <b class="text-base">Q27.88</b>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                            <span class="text-sm">by MysticArtByJose</span>
                            <button
                                class="border border-black md:p-2 p-1 py-2 mt-2 hover:bg-gray-200 md:text-base text-sm">Añadir
                                al
                                carrito</button>
                        </div>
                    </div>
                </template>
                <!-- end item -->
            </div>
        </section>
        <!-- end sección sección productos -->


        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
        </section>


    </main>

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

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
