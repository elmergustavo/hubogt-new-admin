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


    <a href="{{ route('ecommerce') }}">
        <img src="/assets/logo/logo_horizontal.svg" alt="Logo" class="w-32 object-cover" />
    </a>


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
            <a href="{{ route('profile') }}"
                class="md:flex hidden justify-center items-center gap-[2px] flex-col text-[15px]">
                <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}"
                    class="w-[35px] h-[35px] object-cover rounded-full" alt="image" />
                <span>{{ Auth::user()->name }}</span>
            </a>

            {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" class="flex items-center" @click.prevent="$root.submit();">

                    {{ __('Cerrar Sesión') }}
                </x-dropdown-link>
            </form> --}}

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
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                    </svg>
                </span>
                <span>Registrarse</span>
            </a>
            <a href="" class="flex items-center gap-5 justify-start">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
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
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="moda-mujer" class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="bolsos" class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="joyeria" class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mas" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden p-3" aria-labelledby="accordion-collapse-heading-1">
                <!-- start categorías -->

                <!-- end categorías -->
            </div>
        </div>
        <!-- end dropdown categorías -->
    </div>
</div>
<!-- end categorías -->
