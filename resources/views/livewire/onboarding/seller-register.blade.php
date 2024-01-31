@extends('components.layouts.onboarding')

@section('content')
<div x-data="{ current_step: 1, current_page: 'page1', curren_page_step: 1 }">

    <div class="flex flex-col h-screen" >
        {{-- page 1 --}}
        <div class="flex-1 md:flex relative" x-show="current_page === 'page1'">
            <img src="assets/Group.png" alt="logo" class="absolute top-9 left-9">
            <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                style="background-image: url(assets/unsplash_Pdds9XsWyoM.png)">
            </div>

            <div class="w-full md:w-1/2 h-full bg-[#18193d] flex items-center justify-center text-white px-6 md:px-10">
                <div class="md:space-y-12 items-center justify-center space-y-8 text-center md:text-left">
                    <h1 class="text-3xl md:text-5xl">¡Hola, {{ auth()->user()->name }}!</h1>

                    <p class="text-lg md:text-2xl">Nos encanta poder ayudarte a darle vida a tu tienda. Para
                        empezar, necesitamos saber un poco quién eres y qué haces.</p>

                    <div class="mt-4 flex items-center justify-center sm:flex-col sm:items-start sm:justify-start">
                        <button @click="current_page = 'page2'"
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

        {{-- page 2 --}}
        <div class="flex-1 md:flex relative" x-show="current_page === 'page2'">
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


                        <button @click="current_page = 'page3'"
                            class="mt-8 text-xl shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                            Siguiente
                        </button>
                    </div>

                </div>
            </div>
        </div>

        {{-- page 3 --}}
        <div class="flex-1 md:flex relative" x-show="current_page === 'page3'">
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


                        <button @click="current_page = 'page4'"
                            class="mt-8 text-xl shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                            Siguiente
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- page 4 --}}
        <div class=" flex flex-col flex-1" x-show="current_page === 'page4'">
            {{-- logo --}}
            <div class="flex justify-center p-5 sm:justify-normal sm:pb-10 ">
                <img src="assets/logo/logo_horizontal.png" alt="logo_buho" class="">
            </div>
            {{-- steps --}}
            <div class="flex justify-center items-center border-y pt-4 pb-4 lg:pt-8 lg:pb-8">
                <div aria-label="Progress">
                    <ol role="list" class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++) <li class="relative " :class="{
                                        'pr-8 sm:pr-32 lg:pr-48': {{ $i }} < '5',
                                    }">
                            <div class="absolute" :class="{
                                            'inset-0 flex items-center': {{ $i }} < '5',
                                        }" aria-hidden="true">
                                <div :class="{
                                                'h-0.5 w-full bg-indigo-600': current_step >
                                                    {{ $i }},
                                                'h-0.5 w-0 bg-gray-200': current_step <
                                                    {{ $i }}
                                            }">
                                </div>
                            </div>
                            <a href="#" x-on:click.prevent="{current_step = {{ $i }}, curren_page_step = {{ $i }}}"
                                :class="{
                                            'relative flex h-5 w-5 lg:h-8 lg:w-8 items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-900': current_step ===
                                                {{ $i }},
                                            'relative flex h-5 w-5 lg:h-8 lg:w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white hover:border-gray-400': current_step !==
                                                {{ $i }}
                                        }">
                                <template x-if="current_step === {{ $i }}">
                                    <svg class="h-3 w-3 lg:h-5 lg:w-5 text-white" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="current_step !== {{ $i }}">
                                    <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"
                                        aria-hidden="true"></span>
                                </template>
                                <span class="sr-only">Step {{ $i }}</span>
                            </a>
                            </li>
                            @endfor
                    </ol>
                </div>
            </div>

            {{-- Step page 1 --}}
            <div class="flex flex-col flex-1" x-show="curren_page_step === 1">
                <div class="flex flex-col w-full justify-center items-center pt-4 sm:pt-12 pb-4 sm:pb-12">
                    <label class="font-medium text-xl sm:text-3xl">
                        Preferencias de la tienda
                    </label>
                    <label class="font-normal text-base sm:text-xl">
                        Empecemos! Cuéntanos algo sobre ti y tu tienda
                    </label>
                </div>
                <div class="flex flex-1 w-full justify-center pr-32 pl-32">
                    <div class="pt-8 pr-8 pl-8 flex w-full border-2">
                        <div class="w-1/2 flex flex-col">
                            <div class="grid grid-cols-2 pb-4">
                                <label for="storeDepartment" class="text-sm font-medium text-gray-900">Departamento
                                    de la
                                    tienda</label>
                                <select id="storeDepartment"
                                    class="w-52 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                                    <option selected>Guatemala</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-2 pb-4">
                                <label for="municipio" class="text-sm font-medium text-gray-900">Municipio</label>
                                <select id="municipio"
                                    class="w-52 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                                    <option selected>Guatemala</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2">
                            El idioma predeterminado que usarás para describir tus artículos. Elige con cuidado! No
                            puedes
                            cambiarlo una vez que lo guardes, pero podrás añadir otros más adelante.
                        </div>
                    </div>
                </div>

                <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                    <button x-on:click="{curren_page_step = 2, current_step = 2 }"
                        class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                        Guardar y continuar
                    </button>
                </div>
            </div>

            {{-- Step page 2 --}}
            <div class="flex flex-col flex-1" x-show="curren_page_step === 2">
                <div class="w-full flex flex-1 justify-center pt-4 sm:pt-12 pb-4 sm:pb-12 ">
                    <div class="flex flex-col space-y-6">
                        <label class="font-medium text-xl sm:text-3xl">
                            Ponle un nombre a tu tienda
                        </label>
                        <label class="w-96 text-xs sm:text-sm">
                            ¡No te preocupes! Puedes usar un nombre temporal ahora y cambiarlo más adelante. Muchas
                            veces,
                            los
                            vendedores se
                            inspiran en lo que venden, en su estilo... En cualquier cosa, prácticamente
                        </label>
                        <input type="text" placeholder="Escribe el nombre de tu tienda" class="w-96">

                        <div class="flex flex-col">
                            <label><b>*</b> Entre 4 y 20 carateres</label>
                            <label><b>*</b> Sin caracteres especiales, espacios ni letras con tilde</label>
                        </div>
                    </div>
                </div>

                <div x-show="curren_page_step === 2" class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                    <button x-on:click="{curren_page_step = 3, current_step = 3 }"
                        class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                        Guardar y continuar
                    </button>
                </div>
            </div>

            {{-- Step page 3 --}}
            <div class="flex flex-col flex-1 p-20" x-show="curren_page_step === 3">

                <div class="flex flex-col">
                    <label class="font-medium text-4xl">Crea un Producto</label>
                    <label>Añade algunas fotos y detalles sobre el artículo. Rellena lo que puedas por ahora, podrás
                        modificarlo más adelante.</label>
                </div>
                <div class="space-y-10">
                    {{-- div 1--}}
                    <div class="border flex flex-col pt-5 pb-5">
                        <div class="flex flex-col">
                            <label>Fotos</label>
                            <label>Añade todas las que puedas para que los compradores puedan ver cada detalle. Un
                                minímo de
                                4 a 8 fotos.</label>
                        </div>
                        <div class="flex flex-col lg:flex-row">
                            <div class="flex flex-col pl-10">
                                <div class="w-60">
                                    <label>Fotos *</label>
                                    <label>Usa hasta diez fotos para
                                        mostrar los aspectos más
                                        destacables de tu artículo.</label>
                                </div>
                                <div class="flex flex-col w-60">
                                    <label>Consejos:</label>
                                    <label>Usa luz natural sin flash.</label>
                                    <label>Incluye un objeto ordinario
                                        para que se vea la escala.</label>
                                    <label>Muestra el artículo en la
                                        mano, puesto o en acción.</label>
                                    <label>Utiliza un fondo liso y sencillo</label>
                                    <label>Añade fotos a las variantes
                                        para que los compradores
                                        puedan ver todas las
                                        opciones.</label>
                                </div>
                            </div>
                            <div
                                class="grid  grid-cols-7 grid-rows-2 gap-4 [&>div]:flex [&>div]:flex-col [&>div]:justify-center [&>div]:border [&>div]:xl:w-36 [&>div]:xl:h-36 [&>div]:lg:w-24 [&>div]:lg:h-24 [&>div]:w-14 [&>div]:h-14 [&>div]:bg-[#F5FAFA]">
                                <div class="text-center">Principal</div>
                                <div class="text-center">Ángulos</div>
                                <div class="text-center">Ángulos</div>
                                <div class="text-center">Ángulos</div>
                                <div class="text-center">Información</div>
                                <div class="text-center">En uso</div>
                                <div class="text-center">Tamaño</div>
                                <div class="text-center">Con atrezo</div>
                                <div class="text-center">Variantes</div>
                                <div class="text-center">10</div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-4">
                            <label class="text-xl">Como editar tus fotos</label>
                            <label>Recuerda que todas la fotos deben tener buena calidad, con fondos creativos o con
                                fondo blanco, para ser aceptadas. Ver
                                ejemplo a bajo</label>
                            <label class="text-amber-500">Aquí tienes un video de fondo blanco</label>
                            <label class="text-amber-500">Aquí tienes unos ejemplos de fotos creativas</label>
                        </div>
                    </div>
                    {{-- div 2--}}
                    <div class="border space-y-10 p-5">
                        <div class="flex flex-col">
                            <label class="text-xl">Información del producto</label>
                            <label>Cuéntale al mundo por qué le va a encantar tu artículo.</label>
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Título *</label>
                                <label class="w-56">Incluye palabras clave que los
                                    compradores usarían para
                                    encontrar el artículo.</label>
                            </div>
                            <input class="w-full h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Categoría*</label>
                                <label class="w-56">Escribe una descripción de dos
                                    o tres palabras sobre tu artículo
                                    para obtener sugerencias de
                                    categoría que ayuden a más
                                    compradores a encontrarlo.</label>
                            </div>
                            <input class="w-full h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Descripción *</label>
                                <label class="w-56">Comienza con una breve
                                    descripción de las mejores
                                    cualidades del artículo. Los
                                    compradores solo verán las
                                    primeras líneas de la descripción
                                    al principio, así que escógelas
                                    sabiamente.</label>
                                <label class="w-56">¿No sabes qué más decir? A los
                                    compradores también les gusta
                                    saber qué proceso sigues y cuál
                                    es la historia del artículo.</label>
                            </div>
                            <textarea class="w-full h-auto" type="text"></textarea>
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Resumen del carrito Opcional</label>
                                <label class="w-56">¿Vendes a Guatemala? La ley
                                    alemana exige que se muestren
                                    las características principales de
                                    un artículo para garantizar que
                                    los compradores saben lo que
                                    están a punto de comprar.</label>
                            </div>
                            <textarea class="w-full h-32" type="text"></textarea>
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Etiquetas Opcional</label>
                                <label class="w-56">¿Qué palabras se usarían para
                                    buscar tus artículos? Usa las 13
                                    etiquetas para que lo
                                    encuentren.</label>
                            </div>
                            <input class="w-full h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Redes sociales</label>
                                <label class="w-56">Pon tu usuario de instagram
                                    para que el proceso de verificación sea más rápido.</label>
                            </div>
                            <input class="w-full h-10" type="text">
                        </div>
                    </div>
                    {{-- div 3--}}
                    <div class="border space-y-10 p-5">
                        <label>Inventario y precios</label>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Precio *</label>
                                <label class="w-64">Recuerda tener en cuenta los
                                    costes de los materiales, la
                                    mano de obra y otros gastos
                                    del negocio. Tener en cuenta
                                    que el impuesto del 5- 12%</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Precio de envio *</label>
                                <label class="w-64">Recuerda el envio va por
                                    tu cuenta. Agrega un precio
                                    a nivel local y nacional.</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Tiempor estimado de envio*</label>
                                <label class="w-64">Ingrese el tiempo estimado que
                                    se tomara en hacerlo.</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Precio en oferta opcional</label>
                                <label class="w-64">Define precios diferentes con
                                    el envío incluido para los
                                    compradores nacionales.</label>
                                <label class="w-64">Mas informacion</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">Cantidad *</label>
                                <label class="w-64">Para cantidades mayores de
                                    uno, renovaremos
                                    automáticamente este artículo
                                    hasta que se agoten sus
                                    existencias. Te cargaremos una
                                    tarifa de publicación de Q100.00</label>
                                <label class="w-64">Mas informacion</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <div class="flex flex-col">
                                <label class="text-xl">SKU opcional</label>
                                <label class="w-64">Los códigos SKU son solo para
                                    tu referencia; los compradores
                                    no los verán. Obtén más</label>
                                <label class="w-64">información sobre los SKU.</label>
                            </div>
                            <input class="w-60 h-10" type="text">
                        </div>
                    </div>

                    {{-- div 4--}}
                    <div class="border flex flex-col space-y-5 p-5">
                        <div class="flex flex-col">
                            <label class="text-xl">Variantes</label>
                            <label>Añadir las opciones disponibles, como el color o la talla. Los compradores elegirán entre estas al hacer su
                                compra.</label>
                        </div>
                        <button class="bg-gray-100 w-36 h-8">Añadir variantes</button>
                        <div class="flex justify-between bg-[#d7e5f5] h-16 rounded p-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex justify-center items-center h-10 w-10 rounded-full bg-white">@svg('bi-stars', 'w-5 h-5 text-black')</div>
                                <label>Hemos añadido vinculación de fotos a las variantes, edición por lotes y ordenar
                                    como opciones nuevas.</label>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <button class="border border-stone-950 w-24 h-10 rounded-full">Omitir</button>
                                <button class="bg-black text-white w-24 h-10 rounded-full">Pruébalo</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- button --}}
                <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                    <button x-on:click="{curren_page_step = 4, current_step = 4 }"
                        class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                        Guardar y continuar
                    </button>
                </div>
            </div>
        </div>

        {{-- footer --}}
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
