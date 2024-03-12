@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <style>
        [data-carousel-parent],
        .hidden-scroll {
            scrollbar-width: none;
        }

        [data-carousel-parent]::-webkit-scrollbar,
        .hidden-scroll::-webkit-scrollbar {
            display: none;
        }

        .carousel-item {
            flex: 0 0 auto;
        }
    </style>
    <main class="xl:px-0 ">
        <!-- start hero -->
        <header class=" 2xl:max-w-7xl max-w-full mx-auto md:mb-14 mb-0 w-full md:h-[300px] sm:h-[200px] h-[120px]">
            <div class="w-full h-full relative">
                <button
                    class="lg:hidden block rounded-full p-2 px-3 flex items-center justify-center gap-2 absolute top-4 right-4 bg-white shadow-md shadow-black/50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                    </svg>
                    <span class="text-sm">3K</span>
                </button>
                <img src="/images/tienda-especifica-banner.png" loading="lazy" class="w-full h-full object-cover"
                    alt="image" />
            </div>
        </header>
        <!-- end hero -->

        <!-- start sección sobre información de la tienda -->
        <section class="max-w-7xl mx-auto px-4 relative group">
            <div data-hide-section
                class="lg:grid grid-cols-[1fr,1fr,auto] flex flex-wrap lg:gap-12 gap-5 place-items-start transition-all lg:h-fit h-[320px] overflow-hidden">

                <div
                    class="lg:order-1 sm:order-1 order-1 flex md:flex-nowrap flex-wrap md:justify-start justify-center items-center gap-5">

                    <img src="/images/tienda-1.png"
                        class="md:w-[130px] md:h-[130px] w-[90px] h-[90px] rounded-md object-cover md:static absolute top-0 left-4   md:mt-0 -mt-[45px] border border-black"
                        alt="image" />

                    <div class="flex flex-col gap-1 md:mt-0 mt-16">
                        <h2 class="text-3xl ">Levis</h2>
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
                            <div class="flex gap-3 items-center">
                                <span class="">7,654 ventas</span>
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

                <div class="lg:order-3 sm:order-2 order-3 justify-center items-start flex-1 lg:flex hidden">
                    <div class="flex flex-col gap-2 items-center md:mt-0 sm:mt-16 mt-0">
                        <img loading="lazy"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            class="w-[90px] rounded-full h-[90px] object-cover" alt="image" />
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

            <!-- <button
                        class="lg:mt-2 mt-10 p-3 border border-black lg:w-[30%] md:w-[50%] lg:mx-0 mx-auto w-full justify-center gap-3 items-center hover:bg-gray-100 lg:flex hidden ">
                        Seguir esta tienda
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                          <path fill="none" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                        </svg>
                      </button> -->

            <input type="checkbox" class="hidden" id="read-more">
            <label data-read-more for="read-more"
                class="lg:hidden block text-blue-500 active:text-blue-600 font-bold px-2 pt-3 border-t border-gray-300 w-full bg-white text-start absolute bottom-0 left-0 text-sm">
                Leer más...
            </label>
        </section>
        <!-- end sección sobre información de la tienda -->

        <!-- start sección productos -->
        <section class="max-w-7xl mx-auto px-4 lg:grid-cols-[200px,1fr] grid-cols-1 gap-10 mt-16  lg:grid hidden">
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

                <!-- start jeans mobile -->
                <div class="lg:hidden block ">
                    <button id="btn-drawer-categories-mobile"
                        class="border border-black p-3 w-full mb-10 flex justify-center gap-2 items-center active:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                            <path fill="#000"
                                d="M3.5 2A1.5 1.5 0 0 0 2 3.5v2A1.5 1.5 0 0 0 3.5 7h2A1.5 1.5 0 0 0 7 5.5v-2A1.5 1.5 0 0 0 5.5 2zm0 7A1.5 1.5 0 0 0 2 10.5v2A1.5 1.5 0 0 0 3.5 14h2A1.5 1.5 0 0 0 7 12.5v-2A1.5 1.5 0 0 0 5.5 9zM9 3.5A1.5 1.5 0 0 1 10.5 2h2A1.5 1.5 0 0 1 14 3.5v2A1.5 1.5 0 0 1 12.5 7h-2A1.5 1.5 0 0 1 9 5.5zM10.5 9A1.5 1.5 0 0 0 9 10.5v2a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 12.5 9z" />
                        </svg>
                        <span class="underline text-orange-500 font-bold text-lg">Jeans</span>
                    </button>

                    <div id="drawer-categories-mobile"
                        class="sm:!w-[50%] !w-screen transition-all translate-y-full h-[100dvh] fixed top-0 left-0 bg-white z-20 overflow-x-scroll shadow-xl shadow-black/50">
                        <header
                            class="min-h-[70px] border-b border-gray-400 flex justify-between items-center px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10">
                            <span class="font-semibold text-lg underline text-orange-500">Jeans</span>
                            <button id="close-drawer-categories-mobile" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 active:text-red-500 text-black"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="m9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                                </svg>
                            </button>
                        </header>

                        <div class="flex flex-col gap-2 p-4">
                            <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Slim
                                chicos</a>
                            <hr class="border border-gray-300 my-1" />
                            <a href=""
                                class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Vaqueros</a>
                            <hr class="border border-gray-300 my-1" />
                            <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Vintage
                                Jeans</a>
                            <hr class="border border-gray-300 my-1" />
                            <a href=""
                                class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Encampanados</a>
                            <hr class="border border-gray-300 my-1" />
                            <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Jeans
                                deportivos</a>
                            <hr class="border border-gray-300 my-1" />
                            <a href=""
                                class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Accesorios</a>
                        </div>
                    </div>
                </div>
                <!-- end jeans mobile -->

            </aside>

            <!-- start productos -->
            <div class="relative">
                <div class="lg:grid flex md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-center sm:gap-5 gap-4 gap-y-10  md:overflow-x-auto overflow-x-scroll snap-mandatory snap-x justify-start"
                    data-carousel-parent>
                    <!-- start item -->

                    <!-- end item -->
                </div>
                <!-- start pagination -->
                <div class="mt-16 flex flex-col flex-wrap sm:w-fit w-full">
                    <span class="md:text-sm text-base text-center md:text-start mb-8 block">Te queda mucho por
                        descubrir</span>

                    <div class="flex md:justify-between justify-center items-center gap-5">

                        <button data-btn-prev-pagination class="opacity-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                        </button>

                        <div data-pagination
                            class="flex md:gap-5 gap-2 md:overflow-x-auto overflow-x-scroll md:w-auto w-[170px] snap-mandatory snap-x hidden-scroll">
                            <button
                                class="snap-start flex-none w-12 h-12  bg-yellow-500 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="1">1</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="2">2</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="3">3</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="4">4</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="5">5</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="6">6</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="7">7</button>
                        </div>

                        <button data-btn-next-pagination>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- end pagination -->
            </div>
            <!-- end productos -->
        </section>
        <!-- end sección sección productos -->

        <section class="mt-16 lg:hidden block">
            <header class="flex shadow-lg shadow-black/10" id="tabs-header">
                <button id="items" class="flex-1 active:bg-gray-200 p-2 border-b-2 border-black">Productos</button>
                <button id="about" class="flex-1 active:bg-gray-200 p-2">Nosotros</button>
            </header>

            <div id="items-tab" class="tab-body max-w-7xl mx-auto p-4 pt-8">

                <header class="mb-5 flex flex-col gap-3 justify-start">
                    <div
                        class="w-full border border-black rounded relative overflow-hidden has-[:focus]:outline outline-black outline-1 outline-offset-2">
                        <input type="text" placeholder="Busca todos los 177 productos"
                            class="bg-gray-200 text-black border-none outline-none  p-2 rounded w-full px-3 text-base pr-9">

                        <div class="absolute bg-gray-200 top-0 right-0 w-8 h-full grid items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex gap-1">
                        {{-- <select class="flex-1 p-2 px-3 rounded-full border border-black bg-white ">
                            <option value="all" class="text-base ">Todos (177)</option>
                            <option value="op-2" class="text-base">Option 2</option>
                            <option value="op-3" class="text-base">Option 3</option>
                        </select> --}}
                        <div class="w-full relative">
                            <button id="dropdown-sizes" data-dropdown-toggle="dropdown-size-toggle"
                                class="w-full p-3 px-4 !m-0 border border-black flex items-center justify-between rounded"
                                type="button">
                                Todos (177)
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown-size-toggle"
                                class="bg-white z-50 hidden shadow w-full border border-gray-500 p-2 rounded ">
                                <ul class="" aria-labelledby="dropdown-sizes">
                                    <li class="hover:bg-blue-950 hover:text-white p-2">2</li>
                                    <li class="hover:bg-blue-950 hover:text-white p-2">6</li>
                                    <li class="hover:bg-blue-950 hover:text-white p-2">4</li>
                                </ul>
                            </div>
                        </div>
                        <button class="p-2 px-3 rounded  active:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M11 7L8 4m0 0L5 7m3-3v16m6-3l3 3m0 0l3-3m-3 3V4" />
                            </svg>
                        </button>
                    </div>

                </header>

                <div class="lg:hidden grid md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-start gap-5 gap-y-10  justify-start"
                    id="list-products-mobile" data-carousel-parent>
                    <!-- product list -->
                </div>

                <!-- start pagination -->
                <div class="mt-16 flex flex-col flex-wrap sm:w-fit w-full">
                    <span class="md:text-sm text-base text-center md:text-start mb-8 block">Te queda mucho por
                        descubrir</span>

                    <div class="flex md:justify-between justify-center items-center gap-5">

                        <button data-btn-prev-pagination class="opacity-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                        </button>

                        <div data-pagination
                            class="flex md:gap-5 gap-2 md:overflow-x-auto overflow-x-scroll md:w-auto w-[170px] snap-mandatory snap-x hidden-scroll">
                            <button
                                class="snap-start flex-none w-12 h-12  bg-yellow-500 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="1">1</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="2">2</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="3">3</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="4">4</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="5">5</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="6">6</button>
                            <button
                                class="snap-start flex-none w-12 h-12  bg-gray-300 hover:border-gray-500 border border-transparent rounded-full grid place-items-center"
                                data-page="7">7</button>
                        </div>

                        <button data-btn-next-pagination>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- end pagination -->
            </div>
            </div>

            <div id="about-tab" class="tab-body hidden max-w-7xl mx-auto p-4 pt-8">

                <div class="   justify-center items-start  flex">
                    <div class="flex flex-col gap-2 items-center md:mt-0 sm:mt-16 mt-0">
                        <img loading="lazy"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            class="w-[90px] rounded-full h-[90px] object-cover" alt="image" />
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
        </section>

        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
        </section>

    </main>

    <script>
        const paginationInit = () => {
            document.querySelectorAll('[data-pagination]').forEach($paginationContainer => {

                let page = 1
                const btnPrev = $paginationContainer.parentElement.querySelector('[data-btn-prev-pagination]')
                const btnNext = $paginationContainer.parentElement.querySelector('[data-btn-next-pagination]')

                btnNext.addEventListener('click', () => {
                    if (btnPrev.classList.contains('opacity-0')) btnPrev.classList.remove('opacity-0')

                    const nextPage = $paginationContainer.querySelector(`[data-page="${page + 1}"]`)

                    if ($paginationContainer.querySelector(`[data-page="${page + 2}"]`) === null) {
                        btnNext.classList.add('opacity-0')
                    }

                    if (nextPage === null) {
                        return
                    }

                    page++

                    $paginationContainer.querySelectorAll('[data-page]').forEach(e => {
                        e.classList.add('bg-gray-300')
                        e.classList.remove('bg-yellow-500')
                    })

                    nextPage.classList.remove('bg-gray-300')
                    nextPage.classList.add('bg-yellow-500')
                    $paginationContainer.scroll({
                        behavior: 'smooth',
                        left: $paginationContainer.scrollLeft + $paginationContainer.children[0]
                            .clientWidth
                    })
                })

                btnPrev.addEventListener('click', () => {

                    if (btnNext.classList.contains('opacity-0')) btnNext.classList.remove('opacity-0')

                    const prevPage = $paginationContainer.querySelector(`[data-page="${page - 1}"]`)

                    if ($paginationContainer.querySelector(`[data-page="${page - 2}"]`) === null) {
                        btnPrev.classList.add('opacity-0')
                    }

                    if (prevPage === null) return
                    page--

                    $paginationContainer.querySelectorAll('[data-page]').forEach(e => {
                        e.classList.add('bg-gray-300')
                        e.classList.remove('bg-bg-yellow-500')
                    })

                    prevPage.classList.remove('bg-gray-300')
                    prevPage.classList.add('bg-yellow-500')
                    $paginationContainer.scroll({
                        behavior: 'smooth',
                        left: $paginationContainer.scrollLeft - $paginationContainer.children[0]
                            .clientWidth
                    })
                })

                $paginationContainer.querySelectorAll('[data-page]').forEach(e => {

                    e.addEventListener('click', () => {
                        page = +e.dataset.page

                        $paginationContainer.querySelector(
                                `[data-page="${+e.dataset.page - 1}"]`) === null ?
                            btnPrev.classList.add('opacity-0') :
                            btnPrev.classList.remove('opacity-0')

                        $paginationContainer.querySelector(
                                `[data-page="${+e.dataset.page + 1}"]`) === null ?
                            btnNext.classList.add('opacity-0') :
                            btnNext.classList.remove('opacity-0')


                        $paginationContainer.querySelectorAll('[data-page]').forEach(e => {
                            e.classList.add('bg-gray-300')
                            e.classList.remove('bg-bg-yellow-500')
                        })

                        e.classList.remove('bg-gray-300')
                        e.classList.add('bg-yellow-500')
                    })
                })


            })
        }
        paginationInit()


        const generateStars = (amountFilled = 4, value = '4.8', directionValue = 'left') => {

            const starsFilled = Array(amountFilled).fill(`
            <svg xmlns="http://www.w3.org/2000/svg" class="md:${directionValue === 'left' ? 'size-4' : 'size-5'} size-4" viewBox="0 0 16 16"><path fill="#000" fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393l3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39l.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574l-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293l1.41-3.393A.75.75 0 0 1 8 1.75" clip-rule="evenodd"/></svg>
          `)

            const starsUnfilled = Array(5 - amountFilled).fill(`
            <svg xmlns="http://www.w3.org/2000/svg" class="md:${directionValue === 'left' ? 'size-4' : 'size-5'} size-4" viewBox="0 0 24 24"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345z"/></svg>
          `)

            return `
            <div class="flex  items-center justify-start gap-2 ${directionValue === 'left' ? 'flex-row' : 'flex-row-reverse'}">
              <span class="md:${directionValue === 'left' ? 'text-xs' : 'text-sm'} text-xs">${value}</span>
              <div class="flex items-center">
                ${starsFilled.join(' ')}
                ${starsUnfilled.join(' ')}
              </div>
            </div>
          `
        }


        const generateCarousel = () => {

            document.querySelectorAll('[data-carousel-parent]').forEach(carousel => {

                const carouselInit = () => {
                    const breakPointsWidth =
                        'max-[320px]:!w-[134px] max-[375px]:!w-[160px] max-[425px]:!w-[185px] max-[768px]:!w-[229px] lg:!w-[220px]'

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
                            title: 'Chaqueta line',
                            img: 'product-4.png',
                            price: '219.19',
                            discount: '55.17'
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

                    ]
                    let template = ''
                    data.forEach(({
                        discount,
                        img,
                        price,
                        title
                    }, i) => {
                        template += `<div class="carousel-item snap-start	">
                  <div class="relative md:!h-[250px] h-[180px] ${breakPointsWidth}">
                    <img src="/images/products/${img}" class="w-full h-full object-cover rounded" alt="${title}" />
                    <button
                      class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                      </svg></button>
                  </div>
                  <div class="flex gap-4 flex-col pt-3">
                    <h3 class="text-lg  md:min-h-fit min-h-[50px] line-clamp-2">${title}</h3>
                    ${generateStars()}
                    <div class="flex lg:flex-row flex-col xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
                      <b class="text-base">Q${price}</b>
                      <span class="text-green-600 text-base">Q${discount} </span>
                    </div>
                    <span class="text-sm">by MysticArtByJose</span>
                  </div>
                </div>
              `
                    })
                    carousel.innerHTML = template
                }

                carouselInit()

            })
        }
        generateCarousel()

        const generateCategoriesMovil = () => {
            const $drawerCategories = document.querySelector('#drawer-categories-mobile')

            document.querySelector('#close-drawer-categories-mobile').addEventListener('click', () => {
                $drawerCategories.classList.remove('translate-y-0')
                $drawerCategories.classList.add('translate-y-full')
            })

            document.querySelector('#btn-drawer-categories-mobile').addEventListener('click', () => {
                $drawerCategories.classList.add('translate-y-0')
                $drawerCategories.classList.remove('translate-y-full')
            })
        }
        generateCategoriesMovil()

        const tabs = () => {
            document.querySelectorAll('#tabs-header button').forEach(tabBtn => {
                tabBtn.addEventListener('click', () => {
                    document.querySelectorAll('#tabs-header button').forEach(btn => {
                        btn.classList.remove('border-b-2')
                    })
                    tabBtn.classList.add('border-b-2', 'border-black')

                    const tabId = '#' + tabBtn.id + '-tab'

                    tabBtn.parentElement.parentElement.querySelectorAll('.tab-body').forEach(tab => {
                        tab.classList.add('hidden')
                    })
                    document.querySelector(tabId).classList.remove('hidden')
                })
            })
        }
        tabs()

        const readMoreFn = () => {
            const input = document.getElementById('read-more')
            const label = document.querySelector('[data-read-more]')
            const sectionToHide = document.querySelector('[data-hide-section]')


            input.addEventListener('change', () => {
                label.textContent = input.checked ? 'Leer menos' : 'Leer más...'

                if (input.checked) {
                    label.classList.remove('bottom-0')
                    label.classList.add('-bottom-[50px]')
                    sectionToHide.classList.remove('h-[320px]')
                } else {
                    label.classList.remove('-bottom-[50px]')
                    label.classList.add('bottom-0')
                    sectionToHide.classList.add('h-[320px]')
                }

            })
        }
        readMoreFn()
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
