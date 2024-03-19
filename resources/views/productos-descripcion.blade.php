@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <style>
        .hidden-scroll {
            scrollbar-width: none;
        }

        .hidden-scroll::-webkit-scrollbar {
            display: none;
        }

        .animation-added-to-cart-in {
            animation: added-cart-in .5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .animation-added-to-cart-out {
            animation: added-cart-out .5s ease-out;
        }

        @keyframes added-cart-out {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(10px);
            }
        }

        @keyframes added-cart-in {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            75% {
                opacity: 0.8;
                transform: translateY(-5px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>


    <main class="xl:px-0 mt-16">

        <section class=" grid lg:grid-cols-[1fr,400px] grid-cols-1 gap-20 max-w-7xl mx-auto lg:px-0 px-4">

            <!-- start galería de imágenes del producto -->
            <div class="h-full">
                <div class="sticky h-fit top-5 grid lg:grid-cols-[auto,1fr] grid-cols-1 gap-5">

                    <!-- start lista lateral de imágenes -->
                    <div class="h-full">
                        <div id="sidebar-preview-images" class="h-fit lg:flex hidden flex-col gap-1">

                            <div id="preview-1"
                                class="border pointer-events-none border-black rounded-md overflow-hidden relative">
                                <img src="https://s3-alpha-sig.figma.com/img/d3f9/6fe0/88dd8d43351e3e973bf7c839d9f0af28?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MDswHeopqn-jmwVLo-n1SBpm~XqhYBdAXpBEor6TCaCQKaN3RMQlZlK0cfj7mp43SL1NVfWP~2lwXcr8St55hL9HhSTG9MxxMvxdSqt7JysaeknYmsLd~fMFm4rlMvFBw9idiLhKBAf3YvQCqABXsbVh~WZfyu3Q0yt6x3VeBfs7JwBR2QB~ZY-ZGvCj0cKjnesRdAtN7D-C6PPDLaqG7RdTT7FX0BI1hWDS1heUSpINQITQkuJR2~2xPtjoC7gH-A4kQiyl-a3~jv3eCpIXhC7jfBYQtPzFOHHzkGQ0UHVNgNd77nSCDj5rL7LbcWUyg6kA458mbjsedy6q9aKgBQ__"
                                    class="rounded-md  w-[60px] h-[60px] object-cover " alt="image" />

                                <div class="absolute top-0 left-0 bg-white/0 w-full h-full   "></div>
                            </div>
                            <div id="preview-2"
                                class="border cursor-pointer border-transparent hover:border-black rounded-md overflow-hidden relative">
                                <img src="https://s3-alpha-sig.figma.com/img/d3f9/6fe0/88dd8d43351e3e973bf7c839d9f0af28?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MDswHeopqn-jmwVLo-n1SBpm~XqhYBdAXpBEor6TCaCQKaN3RMQlZlK0cfj7mp43SL1NVfWP~2lwXcr8St55hL9HhSTG9MxxMvxdSqt7JysaeknYmsLd~fMFm4rlMvFBw9idiLhKBAf3YvQCqABXsbVh~WZfyu3Q0yt6x3VeBfs7JwBR2QB~ZY-ZGvCj0cKjnesRdAtN7D-C6PPDLaqG7RdTT7FX0BI1hWDS1heUSpINQITQkuJR2~2xPtjoC7gH-A4kQiyl-a3~jv3eCpIXhC7jfBYQtPzFOHHzkGQ0UHVNgNd77nSCDj5rL7LbcWUyg6kA458mbjsedy6q9aKgBQ__"
                                    class="rounded-md  w-[60px] h-[60px] object-cover " alt="image" />

                                <div class="absolute top-0 left-0 bg-white/50 w-full h-full   "></div>
                            </div>
                            <div id="preview-3"
                                class="border cursor-pointer border-transparent hover:border-black rounded-md overflow-hidden relative">
                                <img src="https://s3-alpha-sig.figma.com/img/d3f9/6fe0/88dd8d43351e3e973bf7c839d9f0af28?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MDswHeopqn-jmwVLo-n1SBpm~XqhYBdAXpBEor6TCaCQKaN3RMQlZlK0cfj7mp43SL1NVfWP~2lwXcr8St55hL9HhSTG9MxxMvxdSqt7JysaeknYmsLd~fMFm4rlMvFBw9idiLhKBAf3YvQCqABXsbVh~WZfyu3Q0yt6x3VeBfs7JwBR2QB~ZY-ZGvCj0cKjnesRdAtN7D-C6PPDLaqG7RdTT7FX0BI1hWDS1heUSpINQITQkuJR2~2xPtjoC7gH-A4kQiyl-a3~jv3eCpIXhC7jfBYQtPzFOHHzkGQ0UHVNgNd77nSCDj5rL7LbcWUyg6kA458mbjsedy6q9aKgBQ__"
                                    class="rounded-md  w-[60px] h-[60px] object-cover " alt="image" />

                                <div class="absolute top-0 left-0 bg-white/50 w-full h-full   "></div>
                            </div>

                        </div>
                    </div>
                    <!-- end lista lateral de imágenes -->

                    <!-- start imagen principal -->
                    <div class="relative md:h-[550px] h-[400px]">
                        <div id="carousel"
                            class="flex snap-x snap-mandatory overflow-x-scroll md:h-[550px] h-[400px] hidden-scroll">
                            <img src="https://s3-alpha-sig.figma.com/img/03cc/2490/dbba3f506666555152f4bfb08222b612?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eFJusLok9A8pJIJwbZo3VjBVw3Gdxmo41H7bhnm6W7zADZbNlvawpQJD~oqXnT7h-~OPQJB4fzApCGOd-02KxQ0cbg3Cwvtz3aMvzcfp-6G7nkBN5CTElrtQpuGKge7cgMmFKwM1cLyHTk~F51r4y~r~jgprFOTTIXpNbWGx-KeKfwVlvdJnYzCP4LW0pgged-VnGHzLq~dOcE4qwGCUVSd6Gmy4~jNd1Qepf61lMIulicH2ECEgaElsR6dvjuBfMfWTXbA5XH0AHttD4Er2msA-hjkiK0HuDrgpn87lJXoDXZl4aNm7kAHwP74tlkzZXeTqtYnAMWmhhKRNiRkczQ__"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                            <img src="https://s3-alpha-sig.figma.com/img/03cc/2490/dbba3f506666555152f4bfb08222b612?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eFJusLok9A8pJIJwbZo3VjBVw3Gdxmo41H7bhnm6W7zADZbNlvawpQJD~oqXnT7h-~OPQJB4fzApCGOd-02KxQ0cbg3Cwvtz3aMvzcfp-6G7nkBN5CTElrtQpuGKge7cgMmFKwM1cLyHTk~F51r4y~r~jgprFOTTIXpNbWGx-KeKfwVlvdJnYzCP4LW0pgged-VnGHzLq~dOcE4qwGCUVSd6Gmy4~jNd1Qepf61lMIulicH2ECEgaElsR6dvjuBfMfWTXbA5XH0AHttD4Er2msA-hjkiK0HuDrgpn87lJXoDXZl4aNm7kAHwP74tlkzZXeTqtYnAMWmhhKRNiRkczQ__"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                            <img src="https://s3-alpha-sig.figma.com/img/03cc/2490/dbba3f506666555152f4bfb08222b612?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eFJusLok9A8pJIJwbZo3VjBVw3Gdxmo41H7bhnm6W7zADZbNlvawpQJD~oqXnT7h-~OPQJB4fzApCGOd-02KxQ0cbg3Cwvtz3aMvzcfp-6G7nkBN5CTElrtQpuGKge7cgMmFKwM1cLyHTk~F51r4y~r~jgprFOTTIXpNbWGx-KeKfwVlvdJnYzCP4LW0pgged-VnGHzLq~dOcE4qwGCUVSd6Gmy4~jNd1Qepf61lMIulicH2ECEgaElsR6dvjuBfMfWTXbA5XH0AHttD4Er2msA-hjkiK0HuDrgpn87lJXoDXZl4aNm7kAHwP74tlkzZXeTqtYnAMWmhhKRNiRkczQ__"
                                class="flex-none snap-start w-full h-full object-cover" alt="image" />
                        </div>
                        <!-- start botones Next y Previous -->
                        <button data-prev-btn
                            class="absolute -left-0 hidden top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                        </button>
                        <button data-next-btn
                            class="absolute -right-0 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <!-- end botones Next y Previous -->
                    </div>
                    <!-- end imagen principal -->

                </div>
            </div>
            <!-- end galería de imágenes del producto -->

            <!-- start información del producto y compra -->
            <div class="">
                <header>
                    <div class="flex justify-between items-center gap-2">
                        <span class="underline text-lg">Tienda Primary shoes</span>
                        <div class="flex gap-5 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="block my-3 text-3xl" id="title-product">New Balance 598X</h1>
                    <div class=" flex items-center gap-2 " data-stars>
                        <span class="text-sm">4.6</span>
                    </div>
                    <div class="flex gap-5 items-center mt-5">
                        <span class="text-2xl text-green-500 font-bold" id="price-product">Q 35.38</span>
                        <span class="line-through text-sm	text-gray-500">Q 65.73</span>
                    </div>
                    <span class="text-green-500 font-semibold">Oferta del 20%</span>
                    <p>Zapato Comodo para correr largas distancias</p>
                </header>

                <section class="mt-8 flex flex-col gap-3">
                    <span>
                        Descubre todos los estilos
                    </span>

                    <div class="flex overflow-x-scroll hidden-scroll gap-5">
                        <img src="https://s3-alpha-sig.figma.com/img/704f/b45e/6269e7880f297206adf3fd436f27a57f?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Nns7RXecStbpDHvp0YJ-gq7w4DoO7O-xvH-s0ZAvcOBU2NVuRJTFQhRifJVE-UKoST9JFMYeavrONOT6HqPdro3VogSaxIIok8~IKFjoZSZ7v3IvHZAIC3dPjhuTO7Af~bjVbYNUp~GdELbytIp6IKLhyAQF~Igc~0SeEIrBBRCWdmyGw2RO4A6kedOef2IrjhfyqyurhwDQ19Qjv~deOealK78TKgaGZ59fpqv1VolGaqGk-JIiyz~iPJxsvLAR29xFJ-SK8NjvZUy-beRbHLzZcebImDr03hsm0ZF6wT9hHQ3w5cG7tnO8Zhir9mG3-X8fGpId1VxP0SRc7qXxGQ__"
                            class="flex-none rounded-md size-[55px] object-cover" alt="image" />
                        <img src="https://s3-alpha-sig.figma.com/img/0ca0/36f4/612664b4f1e334bbbb14cd923a315ed7?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=JEvmfC73hmqkJIre6r1zh2wEeWWiGOv52Ax4HVEUALJbAp9k4NJXrukzfeWE3T44OsIg0kOa1s14yMz5AQ7tBwZC9xrirnbiI7abbMtKCL1qAwybqTNw76wv974x34M629xU9S8OOs24zK59jDP8HYT2D0IKgz8sHpD7mu~b0Vw-Jy56gRsRLfnI-U93d1HqiQ4LDdvlqkhiLGdcVA3RXYz6YH5cdgUMnkV26mwcasIKymRcF3cTHAJlodaBEoaN8MOJqpxBHR~gnd7EADa1RJd4HCBHRX8vIrvWgoEtuF46HBazKt3UmQaKtiz7er2617ntro4x1YoXR1CaURtJKw__"
                            class="flex-none rounded-md size-[55px] object-cover" alt="image" />
                        <img src="https://s3-alpha-sig.figma.com/img/1ada/0f49/1e1e21b3673a4fff8d43420e703831c3?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=RVRRUGZBHNM4xczSy7fOey9Ce1cWbDt4DsPHcBE0YsQL6~mGCT1FKTl0F7cDQn7JsMrKyXXokK49ArAZNAMKxRN9Vmrhn~i10Cl3WEWwSPs-80eirRUHxV6vJ0LqUtYJFYIVXyPHCwU7orQGFxBMZFMVY0woHjYS6SMHhZyp4YkIO4xR42WkN~Ufgsadck5JmUWfXWtW6WFuzMCnMuWltiI8B7ydaD32Jdatk9K3M0zetGKQRFP2lsGDBrxx2vKRYBeEGPwcJQNcBet3amoOkyO03SpIZcs2coUrDku-CylkslAGaRvW~lkKtAB05GRGKUP3NDeKvfH1lBRFJTZa8A__"
                            class="flex-none rounded-md size-[55px] object-cover" alt="image" />
                        <img src="https://s3-alpha-sig.figma.com/img/4a2e/275a/8af019f61f7f0b2e38f8ec9d7ec72867?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=UNkrFseBzqeTYQdFS2sbYs-P4V7cGeetZcD5HHPVLb1t8tGasIOG0xgKyUymEShE~OErzsxu47Ic7VAClgEm5m-dbGjzmG5Gh690RvfkudHSLwOjrP8Vr2g~To6cWMxoxg37hJidOJ-v7rWcFzKwS-TAGGr~z9Cyg2FlCeunpanG8Tj2eomJIai0uTUlj0lPB9~0hoOVgGo~6oKLizMgo6hu0ZSYG9dnHcyJskDzjJWd6YqDQu0NGfaMkHvKGamuo-SlMcxgadLZIw-QTp0yJWBloDcSBrUQ-Zu~ye-VaoiCthlibV691piLU9pXHGzsRO2reJzunUMOZs1z~h7Xbw__"
                            class="flex-none rounded-md size-[55px] object-cover" alt="image" />
                    </div>
                </section>

                <section class="space-y-3 mt-8">
                    <div class="w-full relative">
                        <button id="dropdown-sizes" data-dropdown-toggle="dropdown-size-toggle"
                            class="w-full p-3 px-4  !m-0 border border-black flex items-center justify-between rounded-lg"
                            type="button">
                            Seleccione el tamaño
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-size-toggle"
                            class="bg-white z-10 hidden shadow w-full border border-gray-500 p-2 rounded-lg">
                            <span class="font-semibold mb-3 block">USA size</span>
                            <ul class="" aria-labelledby="dropdown-sizes">
                                <li class="hover:bg-blue-950 hover:text-white p-2 rounded-lg">32</li>
                                <li class="hover:bg-blue-950 hover:text-white p-2 rounded-lg">36</li>
                                <li class="hover:bg-blue-950 hover:text-white p-2 rounded-lg">40</li>
                            </ul>
                        </div>

                    </div>
                    <div class="w-full">

                        <button id="add-to-cart"
                            class="font-semibold p-3 w-full text-blue-900 bg-blue-200 hover:bg-blue-300 border border-transparent rounded-lg">Añadir
                            al
                            carrito</button>

                    </div>
                    <button class="font-semibold rounded-lg p-3 w-full text-white bg-blue-900 hover:bg-blue-950">Comprar
                        ahora</button>

                </section>

                <section class="mt-8 border border-gray-500 rounded-lg flex flex-col group">
                    <input type="checkbox" name="" id="envio" class="hidden">

                    <label
                        class=" flex items-center justify-between w-full rounded hover:bg-gray-100 text-center p-3 cursor-pointer"
                        for="envio">
                        Envió de Buhogt, vendido por 1+mes
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-5 group-has-[:checked]:rotate-[180deg] transition-all duration-[.5s] ease-in-out"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m4.5 15.75l7.5-7.5l7.5 7.5" />
                        </svg>
                    </label>

                    <div
                        class=" flex flex-col h-[0px]  overflow-hidden group-has-[:checked]:overflow-y-scroll transition-all duration-[.5s] ease-in-out  group-has-[:checked]:h-[300px] hidden-scroll">

                        <hr class=" border border-gray-300">

                        <div class="p-3">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path fill="#000" fill-rule="evenodd"
                                        d="M2 2a1 1 0 0 0-1 1v14c0 1.354.897 2.498 2.129 2.872a3 3 0 0 0 5.7.128h6.341a3 3 0 0 0 5.7-.128A3.001 3.001 0 0 0 23 17v-4a5 5 0 0 0-5-5h-4V3a1 1 0 0 0-1-1zm13.171 16H14v-8h4a3 3 0 0 1 3 3v4a.997.997 0 0 1-.293.707a3 3 0 0 0-5.536.293m-9.878.293a1 1 0 1 1 1.414 1.414a1 1 0 0 1-1.414-1.414M17 19a1 1 0 1 1 2 0a1 1 0 0 1-2 0"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Q35.00</span>
                            </div>
                            <span>1-3 días de trabajo</span>
                            <span class="text-orange-500 w-full flex justify-end">Gratis con plus</span>
                            <span class="">Envíos premium</span>

                        </div>

                        <hr class="border border-gray-300 mt-4">

                        <div class="p-3 flex flex-col">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path fill="#000" fill-rule="evenodd"
                                        d="M2 2a1 1 0 0 0-1 1v14c0 1.354.897 2.498 2.129 2.872a3 3 0 0 0 5.7.128h6.341a3 3 0 0 0 5.7-.128A3.001 3.001 0 0 0 23 17v-4a5 5 0 0 0-5-5h-4V3a1 1 0 0 0-1-1zm13.171 16H14v-8h4a3 3 0 0 1 3 3v4a.997.997 0 0 1-.293.707a3 3 0 0 0-5.536.293m-9.878.293a1 1 0 1 1 1.414 1.414a1 1 0 0 1-1.414-1.414M17 19a1 1 0 1 1 2 0a1 1 0 0 1-2 0"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Q25.00</span>
                            </div>
                            <span><b>3 - 5</b> Tiempo de entrega</span>
                            <span>Envíos Standard</span>

                            <span class="font-semibold text-blue-900 mt-8">Prueba por 30 días gratis</span>
                        </div>
                    </div>

                </section>

                <section class="mt-10">

                    <div id="accordion-options" data-accordion="collapse">
                        <h2 id="accordion-heading-materials">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white rounded-lg"
                                data-accordion-target="#accordion-body-materials" aria-expanded="false"
                                aria-controls="accordion-body-materials">
                                <span class="font-bold">Materiales</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-materials" class="hidden bg-gray-100 p-3 rounded-lg"
                            aria-labelledby="accordion-heading-materials">
                            Content...
                        </div>
                        <h2 id="accordion-heading-details" class="mt-3">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white rounded-lg"
                                data-accordion-target="#accordion-body-details" aria-expanded="false"
                                aria-controls="accordion-body-details">
                                <span class="font-bold">Detalles</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-details" class="hidden bg-gray-100 p-3 rounded-lg"
                            aria-labelledby="accordion-heading-details">
                            Content...
                        </div>
                        <h2 id="accordion-heading-size" class="mt-3">
                            <button type="button"
                                class="py-3 flex items-center justify-between w-full !text-black !bg-white rounded-lg"
                                data-accordion-target="#accordion-body-size" aria-expanded="false"
                                aria-controls="accordion-body-size">
                                <span class="font-bold">Tamaño y ajustes</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-size" class="hidden bg-gray-100 p-3 rounded-lg"
                            aria-labelledby="accordion-heading-size">
                            Content...
                        </div>
                    </div>

                </section>
            </div>
            <!-- end información del producto y compra -->

        </section>

        <!-- start sección "Más artículos de esta tienda" -->
        <section class="mt-14 max-w-7xl mx-auto mb-20 px-5">
            <header class="flex lg:flex-row flex-col gap-3">
                <h4 class="md:text-3xl text-2xl md:text-start text-center font-semibold">Mas artículos de esta
                    tienda</h4>

                <button class="p-2 px-4 border border-black rounded-lg">Ver 1,000 artículos más</button>
            </header>

            <div class="relative">
                <div class="hidden-scroll mt-8 flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x md:overflow-x-auto overflow-x-scroll"
                    data-carousel-parent data-type-template="product">

                </div>
                <button data-prev-btn
                    class="absolute -left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </section>
        <!-- end sección "Más artículos de esta tienda" -->

        <!-- start sección "También podría interesante" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header class="flex lg:flex-row flex-col lg:text-start  gap-3 justify-between">
                <div class="flex lg:flex-row flex-col lg:gap-5 gap-2 lg:items-end items-left">
                    <h4 class="md:text-3xl text-2xl font-semibold">También podría interesante</h4>
                    <p class="flex items-center gap-2 text-sm">
                        <span>incluyendo anuncios</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9.879 7.519c1.172-1.025 3.071-1.025 4.243 0c1.171 1.025 1.171 2.687 0 3.712a2.98 2.98 0 0 1-.67.442c-.746.361-1.452.999-1.452 1.827v.75M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0m-9 5.25h.008v.008H12z" />
                        </svg>
                    </p>
                </div>
            </header>

            <div class="relative">
                <div class="hidden-scroll mt-8 flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x md:overflow-x-auto overflow-x-scroll"
                    data-carousel-parent data-type-template="product">

                </div>
                <button data-prev-btn
                    class="absolute -left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </section>
        <!-- end sección "También podría interesante" -->

        <!-- start "Tiendas similares" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header class="flex md:flex-row flex-col lg:gap-16 gap-5 md:items-end items-left">
                <h4 class=" md:text-3xl text-2xl font-semibold">Tiendas similares</h4>
                <span class="text-gray-400 text-lg">Patrocinado</span>
            </header>

            <div class="relative">
                <div class="hidden-scroll mt-8 flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x md:overflow-x-auto overflow-x-scroll"
                    data-carousel-parent data-type-template="store">

                </div>
                <button data-prev-btn
                    class="absolute -left-0 hidden top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </section>
        <!-- end "Tiendas similares" -->

        <!-- start sección "Productos relacionados" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5">
            <header>
                <h4 class="md:text-3xl lg:text-start text-center text-2xl font-semibold">Productos relacionados</h4>
            </header>

            <div class="relative">
                <div class="hidden-scroll mt-8 flex justify-start items-center lg:gap-[35px] gap-5 snap-mandatory snap-x md:overflow-x-auto overflow-x-scroll"
                    data-carousel-parent data-type-template="product">

                </div>
                <button data-prev-btn
                    class="absolute -left-0 hidden top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button data-next-btn
                    class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>

            <!-- start pagination -->
            <div class="w-fit mt-16 flex flex-col flex-wrap sm:w-fit w-full">
                <span class="md:text-sm text-base text-center md:text-start mb-8 block">Te queda mucho por
                    descubrir</span>

                <div class="flex md:justify-between justify-center items-center gap-5">

                    <button id="btn-prev-pagination" class="opacity-0 rounded-lg">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  cursor-pointer rounded-lg" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- end pagination -->

        </section>
        <!-- end sección "Productos relacionados" -->

        <!-- start "Comentarios" -->
        <section class=" max-w-7xl mx-auto mb-20 px-5 grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-16">
            <div class="flex flex-col gap-3">
                <span class="text-2xl">Valoraciones</span>
                <div class="flex gap-2 items-center" data-stars>
                    <span class="text-sm">4.6</span>
                </div>
                <span class="text-2xl">Envío</span>
                <div class="flex gap-2 items-center" data-stars>
                    <span class="text-sm">4.6</span>
                </div>
            </div>
            <div>
                <span class="text-2xl">Comentarios</span>
                <div class="flex flex-col gap-10 mt-5">

                    <div class="flex flex-col gap-3 text-sm">
                        <div data-stars></div>
                        <p class="text-base">Tan lindo! Va con mi decoración costera</p>
                        <span>Ver en el idioma original</span>
                        <div class="flex gap-2">
                            <b class="flex-none">Articulo comprado:</b>
                            <p class="truncate text-gray-500 underline">
                                <a href="">Blue Beach Umbrellas Print Beach Umbrella Printable,
                                    Beach Di Print Beach Umbrella Printable,
                                    Beach Di </a>
                            </p>
                        </div>
                        <div class="flex items-center gap-4 text-gray-500 ">
                            <div class="size-8 bg-orange-200 rounded-full grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path
                                            d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="#8a5006"
                                            d="M16.5 11a5.5 5.5 0 0 1 4.821 8.148l.386 1.311a1.005 1.005 0 0 1-1.248 1.248l-1.31-.386A5.5 5.5 0 1 1 16.5 11M11 3a9.004 9.004 0 0 1 8.708 6.719a7.5 7.5 0 0 0-9.22 11.267a8.953 8.953 0 0 1-4.097-1.255l-2.65.78a1.008 1.008 0 0 1-1.252-1.252l.78-2.65A9 9 0 0 1 11 3" />
                                    </g>
                                </svg>
                            </div>
                            <span class="underline">Carl Stewart</span>
                            <span class="">26 ago 2023</span>
                        </div>
                        <div class="flex items-center gap-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 512 512">
                                <path
                                    d="M198 448h172c15.7 0 28.6-9.6 34.2-23.4l57.1-135.4c1.7-4.4 2.6-9 2.6-14v-38.6c0-21.1-17-44.6-37.8-44.6H306.9l18-81.5.6-6c0-7.9-3.2-15.1-8.3-20.3L297 64 171 191.3c-6.8 6.9-11 16.5-11 27.1v192c0 21.1 17.2 37.6 38 37.6z"
                                    fill="#000" />
                                <path d="M48 224h64v224H48z" fill="#000" />
                            </svg>
                            <span>¿Te ha resultado util?</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 text-sm">
                        <div data-stars></div>
                        <p class="text-base">Tan lindo! Va con mi decoración costera</p>
                        <span>Ver en el idioma original</span>
                        <div class="flex gap-2">
                            <b class="flex-none">Articulo comprado:</b>
                            <p class="truncate text-gray-500 underline">
                                <a href="">Blue Beach Umbrellas Print Beach Umbrella Printable,
                                    Beach Di Print Beach Umbrella Printable,
                                    Beach Di </a>
                            </p>
                        </div>
                        <div class="flex items-center gap-4 text-gray-500 ">
                            <div class="size-8 bg-orange-200 rounded-full grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path
                                            d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="#8a5006"
                                            d="M16.5 11a5.5 5.5 0 0 1 4.821 8.148l.386 1.311a1.005 1.005 0 0 1-1.248 1.248l-1.31-.386A5.5 5.5 0 1 1 16.5 11M11 3a9.004 9.004 0 0 1 8.708 6.719a7.5 7.5 0 0 0-9.22 11.267a8.953 8.953 0 0 1-4.097-1.255l-2.65.78a1.008 1.008 0 0 1-1.252-1.252l.78-2.65A9 9 0 0 1 11 3" />
                                    </g>
                                </svg>
                            </div>
                            <span class="underline">Carl Stewart</span>
                            <span class="">26 ago 2023</span>
                        </div>
                        <div class="flex items-center gap-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 512 512">
                                <path
                                    d="M198 448h172c15.7 0 28.6-9.6 34.2-23.4l57.1-135.4c1.7-4.4 2.6-9 2.6-14v-38.6c0-21.1-17-44.6-37.8-44.6H306.9l18-81.5.6-6c0-7.9-3.2-15.1-8.3-20.3L297 64 171 191.3c-6.8 6.9-11 16.5-11 27.1v192c0 21.1 17.2 37.6 38 37.6z"
                                    fill="#000" />
                                <path d="M48 224h64v224H48z" fill="#000" />
                            </svg>
                            <span>¿Te ha resultado util?</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- end " Comentarios" -->

        <!-- start "Explora más búsquedas relacionadas" -->
        <section class="max-w-7xl mx-auto mb-20 px-5">
            <span class="text-xl font-light block mb-10">Explora más búsquedas relacionadas</span>
            <div class="flex flex-wrap gap-2">
                <div class="border border-black p-3 rounded-lg">arte de sombrilla de playa</div>
                <div class="border border-black p-3 rounded-lg">playa imprimirle</div>
                <div class="border border-black p-3 rounded-lg">Impresión de playa</div>
                <div class="border border-black p-3 rounded-lg">Azul y blanco</div>
                <div class="border border-black p-3 rounded-lg">fotografía de playa</div>
                <div class="border border-black p-3 rounded-lg">descarga instantánea</div>
                <div class="border border-black p-3 rounded-lg">Estampado playa azul</div>
                <div class="border border-black p-3 rounded-lg">Decoración de la pared de playa</div>
            </div>

            <div class="mt-14 text-sm flex flex-wrap gap-5">
                <span>Fecha de publicación: 21 sep 2023</span>
                <div class="flex gap-2 flex-wrap">
                    <span class="underline">1058 favoritos</span>
                    <span class="underline">Informar sobre este articulo en Buhogt</span>
                </div>
            </div>

            <div class="mt-5 flex gap-1 text-sm flex-wrap">

                <a class="underline" href="">Todas las categorías</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>

                <a class="underline" href="">Arte y objetos de colección</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>

                <a class="underline" href="">Impresiones y laminas</a>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                    <path fill="#000" fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10L8.22 6.28a.75.75 0 0 1 0-1.06"
                        clip-rule="evenodd" />
                </svg>
                <div class="flex items-center">
                    <a class="underline" href="">Impresiones digitales</a>

                </div>
            </div>

        </section>
        <!-- end " Explora más búsquedas relacionadas" -->

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

        const carouselInit = ($carousel, items) => {

            let template = ''
            if ($carousel.dataset.typeTemplate === 'store') {

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
                    template += `<div class="carousel-item snap-start">
        <span class=" block mb-4 lg:text-start text-center">Tienda ${store}</span>
        <div class="relative md:w-[283px] w-[130px]">
          <img src="${img}" class="border border-black w-full h-full object-cover rounded"
            alt="${store}" />
        </div>
        <div class="flex gap-5 flex-col pt-3 md:items-start items-center ">
          <p class="lg:text-start text-center">descripción</p>
          <a href="" class="font-bold w-fit leading-5 md:text-base text-sm	border-b border-black ">
            <div class="flex items-center md:gap-2 gap-1">
              Visitar tienda
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16">
                <path fill="#000" fill-rule="evenodd"
                  d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </a>
        </div>
      </div>`
                });

            } else {

                const color = $carousel.dataset.color || 'black'

                const breakPointsWidth =
                    'max-[320px]:!w-[130px] max-[375px]:!w-[160px] max-[425px]:!w-[185px] max-[768px]:!w-[229px] lg:!w-[220px]'

                const data = [{
                        id: 1,
                        title: 'New balance age',
                        img: 'product-1.png',
                        price: '17.17',
                        discount: '15.17'
                    },
                    {
                        id: 2,
                        title: 'Jeans Buda',
                        img: 'product-2.png',
                        price: '117.17',
                        discount: '55.12'
                    },
                    {
                        id: 3,
                        title: 'Buda Mandala Hoodie',
                        img: 'product-3.png',
                        price: '217.17',
                        discount: '155.17'
                    },
                    {
                        id: 4,
                        title: 'Jeans Buda',
                        img: 'product-4.png',
                        price: '205.17',
                        discount: '22.17'
                    },
                    {
                        id: 5,
                        title: 'Chaqueta line',
                        img: 'product-5.png',
                        price: '57.17',
                        discount: '65.14'
                    },
                    {
                        id: 6,
                        title: 'Jeans Buda',
                        img: 'product-2.png',
                        price: '97.17',
                        discount: '15.17'
                    },
                    {
                        id: 7,
                        title: 'Anillos veranos',
                        img: 'product-1.png',
                        price: '34.17',
                        discount: '5.17'
                    },
                    {
                        id: 8,
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
                    title,
                    id
                }, i) => {
                    template += `
      <div class="carousel-item snap-start group " >
        <div class="relative md:!h-[270px] h-[200px] ${breakPointsWidth} overflow-hidden shadow-lg shadow-black/10 rounded bg-transparent">
          <img loading="lazy" src="/images/products/${img}" class="image-product group-hover:scale-[1.1] transition-transform !w-full !h-full !align-bottom	 object-cover rounded" alt="${title}" />
          <button
          data-id="${id}"
          data-btn-like
            class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="1.5"
                d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
            </svg></button>
        </div>
        <div class="flex gap-4 flex-col pt-3 text-[${color}]">
          <h3 class="text-lg  md:min-h-fit min-h-[60px] title-product">${title}</h3>
          <!-- start stars  -->
          <div data-stars class="flex md:flex-row flex-col md:items-center items-start justify-start gap-2 text-[${color}]">

          </div>
          <!-- end stars  -->
          <div class="flex lg:flex-row flex-col xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
            <b class="text-base price-product">Q${price}</b>
            <span class="${color === 'white' ? 'text-green-400' : 'text-green-600'} line-through text-base">Q${discount} </span>
          </div>
          <span class="text-sm">by MysticArtByJose</span>

        </div>
      </div>
      `
                });
            }


            $carousel.innerHTML = template

            const prevBtn = $carousel.parentElement.querySelector('[data-prev-btn]');
            const nextBtn = $carousel.parentElement.querySelector('[data-next-btn]');

            $carousel.addEventListener('scrollend', e => {

                if (window.screen.width < 1024) return

                prevBtn.classList[
                    e.target.scrollLeft > 0 ? 'remove' : 'add'
                ]('hidden')

                nextBtn.classList[
                    (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ? 'add' : 'remove'
                ]('hidden')

            })

            if (window.screen.width < 1024) {
                prevBtn.classList.add('hidden')
                nextBtn.classList.add('hidden')
            }
        }

        const carouselAction = ($carousel) => {

            const prevBtn = $carousel.parentElement.querySelector('[data-prev-btn]');
            const nextBtn = $carousel.parentElement.querySelector('[data-next-btn]');

            const item = $carousel.querySelector('.carousel-item')

            // Función para avanzar al siguiente grupo de elementos
            nextBtn.addEventListener('click', function() {
                $carousel.scrollTo({
                    left: $carousel.scrollLeft + item.clientWidth,
                    behavior: 'smooth'
                })

            });

            // Función para retroceder al grupo anterior de elementos
            prevBtn.addEventListener('click', function() {
                $carousel.scrollTo({
                    left: $carousel.scrollLeft - item.clientWidth,
                    behavior: 'smooth'
                })
            });

        }

        document.querySelectorAll('[data-carousel-parent]').forEach($carousel => {
            carouselInit($carousel, $carousel.dataset.typeTemplate === 'store' ? 4 : 5)
            carouselAction($carousel)
        });


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


        const initStars = () => {
            document.querySelectorAll('[data-stars]').forEach(e => {
                e.innerHTML = generateStars()
            })
        }

        initStars()
    </script>


    <script>
        const setSelectedItem = (itemSelected) => {

            document.querySelectorAll('#sidebar-preview-images > div').forEach(
                $item => {

                    $item.children[1].classList.add('bg-white/50')
                    $item.children[1].classList.remove('bg-white/0')

                    $item.classList.add('hover:border-black', 'cursor-pointer', 'border-transparent')

                    $item.classList.remove('pointer-events-none', 'border-black')
                }
            )

            itemSelected.classList.add('pointer-events-none', 'border-black')
            itemSelected.classList.remove('hover:border-black', 'cursor-pointer', 'border-transparent')

            itemSelected.children[1].classList.remove('bg-white/50')
            itemSelected.children[1].classList.add('bg-white/0')
        }


        const previewProductImageGallery = () => {

            const carousel = document.querySelector('#carousel');
            const prevBtn = carousel.parentElement.querySelector('[data-prev-btn]');
            const nextBtn = carousel.parentElement.querySelector('[data-next-btn]');

            const item = carousel.querySelector('img')

            // Función para avanzar al siguiente grupo de elementos
            nextBtn.addEventListener('click', function() {
                carousel.scrollTo({
                    left: carousel.scrollLeft + item.clientWidth,
                    behavior: 'smooth'
                })

                let id = (carousel.scrollLeft / item.clientWidth) + 2
                const itemSelected = document.querySelector(`#preview-${id}`)
                setSelectedItem(itemSelected)
            });

            // Función para retroceder al grupo anterior de elementos
            prevBtn.addEventListener('click', function() {
                carousel.scrollTo({
                    left: carousel.scrollLeft - item.clientWidth,
                    behavior: 'smooth'
                })

                let id = (carousel.scrollLeft / item.clientWidth)
                const itemSelected = document.querySelector(`#preview-${id}`)
                setSelectedItem(itemSelected)
            });

            carousel.addEventListener('scrollend', e => {

                prevBtn.classList[
                    e.target.scrollLeft > 0 ? 'remove' : 'add'
                ]('hidden')

                nextBtn.classList[
                    (e.target.scrollWidth - e.target.scrollLeft) <= e.target.clientWidth ? 'add' : 'remove'
                ]('hidden')

            })

            document.querySelector('#sidebar-preview-images').addEventListener('click', e => {

                const itemId = e.target.parentElement.id

                if (itemId) {
                    const position_img = +itemId.at(-1) - 1

                    carousel.scrollTo({
                        left: item.clientWidth * position_img,
                        behavior: 'smooth'
                    })

                    setSelectedItem(e.target.parentElement)
                }

            })


        }
        previewProductImageGallery()
    </script>

    <script>
        const products = []

        const addProduct = (newProduct) => {

            const alreadyExist = products.find(product => product.title === newProduct.title)

            if (alreadyExist) {

                products.map(product => {
                    if (product.title === newProduct.title) {
                        product.quantity = product.quantity + 1
                    }
                    return product
                })

            } else {
                products.push({
                    ...newProduct,
                    quantity: 1
                })
            }

            console.table(products)
        }

        const configBtnCartNavbar = () => {
            const $btnNavbarCart = document.querySelector('#button-cart-navbar')
            const $listCart = document.querySelector('#list-cart')

            $btnNavbarCart.addEventListener('click', () => {

                const $overlay = document.querySelector('#overlay-cart')
                $overlay.classList.remove('hidden')

                const isAlreadyOpen = !$listCart.classList.contains('hidden')
                $listCart.classList[isAlreadyOpen ? 'add' : 'remove']('hidden')

                if (products.length > 0) {
                    $listCart.classList.remove('-bottom-[85px]', 'h-fit')
                    $listCart.classList.add('-bottom-[405px]', 'h-[400px]')
                    refreshCart()
                } else {
                    $listCart.classList.remove('-bottom-[405px]', 'h-[400px]')
                    $listCart.classList.add('-bottom-[85px]', 'h-fit')
                }
            })

        }
        configBtnCartNavbar()

        const refreshCart = () => {
            const $listCart = document.querySelector('#list-cart')
            let productsHtml = ''

            products.forEach(({
                title,
                img,
                price,
                quantity
            }) => {
                productsHtml += `
    <div class="flex items-center gap-2 border border-gray-400 p-2 rounded">
      <img src="${img}" alt="${title}" class="border-gray-300 border size-[70px] rounded object-cover">
      <div class="flex flex-wrap gap-x-5">
        <h3 class="font-bold flex-none w-full text-lg truncate">${title}</h3>
        <span class="text-green-600">${price}</span>
        <span class="">Cantidad: <b>${quantity}</b></span>
      </div>
    </div>
    `
            })

            $listCart.innerHTML = productsHtml
        }

        const addToCart = () => {
            const $btnCart = document.querySelector('#add-to-cart')
            const $overlay = document.querySelector('#overlay-cart')

            $overlay.addEventListener('click', () => {
                const $listCart = document.querySelector('#list-cart')
                $listCart.classList.add('hidden')
                $overlay.classList.add('hidden')
            })


            $btnCart.addEventListener('click', () => {

                // configurar los datos para mostrar en el carrito
                const img = document.querySelector('#preview-1 img').src
                const title = document.querySelector('#title-product').textContent
                const price = document.querySelector('#price-product').textContent

                const newProduct = {
                    img,
                    title,
                    price
                }

                addProduct(newProduct)

                // actualizar la vista del carrito
                const $listCart = document.querySelector('#list-cart')
                $listCart.classList.remove('-bottom-[85px]', 'h-fit')
                $listCart.classList.add('-bottom-[405px]', 'h-[400px]')

                refreshCart()

                // mostrar numero de items en el icono de carrito
                const $btnNavbarCart = document.querySelector('#button-cart-navbar')
                const $spanItems = $btnNavbarCart.querySelector('#button-cart-navbar span')

                $spanItems.classList[
                    products.length > 0 ? 'remove' : 'add'
                ]('hidden')

                $spanItems.textContent = products.length > 0 ? products.length : ''


                // mostrar un mensaje/alerta de que se agregó al carrito

                const msgContainer = document.createElement('div')
                msgContainer.classList.add('font-semibold', 'p-3', 'w-full', 'text-green-800',
                    'bg-green-400/60', 'text-center', 'border', 'border-green-800', 'flex', 'items-center',
                    'justify-center', 'gap-2', 'animation-added-to-cart-in')

                msgContainer.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd"
          d="M15 8c0 .982-.472 1.854-1.202 2.402a2.995 2.995 0 0 1-.848 2.547a2.995 2.995 0 0 1-2.548.849A2.996 2.996 0 0 1 8 15a2.996 2.996 0 0 1-2.402-1.202a2.995 2.995 0 0 1-2.547-.848a2.995 2.995 0 0 1-.849-2.548A2.996 2.996 0 0 1 1 8c0-.982.472-1.854 1.202-2.402a2.995 2.995 0 0 1 .848-2.547a2.995 2.995 0 0 1 2.548-.849A2.995 2.995 0 0 1 8 1c.982 0 1.854.472 2.402 1.202a2.995 2.995 0 0 1 2.547.848c.695.695.978 1.645.849 2.548A2.996 2.996 0 0 1 15 8m-3.291-2.843a.75.75 0 0 1 .135 1.052l-4.25 5.5a.75.75 0 0 1-1.151.043l-2.25-2.5a.75.75 0 1 1 1.114-1.004l1.65 1.832l3.7-4.789a.75.75 0 0 1 1.052-.134"
          clip-rule="evenodd" />
      </svg>
      Añadido correctamente
    `

                $btnCart.classList.add('hidden')
                $btnCart.parentElement.appendChild(msgContainer)

                setTimeout(() => {
                    msgContainer.classList.remove('animation-added-to-cart-in')
                    msgContainer.classList.add('animation-added-to-cart-out')
                }, 1300);

                setTimeout(() => {
                    $btnCart.parentElement.removeChild(msgContainer)
                    $btnCart.classList.remove('hidden')
                    $btnCart.classList.add('animation-added-to-cart-in')
                }, 1600);

            })
        }

        addToCart()
    </script>

    <script>
        const manageLikes = () => {
            const likesNavbar = document.querySelector('#button-like-navbar')
            let productsLiked = []

            const removeProductFromLikeProductsList = (id) => {
                console.log('removeProductFromLikeProductsList')
                const existProduct = productsLiked.find(product => product.id === id)

                if (existProduct) {
                    productsLiked = productsLiked.filter(product => product.id !== id) || []
                }
            }

            const addLikeProductsList = (newProduct) => {
                const alreadyExist = productsLiked.find(product => product.id === newProduct.id)

                if (alreadyExist) {
                    alert('Ya has agregado este producto a tu lista de me gusta')
                    return;
                }

                productsLiked.push(newProduct)
            }

            const refreshProductLikedListNavbar = () => {
                const $listLikes = document.querySelector('#list-likes')
                let template = ''

                if (productsLiked.length === 0) {
                    template =
                        '<span class="text-center text-black/50 w-full block z-10">No hay productos que te gusten</span>'
                    $listLikes.innerHTML = template
                } else {

                    productsLiked.forEach(({
                        title,
                        img,
                        price,
                        id
                    }) => {
                        template += `
        <div class="flex items-center gap-2 border border-gray-400 p-2 rounded relative">
          <img src="${img}" alt="${title}" class="border-gray-300 border size-[70px] rounded object-cover">
          <div class="flex flex-wrap gap-x-5">
            <h3 class="font-bold flex-none w-full text-lg truncate">${title}</h3>
            <span class="text-green-600">${price}</span>
          </div>
          <button data-id="${id}" class="button-delete-liked-product  bg-red-500 active:bg-red-500 text-white hover:bg-red-600 p-1 text-sm px-2 rounded-lg absolute bottom-2 right-2">Eliminar<button>
        </div>
        `
                    })
                    $listLikes.innerHTML = template

                    document.querySelectorAll('.button-delete-liked-product').forEach($btn => {
                        $btn.addEventListener('click', () => {
                            removeProductFromLikeProductsList($btn.dataset.id)
                            refreshProductLikedListNavbar()
                            updateHearButtonNavbar()

                            document.querySelectorAll(`button[data-id="${$btn.dataset.id}"]`)
                                .forEach(btnProductLike => {

                                    const svgHeart = btnProductLike.children[0].children[0]
                                    const isLiked = !!svgHeart.classList.contains(
                                        'fill-red-500')
                                    if (isLiked) svgHeart.classList.remove('fill-red-500')

                                })

                        })
                    })

                }
            }

            const updateHearButtonNavbar = () => {
                // update heart button counter in navbar

                const $listLikes = document.querySelector('#list-likes')

                if (productsLiked.length > 0) {
                    $listLikes.classList.remove('-bottom-[85px]', 'h-fit')
                    $listLikes.classList.add('-bottom-[405px]', 'h-[400px]')

                    likesNavbar.children[0].classList.add('text-red-500')
                    likesNavbar.children[1].classList.remove('hidden')
                    likesNavbar.children[1].textContent = productsLiked.length > 99 ? '99+' : productsLiked.length

                } else {
                    likesNavbar.children[0].classList.remove('text-red-500')
                    likesNavbar.children[1].classList.add('hidden')
                    likesNavbar.children[1].textContent = ''

                    $listLikes.classList.add('-bottom-[85px]', 'h-fit')
                    $listLikes.classList.remove('-bottom-[405px]', 'h-[400px]')
                    $listLikes.innerHTML =
                        '<span class="text-center text-black/50 w-full block z-10">No hay productos que te gusten</span>'

                }
            }

            document.querySelectorAll('.carousel-item [data-btn-like]').forEach($btnLike => {

                $btnLike.addEventListener('click', () => {
                    const svgHeart = $btnLike.children[0].children[0]

                    const isLiked = !!svgHeart.classList.contains('fill-red-500')

                    // update card like button
                    svgHeart.classList[isLiked ? 'remove' : 'add']('fill-red-500')

                    const id = $btnLike.dataset.id

                    if (isLiked) {
                        // remove from list
                        removeProductFromLikeProductsList(id)

                    } else {
                        // add to list

                        // get product data liked
                        // console.log($btnLike.parentElement.parentElement)
                        const img = $btnLike.parentElement.parentElement.querySelector('.image-product')
                            .src
                        const title = $btnLike.parentElement.parentElement.querySelector(
                            '.title-product').textContent
                        const price = $btnLike.parentElement.parentElement.querySelector(
                            '.price-product').textContent

                        // update product liked list
                        addLikeProductsList({
                            id,
                            img,
                            title,
                            price
                        })
                    }

                    // update UI product liked list
                    refreshProductLikedListNavbar()

                    updateHearButtonNavbar()
                })
            })


            document.querySelector('#button-like-navbar').addEventListener('click', () => {

                const listLikes = document.querySelector('#list-likes')
                listLikes.classList.toggle('hidden')

                document.querySelector('#overlay-likes').classList.remove('hidden')
            })


            document.querySelector('#overlay-likes').addEventListener('click', (e) => {
                const $listLikes = document.querySelector('#list-likes')
                $listLikes.classList.add('hidden')
                e.target.classList.add('hidden')
            })

        }

        manageLikes()
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
