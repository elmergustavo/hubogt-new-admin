@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <!-- star categorías -->
    <div class=" bg-gray-100">
        <div class="max-w-7xl mx-auto p-4 xl:flex hidden justify-between gap-5 items-center flex-wrap">

            {{-- <section class="flex items-center justify-start gap-8 flex-wrap">
                <!-- start dropdown -->
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="moda-mujer"
                        class="text-sm text-center inline-flex items-center " type="button">
                        Moda Mujer
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="moda-mujer" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="moda-hombre" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="hogar-jardin" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="salud-belleza"
                        class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="collecionable-arte"
                        class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                    <div id="bolsos" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                    <div id="joyeria" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
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
                    <button class="text-sm text-center inline-flex items-center " type="button">
                        Cupones
                    </button>
                </div>
                <!-- end dropdown -->
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

            </section> --}}

            <div class="flex justify-end flex-1">
                <button class="flex items-center gap-2 justify-center text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] h-[16px]" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Filtros</span>
                </button>
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

            <!-- star dropdown filtro  -->
            <div id="accordion-filter" data-accordion="collapse" class="w-full">
                <h2 id="accordion-collapse-heading-filter">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 gap-3"
                        data-accordion-target="#accordion-collapse-body-filter" aria-expanded="false"
                        aria-controls="accordion-collapse-body-filter">
                        <span>Filtros</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-filter" class="hidden p-3"
                    aria-labelledby="accordion-collapse-heading-filter">
                    <!-- start categorías -->
                    Content
                    <!-- end categorías -->
                </div>
            </div>
            <!-- end dropdown filtro  -->
        </div>
    </div>
    <!-- end categorías -->

    <main class="xl:px-0 ">

        <!-- start hero -->
        <header class=" 2xl:max-w-7xl lg:max-w-2xl max-w-full mx-auto mb-14 py-16 w-full">
            <div
                class="flex justify-center flex-col items-center md:w-[60%] w-[80%] mx-auto mb-10 gap-4 lg:text-start text-center ">
                <h1 class="text-4xl">Zapatos y Ropa</h1>
                <p class="text-gray-600">Todo lo maravilloso y digno de llevar para hombres, mujeres y niños e incluso
                    bebes
                    pequeños</p>
                <p>
                    <span class="text-gray-600">Todo</span>
                    <span> > Zapatos y ropa (450 resultados)</span>
                </p>
            </div>

            <div class="grid grid-cols-3 sm:gap-10 gap-2 lg:px-0 px-3 place-items-start">
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded" alt="image" />
                    <span class="font-bold">Mujeres</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded" alt="image" />
                    <span class="font-bold">Hombre</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded" alt="image" />
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
            <section class="max-w-7xl mx-auto px-4 grid lg:grid-cols-[200px,1fr] grid-cols-1 gap-16 lg:mt-16 mt-10">
                <aside class="">
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

                    <!-- start móvil aside -->
                    <div id="accordion-collapse-tienda" data-accordion="collapse" class="w-full lg:hidden block">
                        <h2 id="accordion-collapse-heading-tienda">
                            <button type="button"
                                class="flex items-center block border border-black justify-between w-full p-2 font-medium  gap-3 !bg-white"
                                data-accordion-target="#accordion-collapse-body-tienda" aria-expanded="false"
                                aria-controls="accordion-collapse-body-tienda">
                                <h3 class="text-orange-500 font-bold underline text-xl">Categorías</h3>
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
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Maraton</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Corto
                                    plazo</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Camisas
                                    y blusas</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Chaquetas
                                    y
                                    Blazer</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Sudaderas</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Ropa
                                    deportiva</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Abrigos</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Ropa
                                    interior</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Medias</a>
                                <a href=""
                                    class="bg-gray-200 active:border-black font-semibold border border-transparent p-2">Vestidos</a>
                            </div>
                        </div>
                    </div>
                    <!-- end móvil aside -->

                    <div class="flex flex-col gap-10 lg:mt-32 mt-10">
                        <img src=" https://placehold.co/90x410" class="w-full lg:h-[660px] h-[200px] object-cover rounded"
                            alt="image" />
                        <button class="w-full p-3 border border-black text-center hover:bg-gray-200">Comprar ahora</button>
                    </div>
                </aside>

                <div>
                    <!-- start filtros -->
                    <div class="mb-10 flex md:gap-x-10 gap-3 md:gap-y-4 md:flex-wrap flex-nowrap lg:overflow-x-visible overflow-x-scroll md:items-center items-start justify-start"
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

                    <!-- start productos -->
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
                                    <div
                                        class="flex xl:gap-8 md:gap-5 gap-3 md:items-center items-start md:flex-row flex-col">
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
                    <!-- end productos -->

                    <!-- start pagination -->
                    <div class="w-fit mt-16 flex flex-col flex-wrap">
                        <span class="text-sm mb-8 block">Te queda mucho por descubrir</span>

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


    <!-- <script src="../home.js"></script> -->
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
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
