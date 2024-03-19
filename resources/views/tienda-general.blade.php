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
    </style>
    <main class="mt-[5dvh] xl:px-0 ">

        <!-- start sección "Tiendas BUHOGT" -->
        <section class=" md:mb-20 mb-10 mt-[70px]">
            <header class="max-w-7xl mx-auto px-5">
                <h2 class="md:text-4xl text-3xl font-bold">Tiendas <span class="uppercase">Buhogt</span></h2>
                <span class="md:text-xl text-lg text-gray-700 mt-3 inline-block">Encuentra los mejores artículos</span>
            </header>

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-10 px-5 ">

                    <h4 class=" md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-20 px-5 ">

                    <h4 class=" md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-20 px-5 ">

                    <h4 class="underline md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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
                        <span class="lg:text-xl sm:text-lg text-sm mt-5">Explora diferentes estilos de esta temporada</span>
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

        <section class=" md:mb-20 mb-10 mt-[70px]">

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-10 px-5 ">

                    <h4 class=" md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-20 px-5 ">

                    <h4 class=" md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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

            <div class="">
                <div class="max-w-7xl mx-auto relative mt-20 px-5 ">

                    <h4 class="underline md:text-3xl text-2xl font-semibold">Zapatos</h4>

                    <div class=" w-full mt-8">
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

        <!-- start pagination -->
        <div class="my-16 flex flex-col flex-wrap sm:w-fit w-full max-w-7xl mx-auto">
            <span class="md:text-sm text-base text-center md:text-start mb-8 block">Te queda mucho por
                descubrir</span>

            <div class="flex md:justify-between justify-center items-center gap-5">

                <button id="btn-prev-pagination" class="opacity-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- end pagination -->

        <!-- start sección "Nuestros tops tiendas" -->
        <!-- <section class=" max-w-7xl mx-auto md:mb-20 mb-10 md:px-10 px-4 md:w-3/4 w-full">
              <h2 class="md:text-3xl text-xl block mb-8 md:text-start text-center">Nuestros tops tiendas </h2>
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
              <h2 class="md:text-3xl text-xl block mb-8 md:text-start text-center">Nuestros tops productos </h2>
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


        <section
            class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 mb-10 max-w-7xl mx-auto mb-10  pb-0 text-sm">
            <span class="text-blue-950 font-bold">Q - Español</span>
            <span class="text-blue-950 font-bold">Contenido de productos</span>
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
        const generateStars = () => {
            return `<div class="flex items-center ">
 <svg class="w-4 h-4 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
   fill="currentColor" viewBox="0 0 22 20">
   <path
     d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
 </svg>
 <svg class="w-4 h-4 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
   fill="currentColor" viewBox="0 0 22 20">
   <path
     d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
 </svg>
 <svg class="w-4 h-4 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
   fill="currentColor" viewBox="0 0 22 20">
   <path
     d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
 </svg>
 <svg class="w-4 h-4 text-inherit	 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
   fill="currentColor" viewBox="0 0 22 20">
   <path
     d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
 </svg>
 <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
   xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
   <path
     d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
 </svg>
</div>`
        }

        const generateCarousel = () => {
            const total_items = 9;
            document.querySelectorAll('[data-carousel-parent]').forEach((carousel) => {
                let template = '';
                const breakPointsWidth =
                    'max-[320px]:!w-[130px] max-[375px]:!w-[160px] max-[425px]:!w-[185px] max-[768px]:!w-[229px] lg:!w-[220px]'


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
                    // w-[130px] md:!w-[220px]
                    template += `<div class="carousel-item snap-start	">
            <span class="text-lg">Tienda ${store}</span>
            <div class="relative  md:!h-[250px]  h-[180px] ${breakPointsWidth}">
              <img loading="lazy" src="${img}" class="w-full h-full object-cover rounded" alt="image" />
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
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
