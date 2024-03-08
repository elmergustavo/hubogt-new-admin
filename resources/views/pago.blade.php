@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <section class="max-w-7xl mx-auto mt-[10dvh] xl:px-0 px-4">
        <div class="md:grid md:grid-cols-[1fr,350px] flex flex-col-reverse  gap-10">
            <!-- star artículos favoritos -->
            <div class="border border-black rounded md:p-8 p-6 ">

                <div class="flex lg:flex-row flex-col justify-start md:gap-5 gap-2 items-center mb-10">
                    <h5 class="text-3xl text-center">Artículos favoritos</h5>
                    <span class="text-gray-500 font-semibold">1 artículo</span>
                </div>

                <div class="flex gap-8 flex-col">
                    <!-- start card -->
                    <div class="flex gap-5 flex-wrap ">

                        <img src="/images/products/product-1.png" class="w-fit h-[250px] object-cover lg:flex-none flex-1"
                            alt="image" />

                        <div class="flex-1 grid xl:grid-cols-2 lg:grid-cols-1 gap-5 place-items-start min-w-[180px] ">

                            <div>
                                <h3 class="text-lg">Buddha Mandala Hoodie</h3>
                                <p class="text-gray-500 mt-2">by MysticArtByJose</p>
                                <div class="my-7 flex justify-between gap-3 items-center flex-wrap  ">
                                    <button class="hover:underline">Guardar para más tarde</button>
                                    <button class="hover:underline">Eliminar</button>
                                </div>
                                <div class="flex items-center justify-start gap-2">
                                    <span>4.8</span>
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
                            </div>

                            <div class="flex xl:gap-5 md:gap-3 gap-2 items-center flex-wrap">
                                <span class="text-3xl font-bold">Q27.88</span>
                                <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end artículos favoritos -->

            <!-- star forma de pago -->
            <div class="border border-black  flex flex-col gap-3 p-4 rounded lg:sticky lg:top-5 top-auto static h-fit">
                <span class="text-gray-600">Forma de pago</span>
                <div class="w-full flex items-center gap-3 justify-start">
                    <!-- icons formas de pago -->
                    <div>
                        <label
                            class="has-[:checked]:bg-black w-9 h-9 rounded-full border border-black grid place-items-center">
                            <input type="checkbox" class="hidden" />
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </label>
                    </div>

                    <div class="grid grid-cols-4 gap-3 place-items-center">
                        <div class="bg-gray-200 rounded h-9 md:w-14 w-11"></div>
                        <div class="bg-gray-200 rounded h-9 md:w-14 w-11"></div>
                        <div class="bg-gray-200 rounded h-9 md:w-14 w-11"></div>
                        <div class="bg-gray-200 rounded h-9 md:w-14 w-11"></div>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center gap-5">
                        <b>Total de artículos</b>
                        <span>Q55.00</span>
                    </div>
                    <div class="flex justify-between items-center gap-5">
                        <b>Descuento de la tienda</b>
                        <span>Q10.99</span>
                    </div>
                    <hr />
                    <div class="flex justify-between items-center gap-5">
                        <span class="text-gray-600">Subtotal</span>
                        <span>Q65.99</span>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center gap-5">
                        <p class="text-gray-600">Total <span>(1 artículo)</span></p>
                        <span>Q65.99</span>
                    </div>
                </div>
                <button class="p-3 rounded w-full text-white bg-blue-900 hover:bg-blue-950 mt-10">Proceder a Pago </button>
            </div>
            <!-- end forma de pago -->
        </div>
    </section>

    <hr class="my-10">

    <!-- star artículos similares -->
    <section class="max-w-7xl mx-auto mb-10  xl:px-0 px-4">
        <span class="text-3xl mb-10 block sm:text-start text-center">Similar a este producto</span>

        <!-- start productos -->
        <div class="relative">
            <div class="flex md:gap-12 gap-5 overflow-x-scroll snap-mandatory snap-x justify-start" data-carousel-parent>
                <!-- start item -->

                <!-- end item -->
            </div>
            <!-- start botones Next y Previous -->
            <button data-prev-btn
                class="absolute hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>
            <button data-next-btn
                class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </button>
            <!-- end botones Next y Previous -->
        </div>
        <!-- end productos -->

    </section>
    <!-- end artículos similares -->

    <hr class="my-10">

    <section class="flex justify-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  xl:px-0 px-4 text-sm">
        <span class="text-blue-950 font-bold">Q - Español</span>
        <span class="text-blue-950 font-bold">Contenido de productos</span>
    </section>


    <script>
        const carousel = document.querySelector('[data-carousel-parent]')
        const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
        const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

        const carouselInit = () => {
            const breakPointsWidth =
                'max-[320px]:!w-[135px] max-[375px]:!w-[160px] max-[425px]:!w-[185px] max-[768px]:!w-[214px] lg:!w-[284px]'


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


            let template = ''
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
          <h3 class="text-lg  ">${title}</h3>
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
@endsection
