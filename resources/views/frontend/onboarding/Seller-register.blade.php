@extends('components.layouts.onboarding')

@section('content')
    <div x-data="{ current_step: 1, currentPage: 'page1' }">
        {{-- page 1 --}}
        <div class="flex flex-col h-screen" x-show="currentPage === 'page1'">
            <div class="flex-1 md:flex relative">
                <img src="assets/Group.png" alt="logo" class="absolute top-9 left-9">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/unsplash_Pdds9XsWyoM.png)">
                </div>

                <div class="w-full md:w-1/2 h-full bg-[#18193d] flex items-center justify-center text-white px-6 md:px-10">
                    <div class="md:space-y-12 items-center justify-center space-y-8 text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl">¡Hola, Diego!</h1>

                        <p class="text-lg md:text-2xl">Nos encanta poder ayudarte a darle vida a tu tienda. Para
                            empezar, necesitamos saber un poco quién eres y qué haces.</p>

                        <div class="mt-4 flex items-center justify-center sm:flex-col sm:items-start sm:justify-start">
                            <button @click="currentPage = 'page2'"
                                class="flex justify-center items-center rounded-full w-24 md:w-28 p-2 text-lg text-black border border-white bg-white font-medium transition hover:bg-transparent hover:text-white focus:outline-none">
                                Vamos @svg('heroicon-m-arrow-long-right', 'h-6 w-6')
                            </button>
                        </div>

                        <p class="text-sm">
                            Al hacer clic en "Vamos" y abrir una tienda de Buhogt, aceptas nuestra <u>Política del
                                vendedor</u>
                            y la
                            <u>Política de</u> Buhogt, además de nuestras <u>Condiciones de uso</u> y la <u>Política de
                                privacidad.</u>
                        </p>
                    </div>
                </div>
            </div>
            <footer
                class="hidden md:flex underline underline-offset-4 md:items-center  md:space-x-6 bg-black text-white h-16 md:h-24 text-center md:text-left px-4 md:px-10">
                <a href="#">Q - Español</a>
                <a href="#">Contenido de productos</a>
                <a href="#">Privacidad</a>
                <a href="#">Anuncios basados en intereses</a>
                <a href="#">Regiones</a>
            </footer>
        </div>

        {{-- page 2 --}}
        <div class="flex flex-col h-screen" x-show="currentPage === 'page2'">
            <div class="flex-1 md:flex relative">
                <img src="assets/Group.png" alt="logo" class="absolute top-9 left-9">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/onboarding2.png)">
                </div>

                <div class="w-full md:w-1/2 h-full bg-white flex items-center justify-center text-black px-6 md:px-10">
                    <div class="md:space-y-12 items-center justify-center space-y-8 text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl">¿Por qué estás en Buhogt?</h1>

                        <p class="text-lg md:text-2xl">Te guiaremos para que tu tienda vaya sobre ruedas, tanto si tienes
                            experiencia en esto como si es la primera vez que vendes.</p>
                        <div class="mt-4 space-y-4 leading-6">
                            <div class="flex gap-x-2.5">
                                <input id="option_1" name="reference" value="Acabo de empezar" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_1">Acabo de empezar</label>
                            </div>
                            <div class="flex gap-x-2.5">
                                <input id="option_2" name="reference"
                                    value="Tengo un negocio y quiero vender en Internet por primera vez" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_2">Tengo un negocio y quiero vender en Internet por primera vez</label>
                            </div>
                            <div class="flex gap-x-2.5">
                                <input id="option_3" name="reference"
                                    value="Quiero ampliar mi negocio digital vendiendo en Buhogt" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_3">Quiero ampliar mi negocio digital vendiendo en Buhogt</label>
                            </div>
                            <div class="flex gap-x-2.5">
                                <input id="option_4" name="reference" value="Estoy aquí para curiosear" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_4">Estoy aquí para curiosear</label>
                            </div>
                        </div>


                        <div class="flex space-x-8 justify-end">
                            <a href="#"
                                class="mt-8 w-52 flex justify-center rounded-full border border-black py-3 font-medium text-xl">
                                Omitir esta prueba
                            </a>


                            <button @click="currentPage = 'page3'"
                                class="mt-8 text-xl shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                                Siguiente
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <footer
                class="hidden md:flex underline underline-offset-4 md:items-center  md:space-x-6 bg-black text-white h-16 md:h-24 text-center md:text-left px-4 md:px-10">
                <a href="#">Q - Español</a>
                <a href="#">Contenido de productos</a>
                <a href="#">Privacidad</a>
                <a href="#">Anuncios basados en intereses</a>
                <a href="#">Regiones</a>
            </footer>
        </div>



        {{-- page 3 --}}
        <div class="flex flex-col h-screen" x-show="currentPage === 'page3'">
            <div class="flex-1 md:flex relative">
                <img src="assets/Group.png" alt="logo" class="absolute top-9 left-9">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/onboarding3.png)">
                </div>

                <div class="w-full md:w-1/2 h-full bg-white flex items-center justify-center px-6 md:px-10">
                    <div class="md:space-y-12 items-center justify-center space-y-8 text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl">¿Qué cosas deseas vender en Buhogt?</h1>

                        <div class="grid grid-cols-2 gap-9 place-items-center">
                            <div class="w-64 h-52 shadow-2xl rounded-2xl border flex flex-col items-center justify-center">
                                <img src="assets/tienda.png" alt="logo" class="w-32 h-32">
                                <h2>Vender en linéa</h2>
                            </div>
                            <div class="w-64 h-52 shadow-2xl rounded-2xl border flex flex-col items-center justify-center">
                                <img src="assets/SVG.png" alt="logo" class="w-32 h-32">
                                <h2>Promocionar mi tienda</h2>
                            </div>
                            <div class="w-64 h-52 shadow-2xl rounded-2xl border flex flex-col items-center justify-center">
                                <img src="assets/rocket.png" alt="logo" class="w-32 h-32">
                                <h2>Posicionamiento de marca</h2>
                            </div>
                            <div class="w-64 h-52 shadow-2xl rounded-2xl border flex flex-col items-center justify-center">
                                <img src="assets/money.png" alt="logo" class="w-32 h-32">
                                <h2>Pagos y envíos</h2>
                            </div>
                        </div>

                        <div class="flex space-x-8 justify-end">
                            <a href="#"
                                class="mt-8 w-52 flex justify-center rounded-full border border-black py-3 font-medium text-xl">
                                Omitir esta prueba
                            </a>


                            <button @click="currentPage = 'page4'"
                                class="mt-8 text-xl shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <footer
                class="hidden md:flex underline underline-offset-4 md:items-center  md:space-x-6 bg-black text-white h-16 md:h-24 text-center md:text-left px-4 md:px-10">
                <a href="#">Q - Español</a>
                <a href="#">Contenido de productos</a>
                <a href="#">Privacidad</a>
                <a href="#">Anuncios basados en intereses</a>
                <a href="#">Regiones</a>
            </footer>
        </div>


        {{-- step --}}
        <div class="flex flex-col h-screen" x-show="currentPage === 'page4'">
            <div x-data="{ current_step: 1 }">
                <nav aria-label="Progress">
                    <ol role="list" class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            <li class="relative pr-8 sm:pr-20">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                    <!-- Barra de progreso -->
                                    <div
                                        :class="{ 'h-0.5 w-full bg-indigo-600': current_step >=
                                            {{ $i }}, 'h-0.5 w-0 bg-gray-200': current_step <
                                                {{ $i }} }">
                                    </div>
                                </div>
                                <a href="#" x-on:click.prevent="current_step = {{ $i }}"
                                    :class="{
                                        'bg-indigo-600 hover:bg-indigo-900': current_step === {{ $i }},
                                        'bg-white': current_step !== {{ $i }},
                                        'cursor-pointer': current_step !== {{ $i }}
                                    }"
                                    class="relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 hover:border-indigo-900">
                                    <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Step {{ $i }}</span>
                                </a>
                            </li>
                        @endfor
                    </ol>
                </nav>
            </div>

            <footer
                class="hidden md:flex underline underline-offset-4 md:items-center  md:space-x-6 bg-black text-white h-16 md:h-24 text-center md:text-left px-4 md:px-10">
                <a href="#">Q - Español</a>
                <a href="#">Contenido de productos</a>
                <a href="#">Privacidad</a>
                <a href="#">Anuncios basados en intereses</a>
                <a href="#">Regiones</a>
            </footer>
        </div>
    </div>
@endsection
