<div>
    <div id="modal-results" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 md:h-[calc(100%-1rem)] h-[100dvh] ">
        <div class="relative md:p-4 p-2 xl:w-[1000px] lg:w-[80%] md:h-full h-[90dvh] w-full">
            <!-- Modal content -->
            <div
                class="relative bg-white shadow md:h-[550px] !pb-10 h-full border border-gray-500 w-full md:gap-5 gap-2 md:p-10 p-2 overflow-hidden grid xl:grid-cols-[300px,1fr] lg:grid-cols-[220px,1fr] md:grid-cols-[200px,1fr] grid-cols-1">

                <div class="flex justify-end w-full absolute top-0 right-0 p-2">
                    <button type=" button"
                        class="hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                        id="btn-modal-results-close">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <aside class="p-5 lg:border-none border border-black/50">
                    <div class="md:block hidden">
                        <div class="mb-8 ">
                            <h5 class="lg:text-2xl text-xl block font-semibold">Mejores sugerencias</h5>
                            <span class="text-sm text-gray-500" id="text-search"></span>
                        </div>
                        <ul class="lg:text-xl text-lg flex flex-col gap-5 overflow-y-scroll md:h-[320px] h-[100px]">
                            <li><a class="hover:underline" href="">Tenis</a></li>
                            <li><a class="hover:underline" href="">Sudaderas Vintage</a></li>
                        </ul>
                    </div>

                    <div class="md:hidden block">
                        <div id="accordion-results" data-accordion="collapse">
                            <h2 id="accordion-results-heading-1">
                                <button type="button"
                                    class="flex items-center !bg-transparent border border-black justify-between w-full p-2 !text-black font-medium gap-3"
                                    data-accordion-target="#accordion-results-body-1" aria-expanded="false"
                                    aria-controls="accordion-results-body-1">
                                    <h5 class="!text-black" id="text-search-movil">Mejores sugerencias</h5>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-results-body-1" class="hidden"
                                aria-labelledby="accordion-collapse-results-1">
                                <ul class="text-lg flex flex-col gap-5 p-2 pt-4">
                                    <li><a class="hover:underline" href="">Tenis</a></li>
                                    <li><a class="hover:underline" href="">Sudaderas Vintage</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </aside>

                <section
                    class="overflow-y-scroll pt-5 pb-8 md:px-0 px-5 grid lg:grid-cols-2 grid-cols-1 justify-center place-items-center gap-x-2 gap-y-8 border border-black/50 lg:border-none"
                    x-data="{ items: [1, 2, 3, 4, 5] }">
                    <!-- start item -->
                    <template x-for="item in items">
                        <div class="carousel-item xl:w-[220px] w-[210px] h-auto  ">
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
                    </template>
                    <!-- end item -->
                </section>

            </div>
        </div>
    </div>

    <!-- start banner -->
    <div class="bg-yellow-500 text-white font-bold text-center py-5 text-sm ">
        <span> -20% de descuento con el código: BTR20 </span>
    </div>
    <!-- end banner -->

    <!-- start navbar -->
    <nav class="flex justify-between items-center font-poppins py-4 max-w-7xl mx-auto lg:gap-16 gap-5 xl:px-0 px-4">

        <img src="/assets/logo/logo_horizontal.svg" alt="Logo" class="w-32 object-cover" />

        <div class="md:flex hidden items-center xl:gap-8 gap-4 flex-1">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-sm text-center inline-flex items-center " type="button">productos <svg
                    class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                    </li>
                </ul>
            </div>

            <form id="form-search-navbar"
                class="flex items-center border border-black rounded-full overflow-hidden w-fit  outline-none flex-1">

                <input name="search" placeholder="Busca lo que se te ocurra" type="text"
                    class="focus:ring-0 border-none rounded-md w-full p-2 pl-5 pr-0 text-base outline-none" />

                <button data-modal-target="modal-results" class="px-3 pr-5 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[20px] md:h-[20px] w-[10px] h-[10px]"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
                    </svg>
                </button>

            </form>


            {{-- <form id="form-search-navbar" class="flex flex-1 w-full">
                <div class="flex flex-1">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-primary-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form> --}}

        </div>

        <div class="md:flex hidden items-center gap-5">
            @guest
                <a href="{{ route('login') }}">
                    <span class="lg:block hidden">Iniciar sesión</span>
                    <span class="lg:hidden block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 20 20">
                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75z" />
                                <path
                                    d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10" />
                            </g>
                        </svg>
                    </span>
                </a>
                <a href="">
                    <span class="lg:block hidden">Registrarse</span>
                    <span class="lg:hidden block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                        </svg>
                    </span>
                </a>
            @endguest

            @auth
                <a href="">
                    <span class="lg:block hidden">Tienda</span>
                    <span class="lg:hidden block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75" />
                        </svg>
                    </span>
                </a>
            @endauth
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
                    <path fill="red"
                        d="m11.645 20.91l-.007-.003l-.022-.012a15.247 15.247 0 0 1-.383-.218a25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25C2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052A5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25c0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17a15.247 15.247 0 0 1-.383.219l-.022.012l-.007.004l-.003.001a.752.752 0 0 1-.704 0z" />
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
                </svg>
            </a>
            @auth
                <a href="" class="md:flex hidden justify-center items-center gap-[2px] flex-col text-[15px]">
                    <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}"
                        class="w-[35px] h-[35px] object-cover rounded-full" alt="image" />
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}" class="flex items-center"
                        @click.prevent="$root.submit();">

                        {{ __('Cerrar Sesión') }}
                    </x-dropdown-link>
                </form>

            @endauth
        </div>



        <button class="font-medium rounded-lg text-sm px-5 py-2.5 md:hidden flex items-center gap-2 flex-row-reverse"
            type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
            aria-controls="drawer-example">
            <span class="hidden sm:block">Menú</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px]" viewBox="0 0 20 20">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M6 4.75A.75.75 0 0 1 6.75 4h10.5a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 4.75M6 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 10m0 5.25a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H6.75a.75.75 0 0 1-.75-.75M1.99 4.75a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1zm0 10.5a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1zm0-5.25a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <div id="drawer-example"
            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-primary-950"
            tabindex="-1" aria-labelledby="drawer-label">

            <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>

            <hr class="mb-5 mt-8">

            <form id="form-search-navbar-movil"
                class="flex items-center border border-black rounded-full overflow-hidden w-fit bg-white flex-1">
                <input placeholder="Busca lo que se te ocurra xd" name="search" type="text"
                    class="focus:ring-0 border-none rounded-md w-full p-2 pl-5 pr-0 text-base outline-none" />
                <button class="px-3 pr-5 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px]" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
                    </svg>
                </button>
            </form>

            <hr class="mb-5 mt-8">

            <div class="text-white flex flex-col gap-5 text-lg">
                <a href="{{ route('login') }}" class="flex items-center gap-5 justify-start">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 20 20">
                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75z" />
                                <path
                                    d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10" />
                            </g>
                        </svg>
                    </span>
                    <span>Iniciar sesión</span>
                </a>
                <a href="{{ route('login') }}" class="flex items-center gap-5 justify-start">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                        </svg>
                    </span>
                    <span>Registrarse</span>
                </a>
                <a href="" class="flex items-center gap-5 justify-start">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75" />
                        </svg>
                    </span>
                    <span>Tienda</span>
                </a>
                <a href="" class="flex items-center gap-5 justify-start">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[26px] h-[26px]" viewBox="0 0 24 24">
                            <path fill="red"
                                d="m11.645 20.91l-.007-.003l-.022-.012a15.247 15.247 0 0 1-.383-.218a25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25C2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052A5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25c0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17a15.247 15.247 0 0 1-.383.219l-.022.012l-.007.004l-.003.001a.752.752 0 0 1-.704 0z" />
                        </svg>
                    </span>
                    <span>Favoritos</span>
                </a>
                <a href="" class="flex items-center gap-5 justify-start">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[26px] h-[26px]" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
                        </svg>
                    </span>
                    <span>Carrito</span>
                </a>
            </div>

        </div>
    </nav>
    <!-- end navbar -->

    <!-- start categorías -->
    <div class=" bg-gray-100">
        <div class="max-w-7xl mx-auto p-4 xl:flex hidden justify-between gap-5 items-center flex-wrap">

            <section class="flex items-center justify-start gap-8 flex-wrap">
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="moda-mujer"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Moda Mujer
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="moda-mujer"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="moda-hombre"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Moda Hombre
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="moda-hombre"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="hogar-jardin"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Hogar & Jardín
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="hogar-jardin"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="salud-belleza"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Salud y belleza
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="salud-belleza"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="collecionable-arte"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Coleccionables y Arte
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="collecionable-arte"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="bolsos"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Bolsos
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="bolsos"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="joyeria"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Joyería
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="joyeria"
                        class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
            </section>

            <div class="flex justify-end flex-1">
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="mas"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Más
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="mas"
                        class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end dropdown -->
            </div>
        </div>

        <div class="w-full xl:hidden flex flex-col">

            <!-- star dropdown categorías -->
            <div id="accordion-collapse" data-accordion="collapse" class="w-full">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 gap-3"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                        aria-controls="accordion-collapse-body-1">
                        <span>Categorías</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden p-3"
                    aria-labelledby="accordion-collapse-heading-1">
                    <!-- start categorías -->

                    <!-- end categorías -->
                </div>
            </div>
            <!-- end dropdown categorías -->
        </div>
    </div>
    <!-- end categorías -->




    <main class="mt-[5dvh] xl:px-0 ">

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
                        <button type="button" class="w-3 h-3 rounded-full border border-white"
                            :aria-current="index === 0" :aria-label="`Slide ${index}`" :data-carousel-slide-to="index">
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

            <div class="relative overflow-hidden mt-8">
                <!-- start carousel -->
                <div class="flex justify-start items-start gap-[35px]" data-carousel-parent data-gap="35"
                    id="seccion-1">
                    <!-- start item carousel -->
                    <div class="carousel-item xl:w-[220px] sm:w-[210px] w-full h-auto  flex flex-col gap-5">
                        <h3 class="text-lg font-light">Tienda</h3>
                        <div class="relative md:h-[230px] sm:h-[130px] h-[230px]  w-full ">
                            <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                        </div>
                        <p>descripción</p>
                        <div class="flex items-center gap-2">
                            <a href="" class="font-bold w-fit leading-5	 border-b border-black ">
                                Visitar tienda
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <!-- end item carousel -->
                </div>
                <!-- end carousel -->
                <!-- start botones Next y Previous -->
                <button data-prev-btn
                    class="absolute hidden top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 border h-6" viewBox="0 0 24 24">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
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

                <div class="md:mb-4 mb-10 md:pl-2 pl-0 flex gap-4 items-center md:w-[80%] w-full mx-auto">
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
                <div class="relative overflow-hidden">
                    <!-- start carousel -->
                    <div class="flex justify-start items-center gap-[35px]" data-carousel-parent data-gap="35"
                        id="seccion-2">
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
                        class="absolute hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 border h-6" viewBox="0 0 24 24">
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
        <section class=" max-w-7xl mx-auto mb-20 ">
            <header>
                <h2 class="md:text-3xl text-2xl ">Los productos más vendidos</h2>
                <span class="md:text-xl text-lg text-gray-700 mt-1 inline-block">Completa tus compras</span>
            </header>

            <div class="relative overflow-hidden mt-16">
                <!-- start carousel -->
                <div class="flex justify-start items-center" data-carousel-parent id="seccion-3" data-gap="0">

                    <!-- start item carousel -->
                    <div class="carousel-item border xl:w-[320px] lg:w-[330px] md:w-[367px]  w-full h-auto  ">
                        <div class="relative h-[340px] w-full grid gap-2 grid-cols-2 grid-rows-2 px-8">
                            <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded"
                                alt="image" />
                            <img src=" https://placehold.co/100x310"
                                class="w-full row-span-2 h-full object-cover rounded" alt="image" />
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
                <div class="flex justify-start items-center gap-[35px]" data-carousel-parent data-gap="35"
                    id="seccion-4">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 border h-6" viewBox="0 0 24 24">
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
                <div class="flex justify-start items-center gap-[35px]" data-carousel-parent data-gap="35"
                    id="seccion-4">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 border h-6" viewBox="0 0 24 24">
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
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">Una
                            comunidad que
                            hace el bien</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet.
                            Ex non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus
                            quos. Culpa
                            voluptas dicta quo aspernatur? Ab dolore nesciunt commodi obcaecati.</p>
                    </div>
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">Apoya a
                            emprendedores</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet.
                            Ex non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus
                            quos. Culpa
                            voluptas dicta quo aspernatur? Ab dolore nesciunt commodi obcaecati.</p>
                    </div>
                    <div class=" text-blue-900">
                        <h6 class="lg:text-3xl block mb-8 md:min-h-[70px] md:text-start text-center text-2xl">
                            Tranquilidad
                            absoluta</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa tempora quod necessitatibus
                            voluptates
                            quo unde. Corporis illo ex ratione perspiciatis nam odio fuga aliquam tempora quae eveniet.
                            Ex non eius
                            architecto possimus cupiditate, voluptates asperiores corporis, explicabo, nesciunt minus
                            quos. Culpa
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
                    <span class="text-sm">Suscríbase a nuestro boletín para recibir ofertas exclusivas, ultimas
                        noticias y
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

        <footer class="bg-blue-950 min-h-[500px] lg:py-20 py-10 px-5  text-white lg:text-sm text-xs">
            <div
                class="max-w-7xl mx-auto flex lg:flex-row flex-col lg:justify-around justify-center lg:items-start items-center lg:gap-5 gap-10">

                <div class="flex flex-col gap-4">
                    <img src="/assets/logo/logo_horizontal_dark.svg" alt=""
                        class="w-[270px] object-cover" />
                    <div class="flex gap-5 lg:flex-row flex-wrap flex-col">
                        <button
                            class="h-full p-3 px-5 text-sm bg-white lg:w-fit w-full text-blue-900 hover:bg-white/90 font-bold">Vende
                            en
                            Buhogt</button>
                        <button
                            class="h-full p-3 px-5 text-sm bg-white lg:w-fit w-full text-blue-900 hover:bg-white/90 font-bold">Contactanos</button>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-10 ">
                    <div class="flex flex-col gap-3">
                        <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Tienda</h6>
                        <span>Únete a buhogt</span>
                        <span>Nuestro blog</span>
                        <span>Optimiza tu tienda</span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Ayuda</h6>
                        <span>Preguntas frecuentes</span>
                        <span>Configuración de cookies</span>
                        <span>Como vender en Buhogt</span>
                        <span>Manual de venta de Buhogt</span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Sobre nosotros</h6>
                        <span>Quienes somos</span>
                        <span>Política de privacidad</span>
                        <span>Política de garantía</span>
                        <span>Empleo</span>
                    </div>
                </div>

                <div class="flex lg:flex-col flex-row gap-3 lg:items-start items-center justify-center">
                    <span class="font-semibold lg:min-h-[30px] min-h-auto">Síguenos</span>

                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                        </svg>
                        <span class="lg:block hidden">Instagram</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"
                                fill="#fff" />
                        </svg>
                        <span class="lg:block hidden">Facebook</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
                        </svg>
                        <span class="lg:block hidden">Twitter</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M9.04 21.54c.96.29 1.93.46 2.96.46a10 10 0 0 0 10-10A10 10 0 0 0 12 2A10 10 0 0 0 2 12c0 4.25 2.67 7.9 6.44 9.34c-.09-.78-.18-2.07 0-2.96l1.15-4.94s-.29-.58-.29-1.5c0-1.38.86-2.41 1.84-2.41c.86 0 1.26.63 1.26 1.44c0 .86-.57 2.09-.86 3.27c-.17.98.52 1.84 1.52 1.84c1.78 0 3.16-1.9 3.16-4.58c0-2.4-1.72-4.04-4.19-4.04c-2.82 0-4.48 2.1-4.48 4.31c0 .86.28 1.73.74 2.3c.09.06.09.14.06.29l-.29 1.09c0 .17-.11.23-.28.11c-1.28-.56-2.02-2.38-2.02-3.85c0-3.16 2.24-6.03 6.56-6.03c3.44 0 6.12 2.47 6.12 5.75c0 3.44-2.13 6.2-5.18 6.2c-.97 0-1.92-.52-2.26-1.13l-.67 2.37c-.23.86-.86 2.01-1.29 2.7z" />
                        </svg>
                        <span class="lg:block hidden">Pinterest</span>
                    </div>
                </div>
            </div>

            <div
                class="text-gray-500 max-w-7xl mx-auto flex justify-center items-center flex-col gap-5 text-sm lg:mt-20 mt-10">
                <div class="flex lg:flex-row flex-col gap-5 justify-center items-center text-center">
                    <a href="">Configuraciones de uso</a>
                    <a href="">Política de privacidad</a>
                    <a href="">Política de cookies</a>
                </div>

                <span class="text-xs">© Buhogt. Todos los derechos reservados</span>
            </div>
        </footer>
    </main>


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

</div>
