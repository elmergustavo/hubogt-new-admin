@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <main class="xl:px-0 ">

        <!-- start hero -->
        <header class=" 2xl:max-w-7xl lg:max-w-2xl max-w-full mx-auto mb-14 py-16 w-full">
            <div
                class="flex justify-center flex-col items-center md:w-[60%] w-[80%] mx-auto mb-10 gap-4 lg:text-start text-center ">
                <h1 class="text-4xl">Zapatos y Ropa</h1>
                <p class="text-gray-600">Todo lo maravilloso y digno de llevar para hombres, mujeres y niños e incluso bebes
                    pequeños</p>
                <p>
                    <span class="text-gray-600">Todo</span>
                    <span> > Zapatos y ropa (450 resultados)</span>
                </p>
            </div>

            <div class="grid grid-cols-3 sm:gap-10 gap-2 lg:px-0 px-3 md:place-items-center place-items-start">
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-1.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold">Mujeres</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-2.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold">Hombre</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-3.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold">Niños y bebes</span>
                </div>
            </div>
        </header>
        <!-- end hero -->

        <nav class="max-w-7xl mx-auto px-4 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center font-medium ">
                        Calzado
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 font-medium">Tenis</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- start sección sobre información de la tienda -->
        <section class=" max-w-7xl mx-auto px-4 ">

            <h3 class="text-4xl font-bold mt-8 md:text-start text-center">Zapatos para correr</h3>
            <!-- start sección productos -->
            <section class="max-w-7xl mx-auto grid lg:grid-cols-[200px,1fr] grid-cols-1 gap-16 lg:mt-16 mt-10">
                <aside class="">
                    <!-- start categories -->
                    <div class="lg:block hidden  left-0">
                        <span class="text-orange-500 underline font-semibold block mb-3">Categorías</span>
                        <div class="flex flex-col gap-2">
                            <a href="" class="hover:underline font-semibold">Maraton</a>
                            <a href="" class="hover:underline font-semibold">Corto plazo</a>
                            <a href="" class="hover:underline font-semibold">Camisas y blusas</a>
                            <a href="" class="hover:underline font-semibold">Chaquetas y Blazer</a>
                            <a href="" class="hover:underline font-semibold">Sudaderas</a>
                            <a href="" class="hover:underline font-semibold">Ropa deportiva</a>
                            <a href="" class="hover:underline font-semibold">Abrigos</a>
                            <a href="" class="hover:underline font-semibold">Ropa interior</a>
                            <a href="" class="hover:underline font-semibold">Medias</a>
                            <a href="" class="hover:underline font-semibold">Vestidos</a>
                        </div>
                    </div>
                    <!-- end categories -->

                    <!-- start categories mobile -->
                    <div class="lg:hidden block ">
                        <button id="btn-drawer-categories-mobile"
                            class="border border-black p-3 w-full mb-10 flex justify-center gap-2 items-center active:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                                <path fill="#000"
                                    d="M3.5 2A1.5 1.5 0 0 0 2 3.5v2A1.5 1.5 0 0 0 3.5 7h2A1.5 1.5 0 0 0 7 5.5v-2A1.5 1.5 0 0 0 5.5 2zm0 7A1.5 1.5 0 0 0 2 10.5v2A1.5 1.5 0 0 0 3.5 14h2A1.5 1.5 0 0 0 7 12.5v-2A1.5 1.5 0 0 0 5.5 9zM9 3.5A1.5 1.5 0 0 1 10.5 2h2A1.5 1.5 0 0 1 14 3.5v2A1.5 1.5 0 0 1 12.5 7h-2A1.5 1.5 0 0 1 9 5.5zM10.5 9A1.5 1.5 0 0 0 9 10.5v2a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 12.5 9z" />
                            </svg>
                            Categorías
                        </button>

                        <div id="drawer-categories-mobile"
                            class="sm:!w-[50%] !w-screen transition-all translate-y-full h-[100dvh] fixed top-0 left-0 bg-white z-20 overflow-x-scroll shadow-xl shadow-black/50">
                            <header
                                class="min-h-[70px] border-b border-gray-400 flex justify-between items-center px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10">
                                <span class="font-semibold text-lg">Categorías</span>
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
                                <a href=""
                                    class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Maraton</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Corto
                                    plazo</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Camisas y
                                    blusas</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Chaquetas
                                    y Blazer</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href=""
                                    class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Sudaderas</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Ropa
                                    deportiva</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href=""
                                    class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Abrigos</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href="" class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Ropa
                                    interior</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href=""
                                    class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Medias</a>
                                <hr class="border border-gray-300 my-1" />
                                <a href=""
                                    class="active:bg-gray-200 bg-gray-100 p-2 rounded font-semibold">Vestidos</a>
                            </div>
                        </div>
                    </div>
                    <!-- end categories mobile -->

                    <div class="flex flex-col gap-10 lg:mt-32 mt-0 ">
                        <div class="relative">
                            <div class="bg-black/50 w-full h-full absolute top-0 left-0"></div>
                            <div
                                class="absolute text-white z-10 w-[80%] text-pretty left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 font-bold">
                                50% de
                                Descuento
                                en
                                tu compra</div>
                            <img src="https://s3-alpha-sig.figma.com/img/ec28/6c72/4f9eb52f0d89f062a872a3625c3a52b8?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ekMIolNt95qN~jAUHrR3GyNberMNw3VDXN4hbiiSbZTdImUQU2bHSAr6l0jcjqeLRtJrdcbSCR9ayv2Y2RaNy8I2RI3IptaZsigPe21~OwNKFqyXr20ok58SfV6--0jQ5hhK4gqJvVSlRRLJBFwCbV-69cUO6LzaUV~eyoy2F724zeRG51kXNuuPLSOSuhf21BloCoMjUGEHeE3zt3o2JO83J5Fem2WnKfWD~S0uxEy3UHe-sC8vQ5orjmUqHfxjIxP89WJR1WnrRZXl43yF80RK7ykn~TE7lERZUyKdz3ifMWfI1rNruigEw9BQS96DLYVXzSSHRayZwU09SK4t4Q__"
                                class="w-full lg:h-[660px] h-[200px] object-cover rounded" alt="image" />
                        </div>
                        <button class="w-full p-3 border border-black text-center hover:bg-gray-200">Comprar ahora</button>
                    </div>
                </aside>

                <div>
                    <!-- start filtros -->
                    <div class="mb-10 lg:flex hidden md:gap-x-10 gap-3 md:gap-y-4 md:flex-wrap flex-nowrap lg:overflow-x-visible overflow-x-scroll md:items-center items-start justify-start"
                        id="filter-container">
                        <div class="lg:min-w-auto min-w-[170px] ">
                            <button id="dropdown-filter" data-dropdown-toggle="dropdown-toggle-filter"
                                class="border border-black p-3 flex lg:text-base text-sm items-center gap-2 font-bold"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                    <g fill="none" stroke="#000" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 8h9m4 0h3m-9 8h9M4 16h3" />
                                        <circle cx="9" cy="16" r="2" />
                                        <circle cx="15" cy="8" r="2" />
                                    </g>
                                </svg>
                                Más filtros
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown-toggle-filter"
                                class="z-20 hidden !text-base !text-black bg-gray-200 text-start w-44 p-2 border border-black">
                                Más filtros...
                            </div>
                        </div>
                    </div>
                    <!-- end filtros -->

                    <!-- start filtros mobile -->
                    <div class="lg:hidden block">
                        <!-- filter button -->
                        <div class="flex justify-end">
                            <button id="btn-drawer-filter-mobile"
                                class="w-fit flex justify-center gap-2 items-center border border-black p-2 mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " viewBox="0 0 24 24">
                                    <path fill="#000"
                                        d="M11 20q-.425 0-.712-.288T10 19v-6L4.2 5.6q-.375-.5-.112-1.05T5 4h14q.65 0 .913.55T19.8 5.6L14 13v6q0 .425-.288.713T13 20z" />
                                </svg>
                                Filtros
                            </button>
                        </div>

                        <!-- filter drawer -->
                        <div id="drawer-filter-mobile"
                            class="sm:!w-[50%] !w-screen transition-all translate-y-full h-[100dvh] fixed top-0 left-0 bg-white z-20 overflow-x-scroll shadow-xl shadow-black/50">
                            <header
                                class="min-h-[70px] border-b border-gray-400 flex justify-between items-center px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10">
                                <span class="font-semibold text-lg">Filtros</span>
                                <button id="close-drawer-filter-mobile" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 active:text-red-500 text-black"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                                    </svg>
                                </button>
                            </header>

                            <section class="text-lg flex flex-col items-start justify-start" id="container-drawer-mobile">
                                <button id="order-by"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Ordenado por
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="size"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Tamaño
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="brand"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Marca
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="large"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Largo
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="patterns"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Patrones
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="special-sizes"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Tamaños especiales
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="price"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Precio
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="color"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Color
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="sustainability"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Sostenibilidad
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button id="new-products"
                                    class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">
                                    Nuevos productos
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#000" fill-rule="evenodd"
                                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </section>

                        </div>
                        <!-- filter selected drawer  -->
                        <div id="drawer-filter-selected-mobile"
                            class="sm:!w-[50%] !w-screen fixed top-0 left-0 z-40 h-screen overflow-y-auto transition-transform md:w-80 w-screen transition-all translate-y-full bg-white shadow-xl shadow-black/50">
                            <header
                                class="min-h-[70px] border-b border-gray-400 flex justify-between px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10 items-center">
                                <span id="title-drawer-filter-selected" class="text-lg font-semibold"></span>
                                <button id="close-drawer-filter-selected">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                    </svg>
                                </button>
                            </header>
                            <section class="text-lg">
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-order-by">
                                    <span>Ordenado por</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-size">
                                    <span>Tamaños</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-brand">
                                    <span>Marcas</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-large">
                                    <span>Largos</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-patterns">
                                    <span>Patrones</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-special-sizes">
                                    <span>Tamaños especiales</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-price">
                                    <span>Precios</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-color">
                                    <span>Colores</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-sustainability">
                                    <span>Sostenibilidad</span>
                                </div>
                                <div class="filter-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                                    id="section-new-products">
                                    <span>Productos nuevos</span>
                                </div>
                            </section>
                        </div>

                    </div>
                    <!-- end filtros mobile -->

                    <!-- start productos -->
                    <div class="relative">
                        <div class="lg:grid flex md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-center gap-5 gap-y-10  md:overflow-x-auto overflow-x-scroll snap-mandatory snap-x justify-start hidden-scroll"
                            data-carousel-parent>
                            <!-- start item -->

                            <!-- end item -->
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
                            class="md:hidden block absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <!-- end botones Next y Previous -->
                    </div>
                    <!-- end productos -->

                    <!-- start pagination -->
                    <div class="w-fit mt-16 flex flex-col flex-wrap sm:w-fit w-full">
                        <span class="md:text-sm text-base text-center md:text-start mb-8 block">Te queda mucho por
                            descubrir</span>

                        <div class="flex md:justify-between justify-center items-center gap-5">

                            <button id="btn-prev-pagination" class="opacity-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>
                            </button>

                            <div id="pagination"
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

                            <button id="btn-next-pagination">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- end pagination -->
                </div>
            </section>
            <!-- end sección sección productos -->

            <section
                class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
                <span class="text-blue-950 font-bold">Q - Español</span>
                <span class="text-blue-950 font-bold">Contenido de productos</span>
            </section>

        </section>
    </main>

    <script>
        const paginationInit = () => {
            let page = 1
            const btnPrev = document.querySelector('#btn-prev-pagination')
            const btnNext = document.querySelector('#btn-next-pagination')
            const $paginationContainer = document.querySelector('#pagination')

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
                    left: $paginationContainer.scrollLeft + $paginationContainer.children[0].clientWidth
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
                    left: $paginationContainer.scrollLeft - $paginationContainer.children[0].clientWidth
                })
            })

            $paginationContainer.querySelectorAll('[data-page]').forEach(e => {
                e.addEventListener('click', () => {
                    page = +e.dataset.page

                    $paginationContainer.querySelector(`[data-page="${+e.dataset.page - 1}"]`) ===
                        null ?
                        btnPrev.classList.add('opacity-0') :
                        btnPrev.classList.remove('opacity-0')

                    $paginationContainer.querySelector(`[data-page="${+e.dataset.page + 1}"]`) ===
                        null ?
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

        }
        paginationInit()

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

        const generateFilters = () => {
            const filters = ['Ordenado Por', 'Tamaño', 'Marca', 'Largo', 'Patrones', 'Tamaños especiales', 'Precio',
                'Color', 'Sostenibilidad', 'Nuevo Productos'
            ]

            const $filter_container = document.querySelector('#filter-container')
            let template = ''

            filters.forEach((filter, index) => {
                template += `
            <div class="">
              <button id="dropdown-filter-${index}" data-dropdown-toggle="dropdown-filter-toggle-${index}"
                class="border border-black p-3 flex !flex-nowrap w-full items-center lg:justify-start justify-between lg:text-base text-sm" type="button"><span class="block flex-1 w-full lg:min-w-fit min-w-[150px]">${filter}</span> <svg
                  class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
                </svg>
              </button>

              <!-- Dropdown menu -->
              <div id="dropdown-filter-toggle-${index}"
                class="z-20 hidden !text-base !text-black bg-gray-200 text-start w-44 p-2 border border-black">
                ${filter} content...
              </div>
            </div>
            `
            })

            $filter_container.innerHTML = template + $filter_container.innerHTML
        }
        generateFilters()

        const generateFiltersMobile = () => {
            const $btnDrawer = document.querySelector('#btn-drawer-filter-mobile')
            const $filterDrawer = document.querySelector('#drawer-filter-mobile')
            const $filterDrawerSelected = document.querySelector('#drawer-filter-selected-mobile')

            $btnDrawer.addEventListener('click', () => {
                $filterDrawer.classList.remove('translate-y-full')
                $filterDrawer.classList.add('translate-y-0')
            })

            $filterDrawer.querySelectorAll('#container-drawer-mobile button').forEach($button => {
                $button.addEventListener('click', () => {

                    const id = `#section-${$button.id}`

                    $filterDrawerSelected.classList.add('translate-y-0')
                    $filterDrawerSelected.classList.remove('translate-y-full')

                    $filterDrawerSelected.querySelectorAll('.filter-selected').forEach(section => {
                        section.classList.add('hidden')
                    })

                    $filterDrawerSelected.querySelector('#title-drawer-filter-selected').textContent =
                        $button.textContent

                    const sectionFilterSelected = $filterDrawerSelected.querySelector(id)
                    sectionFilterSelected.classList.remove('hidden')
                })
            })


            $filterDrawer.querySelector('#close-drawer-filter-mobile').addEventListener('click', () => {
                $filterDrawer.classList.add('translate-y-full')
                $filterDrawer.classList.remove('translate-y-0')
            })

            $filterDrawerSelected.querySelector('#close-drawer-filter-selected').addEventListener('click', () => {
                $filterDrawerSelected.classList.add('translate-y-full')
                $filterDrawerSelected.classList.remove('translate-y-0')
                $filterDrawerSelected.querySelectorAll('.filter-selected').forEach(section => {
                    section.classList.add('hidden')
                })
            })
        }
        generateFiltersMobile()

        const carousel = document.querySelector('[data-carousel-parent]')
        const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
        const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

        const carouselInit = () => {

            let template = ''
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

            data.forEach(({
                discount,
                img,
                price,
                title
            }, i) => {
                template += `<div class="carousel-item snap-start	">
            <div class="relative  md:!h-[250px] h-[180px] ${breakPointsWidth}">
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
              <h3 class="text-lg   md:min-h-fit min-h-[60px]">${title}</h3>
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
                <b class="text-base">Q${price}</b>
                <span class="text-green-600 text-xs">Q${discount} (25% descuento)</span>
              </div>
              <span class="text-sm">by MysticArtByJose</span>

            </div>
            </div>`
            })
            carousel.innerHTML = template

            carousel.addEventListener('scrollend', e => {

                prevBtn.classList[
                    e.target.scrollLeft > 0 ? 'remove' : 'add'
                ]('hidden')

                nextBtn.classList[
                    (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ? 'add' : 'remove'
                ]('hidden')

            })
        }
        carouselInit()

        const carouselAction = () => {

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

        }
        carouselAction()
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
