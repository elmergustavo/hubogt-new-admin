@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <main class="xl:px-0 ">

        <!-- start hero -->
        <header class=" 2xl:max-w-7xl lg:max-w-2xl max-w-full mx-auto lg:mb-14 mb-0 pt-16 md:pb-16 pb-8  w-full relative ">
            <button class="absolute top-5 left-5 lg:hidden block">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-7" viewBox="0 0 24 24">
                    <path fill="#000" fill-rule="evenodd"
                        d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div
                class="flex justify-center flex-col items-center md:w-[60%] w-[80%] mx-auto mb-10 gap-4 lg:text-start text-center ">
                <h1 class="lg:text-4xl md:text-3xl text-2xl md:font-semibold font-bold">Zapatos y Ropa</h1>
                <p class="text-gray-600">Todo lo maravilloso y digno de llevar para hombres, mujeres y niños e incluso bebes
                    pequeños</p>
                <p class="lg:block hidden">
                    <span class="text-gray-600">Todo</span>
                    <span> > Zapatos y ropa (450 resultados)</span>
                </p>
            </div>

            <div class="grid grid-cols-3 sm:gap-10 gap-2 lg:px-0 px-3 md:place-items-center place-items-start">
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-1.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold md:text-base text-sm">Mujeres</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-2.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold md:text-base text-sm">Hombre</span>
                </div>
                <div class="flex flex-col justify-center text-center items-center gap-5">
                    <img src="/images/category-product-3.png"
                        class=" md:size-[200px] sm:size-[150px] size-[100px] object-cover rounded" alt="image" />
                    <span class="font-bold md:text-base text-sm">Niños y bebes</span>
                </div>
            </div>
        </header>
        <!-- end hero -->

        <!-- start categorías list mobile  -->
        <section class="block lg:hidden mb-8 px-4 ">
            <span class="underline font-bold text-2xl">Categorías</span>

            <div class="w-full mt-3 flex gap-2 text-sm overflow-x-scroll hidden-scroll">
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Maraton</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Corto
                    plazo</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Camisas y
                    blusas</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Chaquetas y
                    Blazer</a>
                <a href=""
                    class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Sudaderas</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Ropa
                    deportiva</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Abrigos</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Ropa
                    interior</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Medias</a>
                <a href="" class="hover:underline w-fit flex-none bg-gray-200 rounded p-2 font-semibold">Vestidos</a>
            </div>
        </section>
        <!-- end categorías list mobile -->

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
        <section class=" max-w-7xl mx-auto px-4">

            <h3 class="text-4xl font-bold mt-8 md:text-start text-center lg:block hidden">Zapatos para correr</h3>
            <!-- start sección productos -->
            <section class=" max-w-7xl mx-auto grid lg:grid-cols-[200px,1fr] grid-cols-1 md:gap-16 gap-10 lg:mt-16 mt-10">

                <aside class="lg:order-1 order-3 lg:my-0 my-5">
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

                <!-- start products mobile -->
                <div class="lg:hidden grid md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-start gap-5 gap-y-10  justify-start order-2"
                    id="start-products">
                    <!-- start item -->

                    <!-- end item -->
                </div>
                <!-- end products mobile -->

                <div class="lg:order-2 order-1">
                    <!-- start filtros -->
                    <div class="md:mb-10 mb-0 flex lg:gap-x-10 gap-3 md:gap-y-4 flex-wrap  items-center justify-start"
                        id="filter-container">
                        <div class="lg:min-w-auto min-w-[170px] ">
                            <button id="dropdown-filter" data-dropdown-toggle="dropdown-toggle-filter"
                                class="border border-black rounded p-3 flex lg:text-base text-sm items-center gap-2 font-bold"
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
                    <div class="relative lg:block hidden">
                        <div class="grid md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-start gap-5 gap-y-10  justify-start"
                            data-carousel-parent>
                            <!-- start item -->

                            <!-- end item -->
                        </div>
                    </div>
                    <!-- end productos -->

                </div>

                <!-- start products mobile -->
                <div class="lg:hidden grid md:grid-cols-[repeat(auto-fit,minmax(220px,1fr))] grid-cols-2 place-items-start gap-5 gap-y-10  justify-start  order-4"
                    id="end-products">
                    <!-- start item -->

                    <!-- end item -->
                </div>
                <!-- end products mobile -->

            </section>
            <!-- end sección sección productos -->

            <section
                class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 max-w-7xl mx-auto md:mt-0 mt-5 md:mb-10 mb-0  pb-0 text-sm">
                <span class="text-blue-950 font-bold">Q - Español</span>
                <span class="text-blue-950 font-bold">Contenido de productos</span>
            </section>

        </section>
    </main>

    <script>
        const generateFilters = () => {
            const filters = ['Ordenado Por', 'Tamaño', 'Tamaños especiales', 'Marca', 'Largo', 'Precio', 'Color',
                'Sostenibilidad', 'Patrones', 'Nuevo Productos',
            ]

            const $filter_container = document.querySelector('#filter-container')
            let template = ''

            filters.forEach((filter, index) => {
                template += `
            <div class="">
              <button id="dropdown-filter-${index}" data-dropdown-toggle="dropdown-filter-toggle-${index}"
                class="border border-black rounded p-3 flex !flex-nowrap w-full items-center lg:justify-start justify-between lg:text-base text-sm" type="button"><span class="block flex-1 w-full min-w-fit">${filter}</span> <svg
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

        const generateStars = () => {
            return `
           <div class="flex  items-center justify-start gap-2">
                <span class="md:text-sm text-xs">4.8</span>
                <div class="flex items-center">
                  <svg class="md:size-4 size-3 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="md:size-4 size-3 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="md:size-4 size-3 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="md:size-4 size-3 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="md:size-4 size-3 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                </div>
              </div>
           `
        }

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
                    title: 'Anillos veranos',
                    img: 'product-1.png',
                    price: '34.17',
                    discount: '5.17'
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
                    title: 'New balance age',
                    img: 'product-1.png',
                    price: '17.17',
                    discount: '15.17'
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

            data.slice(0, 6).forEach(({
                discount,
                img,
                price,
                title
            }, i) => {
                template += `<div class="carousel-item 	h-full flex flex-col">
            <div class="relative  md:!h-[250px] h-[180px] ${breakPointsWidth}">
              <img src="/images/products/${img}" class="w-full h-full object-cover rounded" alt="${title}" />
              <button
              data-btn-like
                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                </svg></button>
            </div>
            <div class="flex gap-4 flex-col pt-3 flex-1 ">
              <h3 class="text-lg flex-1  md:min-h-fit">${title}</h3>
              ${generateStars()}
              <div class="flex md:flex-row flex-col xl:gap-8 md:gap-5 gap-3 md:items-center items-start">
                <b class="text-base">Q${price}</b>
                <span class="text-green-600 text-xs">Q${discount} (25% descuento)</span>
              </div>
              <span class="text-sm">by MysticArtByJose</span>

            </div>
            </div>`
            })

            document.querySelector('#start-products').innerHTML = template

            template = ''

            data.slice(6, 14).forEach(({
                discount,
                img,
                price,
                title
            }, i) => {
                template += `<div class="carousel-item 	h-full flex flex-col">
            <div class="relative  md:!h-[250px] h-[180px] ${breakPointsWidth}">
              <img src="/images/products/${img}" class="w-full h-full object-cover rounded" alt="${title}" />
              <button
              data-btn-like
                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                </svg></button>
            </div>
            <div class="flex gap-4 flex-col pt-3 flex-1 ">
              <h3 class="text-lg flex-1  md:min-h-fit">${title}</h3>
              ${generateStars()}
              <div class="flex md:flex-row flex-col xl:gap-8 md:gap-5 gap-3 md:items-center items-start">
                <b class="text-base">Q${price}</b>
                <span class="text-green-600 text-xs">Q${discount} (25% descuento)</span>
              </div>
              <span class="text-sm">by MysticArtByJose</span>

            </div>
            </div>`
            })

            document.querySelector('#end-products').innerHTML = template

            template = ''

            data.forEach(({
                discount,
                img,
                price,
                title
            }, i) => {
                template += `<div class="carousel-item 	h-full flex flex-col">
            <div class="relative  md:!h-[250px] h-[180px] ${breakPointsWidth}">
              <img src="/images/products/${img}" class="w-full h-full object-cover rounded" alt="${title}" />
              <button
              data-btn-like
                class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                </svg></button>
            </div>
            <div class="flex gap-4 flex-col pt-3 flex-1 ">
              <h3 class="text-lg flex-1  md:min-h-fit">${title}</h3>
              ${generateStars()}
              <div class="flex md:flex-row flex-col xl:gap-8 md:gap-5 gap-3 md:items-center items-start">
                <b class="text-base">Q${price}</b>
                <span class="text-green-600 text-xs">Q${discount} (25% descuento)</span>
              </div>
              <span class="text-sm">by MysticArtByJose</span>

            </div>
            </div>`
            })

            document.querySelector('[data-carousel-parent]').innerHTML = template
        }
        carouselInit()
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
