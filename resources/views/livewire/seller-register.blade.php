<div>

    <div x-cloak x-data="{ 
        current_step: $persist($wire.entangle('current_step')),
        current_page: $persist($wire.entangle('current_page')),
        curren_page_step: $persist($wire.entangle('curren_page_step')),
        radio_individual_business: $persist($wire.entangle('radio_individual_business')),
        vender_en_linea: null,
        promocionar_mi_tienda: null,
        posicionamiento_de_marca: null,
        pagos_y_envios: null,
        sku: $persist($wire.entangle('sku')),
        tag: $persist($wire.entangle('tag')),
        banck: $persist($wire.entangle('banck')),
        phone: $persist($wire.entangle('phone')),
        title: $persist($wire.entangle('title')),
        price: $persist($wire.entangle('price')),
        amount: $persist($wire.entangle('amount')),
        category: $persist($wire.entangle('category')),
        name_shop: $persist($wire.entangle('name_shop')),
        birthdate: $persist($wire.entangle('birthdate')),
        department: $persist($wire.entangle('department')),
        sell_online: $persist($wire.entangle('sell_online')),
        local_price: $persist($wire.entangle('local_price')),
        description: $persist($wire.entangle('description')),
        offer_price: $persist($wire.entangle('offer_price')),
        municipality: $persist($wire.entangle('municipality')),
        account_name: $persist($wire.entangle('account_name')),
        company_name: $persist($wire.entangle('company_name')),
        cui_business: $persist($wire.entangle('cui_business')),
        type_account: $persist($wire.entangle('type_account')),
        cui_individual: $persist($wire.entangle('cui_individual')),
        business_email: $persist($wire.entangle('business_email')),
        account_number: $persist($wire.entangle('account_number')),
        // business_phone: $persist($wire.entangle('business_phone')),
        cui_individual: $persist($wire.entangle('cui_individual')),
        radio_questions: $persist($wire.entangle('radio_questions')),
        social_networks: $persist($wire.entangle('social_networks')),
        promote_my_store: $persist($wire.entangle('promote_my_store')),
        individual_email: $persist($wire.entangle('individual_email')),
        nationwide_price: $persist($wire.entangle('nationwide_price')),
        brand_positioning: $persist($wire.entangle('brand_positioning')),
        payments_shipments: $persist($wire.entangle('payments_shipments')),
        legal_reason_business: $persist($wire.entangle('legal_reason_business')),
        legal_reason_individual: $persist($wire.entangle('legal_reason_individual')),
        estimated_shipping_time: $persist($wire.entangle('estimated_shipping_time')),
    }">
        <div class="flex flex-col h-screen">
            {{-- page 1 --}}
            <div class="flex-1 md:flex relative" x-cloak x-show="current_page == 'page1'">
                <img src="assets/Group.png" alt="logo" class="absolute md:top-9 md:left-9">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/unsplash_Pdds9XsWyoM.png)">
                </div>

                <div
                    class="w-full md:w-1/2 h-full bg-[#18193d] flex items-center justify-center text-white px-6 md:px-10">
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
            <div class="flex-1 md:flex relative" x-cloak x-show="current_page == 'page2'">
                <img src="assets/Group.png" alt="logo" class="absolute md:top-9 md:left-9 hidden md:block">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/onboarding2.png)">
                </div>

                <div class="w-full md:w-1/2 h-full bg-white flex items-center justify-center text-black px-6 md:px-10">
                    <div class="md:space-y-12 items-center justify-center space-y-8 md:text-left">
                        <div class="text-3xl md:text-5xl">¿Por qué estás en Buhogt?</div>
                        <div class="text-lg md:text-2xl">Te guiaremos para que tu tienda vaya sobre ruedas, tanto si
                            tienes
                            experiencia en esto como si es la primera vez que vendes.</div>
                        <div class="mt-4 space-y-4 leading-6">
                            <div class="flex gap-x-2.5">
                                <input wire:model.lazy='radio_questions' value="Acabo de empezar" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_1">Acabo de empezar</label>
                            </div>
                            <div class="flex gap-x-2">
                                <input wire:model.lazy='radio_questions'
                                    value="Tengo un negocio y quiero vender en Internet por primera vez" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_2">Tengo un negocio y quiero vender en Internet por primera
                                    vez</label>
                            </div>
                            <div class="flex gap-x-2">
                                <input wire:model.lazy='radio_questions'
                                    value="Quiero ampliar mi negocio digital vendiendo en Buhogt" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_3">Quiero ampliar mi negocio digital vendiendo en Buhogt</label>
                            </div>
                            <div class="flex gap-x-2">
                                <input wire:model.lazy='radio_questions' value="Estoy aquí para curiosear" type="radio"
                                    class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                <label for="option_4">Estoy aquí para curiosear</label>
                            </div>
                        </div>


                        <div class="flex flex-col md:flex-row md:space-x-8 md:justify-end">
                            <button @click="current_page = 'page3', radio_questions = null"
                                class="md:mt-8 md:w-52 flex justify-center border border-black py-3 font-medium text-xl">
                                Omitir esta prueba
                            </button>

                            <button @click="current_page = 'page3'"
                                class="md:mt-8 mt-2 shadow-2xl inline-block bg-indigo-950 px-12 py-3 font-medium text-xl text-white transition hover:bg-indigo-700">
                                Siguiente
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            {{-- page 3 --}}
            <div class="flex-1 md:flex relative" x-cloak x-show="current_page == 'page3'">
                <img src="assets/Group.png" alt="logo" class="absolute top-9 left-9 hidden md:block">
                <div class="w-full md:w-1/2 flex items-center justify-center bg-cover"
                    style="background-image: url(assets/onboarding3.png)">
                </div>

                <div class="w-full md:w-1/2 h-full bg-white flex items-center justify-center px-6 md:px-10">
                    <div class="md:space-y-12 items-center justify-center space-y-8 text-center md:text-left">
                        <div class="text-lg md:text-5xl">¿Qué cosas deseas vender en Buhogt?</div>

                        <div class="md:px-12">
                            <div class="flex flex-wrap justify-center gap-10">
                                <label class="cursor-pointer border rounded-md">
                                    <input wire:model.lazy='sell_online' type="radio" class="peer sr-only"
                                        value="vender en linea" @click="sell_online = null">
                                    <div
                                        class="w-72 max-w-xl rounded-md bg-white p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                        <div class="flex flex-col gap-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                            </svg>
                                            <div class="flex flex-col justify-center items-center">
                                                <img src="assets/tienda.png" alt="logo" class="w-32 h-32">
                                                <span class="text-lg font-bold">Vender en linéa</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer border rounded-md">
                                    <input wire:model.lazy='promote_my_store' type="radio" class="peer sr-only"
                                        value="promocionar mi tienda" @click="promote_my_store = null" />
                                    <div
                                        class="w-72 max-w-xl rounded-md bg-white p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                        <div class="flex flex-col gap-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                            </svg>
                                            <div class="flex flex-col justify-center items-center">
                                                <img src="assets/SVG.png" alt="logo" class="w-32 h-32">
                                                <span class="text-lg font-bold">Promocionar mi tienda</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer border rounded-md">
                                    <input wire:model.lazy='brand_positioning' type="radio" class="peer sr-only"
                                        value="posicionamiento de marca" @click="brand_positioning = null" />
                                    <div
                                        class="w-72 max-w-xl rounded-md bg-white p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                        <div class="flex flex-col gap-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                            </svg>
                                            <div class="flex flex-col justify-center items-center">
                                                <img src="assets/rocket.png" alt="logo" class="w-32 h-32">
                                                <span class="text-lg font-bold">Posicionamiento de marca</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer border rounded-md">
                                    <input wire:model.lazy='payments_shipments' type="radio" class="peer sr-only"
                                        value="pagos y envios" @click="payments_shipments = null" />
                                    <div
                                        class="w-72 max-w-xl rounded-md bg-white p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                        <div class="flex flex-col gap-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                            </svg>
                                            <div class="flex flex-col justify-center items-center">
                                                <img src="assets/money.png" alt="logo" class="w-32 h-32">
                                                <span class="text-lg font-bold">Pagos y envios</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row space-x-8 justify-end">
                            <button
                                @click="current_page = 'page4', sell_online=null, promote_my_store=null, brand_positioning=null, payments_shipments=null"
                                class="mt-8 md:w-52 flex justify-center border border-black py-3 font-medium text-xl">
                                Omitir esta prueba
                            </button>

                            <button @click="current_page = 'page4'"
                                class="mt-8 text-xl shadow-2xl inline-block bg-indigo-950 px-12 py-3 font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- page 4 --}}
            <div class=" flex flex-col flex-1" x-cloak x-show="current_page == 'page4'">
                {{-- logo --}}
                <div class="flex justify-center p-5 sm:justify-normal sm:pb-10 ">
                    <img src="assets/logo/logo_horizontal.png" alt="logo_buho" class="">
                </div>

                {{-- steps --}}
                <div class="flex justify-center items-center border-y pt-4 pb-4 lg:pt-8 lg:pb-8">
                    <div aria-label="Progress" x-cloak x-show="curren_page_step != 5">
                        <ol role="list" class="flex items-center">
                            @for ($i = 1; $i <= 5; $i++) <li class="relative " :class="{
                                        'pr-8 sm:pr-32 lg:pr-48': {{ $i }} < '4',
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
                                <a href="#" x-on:click.prevent="current_step = {{ $i }}, curren_page_step = {{ $i }}"
                                    x-cloak x-show="{{ $i }} != 5" :class="{
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

                    <div class="flex flex-col items-center" x-cloak x-show="curren_page_step === 5">
                        <label class="text-2xl">¡Estamos emocionados que seas parte de Buhogt!</label>
                        <label class="text-xl">Te estaremos compartiendo más de Buhogt.</label>
                    </div>
                </div>

                {{-- Step page 1 --}}
                <div class="flex flex-col flex-1" x-cloak x-show="curren_page_step === 1">
                    <div class="flex flex-col w-full justify-center items-center pt-4 sm:pt-12 pb-4 sm:pb-12">
                        <label class="font-medium text-xl sm:text-3xl">
                            Ubicación de tu tienda
                        </label>
                        <label class="font-normal text-base sm:text-xl">
                            Empecemos! Cuéntanos algo sobre ti y tu tienda
                        </label>
                    </div>
                    <div class="flex flex-1 w-full justify-center pr-32 pl-32">
                        <div class="pt-8 pr-8 pl-8 flex w-full border-2">
                            <div class="w-1/2 flex flex-col">
                                <div class="grid grid-cols-2 pb-4">

                                    {{ $this->Departament }}
                                    {{-- <label for="storeDepartment"
                                        class="text-sm font-medium text-gray-900">Departamento
                                        de la
                                        tienda</label>
                                    <select id="storeDepartment"
                                        class="w-52 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                                        <option selected>Guatemala</option>
                                    </select> --}}

                                    {{-- {{$this->form}} --}}
                                </div>
                                <div class="grid grid-cols-2 pb-4">
                                    {{-- <label for="municipio"
                                        class="text-sm font-medium text-gray-900">Municipio</label>
                                    <select id="municipio"
                                        class="w-52 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                                        <option selected>Guatemala</option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="w-1/2">
                                Aquí nos gustaría saber dónde se encuentra ubicada tu tienda dentro de Guatemala. Por
                                favor, selecciona tu departamento y municipio de residencia para que podamos ofrecerte
                                una experiencia personalizada y conectarte con los compradores locales de tu área.
                                ¡Gracias por ser parte de nuestra comunidad de vendedores!
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                        <button wire:click='stepOne()' class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                            Guardar y continuar
                        </button>
                    </div>
                </div>

                {{-- Step page 2 --}}
                <div class="flex flex-col flex-1" x-cloak x-show="curren_page_step === 2">
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
                            {{ $this->NameShop }}

                            <div class="flex flex-col">
                                <label><b>*</b> Entre 4 y 20 carateres</label>
                                <label><b>*</b> Sin caracteres especiales, espacios ni letras con tilde</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                        <button wire:click='stepTwo()' class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                            Guardar y continuar
                        </button>
                    </div>
                </div>

                {{-- Step page 3 --}}
                <div class="flex flex-col flex-1 p-20" x-cloak x-show="curren_page_step === 3">
                    <div class="flex flex-col">
                        <label class="font-medium text-4xl">Crea un Producto</label>
                        <label class="py-5">Añade algunas fotos y detalles sobre el artículo. Rellena lo que puedas por
                            ahora, podrás
                            modificarlo más adelante.</label>
                    </div>
                    <div class="space-y-10">
                        <div class="border flex flex-col pt-5 pb-5">
                            <div class="flex flex-col mx-5 mb-4">
                                <label>Fotos</label>
                                <label>Añade todas las que puedas para que los compradores puedan ver cada detalle. Un
                                    minímo de
                                    4 a 8 fotos.</label>
                            </div>
                            <div class="flex  lg:justify-between px-10">
                                <div class="flex flex-col  pl-10">
                                    <div class="w-60">
                                        <label>Fotos<span class="text-red-600">*</span></label>
                                        <p>Usa hasta diez fotos para
                                            mostrar los aspectos más
                                            destacables de tu artículo.</p>
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
                            <div class="flex flex-col space-y-4 p-5">
                                <label class="text-xl">Como editar tus fotos</label>
                                <label>Recuerda que todas la fotos deben tener buena calidad, con fondos creativos o con
                                    fondo blanco, para ser aceptadas. Ver
                                    ejemplo a bajo</label>
                                {{-- <label class="text-amber-500">Aquí tienes un video de fondo blanco</label>
                                <label class="text-amber-500">Aquí tienes unos ejemplos de fotos creativas</label> --}}
                            </div>
                        </div>
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
                                <div class="w-full h-10">
                                    {{ $this->Title }}
                                </div>
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
                                <div class="w-full h-10">
                                    {{ $this->Category }}
                                </div>
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
                                <div class="w-full h-10">
                                    {{ $this->Description }}
                                </div>
                            </div>
                            {{-- <div class="flex space-x-5 ">
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
                            </div> --}}
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Etiquetas Opcional</label>
                                    <label class="w-56">¿Qué palabras se usarían para
                                        buscar tus artículos? Usa las 13
                                        etiquetas para que lo
                                        encuentren.</label>
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->Tag }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Redes sociales</label>
                                    <label class="w-56">Pon tu usuario de instagram
                                        para que el proceso de verificación sea más rápido.</label>
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->Social_networks }}
                                </div>
                            </div>
                        </div>
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
                                <div class="w-full h-10">
                                    {{ $this->Price }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Precio de envio *</label>
                                    <label class="w-64">Recuerda el envio va por
                                        tu cuenta. Agrega un precio
                                        a nivel local y nacional.</label>
                                </div>
                                <div class="flex space-x-4 w-full h-10">
                                    {{ $this->LocalPrice }}
                                    {{ $this->NationwidePrice }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Tiempor estimado de envio*</label>
                                    <label class="w-64">Ingrese el tiempo estimado que
                                        se tomara en hacerlo.</label>
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->Estimated_shipping_time }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Precio en oferta opcional</label>
                                    <label class="w-64">Define precios diferentes con
                                        el envío incluido para los
                                        compradores nacionales.</label>
                                    <label class="w-64">Mas informacion</label>
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->Offer_price }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">Cantidad *</label>
                                    <label class="w-64">
                                        Ingrese la cantidad de su producto.
                                    </label>
                                    {{-- <label class="w-64">Mas informacion</label> --}}
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->Amount }}
                                </div>
                            </div>
                            <div class="flex space-x-5 ">
                                <div class="flex flex-col">
                                    <label class="text-xl">SKU opcional</label>
                                    <label class="w-64">Los códigos SKU son solo para
                                        tu referencia; los compradores
                                        no los verán. Obtén más</label>
                                    <label class="w-64">información sobre los SKU.</label>
                                </div>
                                <div class="w-full h-10">
                                    {{ $this->SKU }}
                                </div>
                            </div>
                        </div>

                        {{-- <div class="border flex flex-col space-y-5 p-5">
                            <div class="flex flex-col">
                                <label class="text-xl">Variantes</label>
                                <label>Añadir las opciones disponibles, como el color o la talla. Los compradores
                                    elegirán
                                    entre estas al hacer su
                                    compra.</label>
                            </div>
                            <button class="bg-gray-100 w-36 h-8">Añadir variantes</button>
                            <div class="flex justify-between bg-[#d7e5f5] h-16 rounded p-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex justify-center items-center h-10 w-10 rounded-full bg-white">
                                        @svg('bi-stars', 'w-5 h-5 text-black')</div>
                                    <label>Hemos añadido vinculación de fotos a las variantes, edición por lotes y
                                        ordenar
                                        como opciones nuevas.</label>
                                </div>
                                <div class="flex space-x-4 items-center">
                                    <button class="border border-stone-950 w-24 h-10 rounded-full">Omitir</button>
                                    <button class="bg-black text-white w-24 h-10 rounded-full">Pruébalo</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                        <button wire:click='stepThree()' class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                            Guardar y continuar
                        </button>
                    </div>
                </div>

                {{-- Step page 4 --}}
                <div class="flex flex-col flex-1 p-20 space-y-16" x-cloak x-show="curren_page_step === 4">
                    <div class="flex flex-col justify-center items-center space-y-4">
                        <label class="text-3xl font-medium">Como se te va a pagar</label>
                        <label class="text-xl">Buhogt le da varias opciones como recibir sus pagos y a sus
                            compradores</label>
                        <div class="flex space-x-3">
                            <img src="assets/logos_mastercard.png" alt="mc" class="w-14 h-10">
                            <img src="assets/Vector.png" alt="visa" class="w-16 h-10">
                        </div>
                    </div>
                    <div class="flex flex-col border p-10 space-y-4">
                        <label>¿Qué tipo de vendedor eres?</label>
                        <label>En buhogt usamos esto para poder verificar tu información. Esto no va afectar tu tienda
                            en
                            Buhogt solo queremos
                            saber más de ti.
                        </label>
                        <div class="flex space-x-16">
                            <div class="flex">
                                <input wire:model.lazy='radio_individual_business' type="radio" name="abcd"
                                    value="individual"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="opcion1" checked>
                                <label for="opcion1"
                                    class="text-sm text-gray-500 ms-2 dark:text-gray-400">Individual</label>
                            </div>

                            <div class="flex">
                                <input wire:model.lazy='radio_individual_business' type="radio" name="abcd"
                                    value="business"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="opcion2">
                                <label for="opcion2"
                                    class="text-sm text-gray-500 ms-2 dark:text-gray-400">Negocio</label>
                            </div>
                        </div>
                        <label>Si tienes alguna duda puedes contactarnos a buhogt equipo</label>
                    </div>

                    <div class="flex flex-col border p-10 space-y-4" x-cloak
                        x-show="radio_individual_business === 'individual'">
                        <label class="font-medium text-xl">Cuentanos un poco más de ti</label>
                        <label>Esto es para propositos de identidad, estaremos verficando que todo sea seguro.</label>
                        <label>Esta información no sera pública en Buhogt.</label>
                        NOMBRE COMPLETO
                        {{-- <div class="flex space-x-5 ">
                            <label class="w-64">Primer Nombre *</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Apellidos:*</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Correo electronico:*</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Telefono: *</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Fecha de nacimiento: *</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Nit:</label>
                            <input class="w-60 h-10" type="text">
                        </div> --}}
                        <div>
                            {{ $this->Individual }}
                        </div>
                    </div>

                    <div class="flex flex-col border p-10 space-y-4" x-cloak
                        x-show="radio_individual_business === 'business'">
                        <label class="font-medium text-xl">Cuentanos un poco más de ti</label>
                        <label>Esto es para propositos de identidad, estaremos verficando que todo sea seguro.</label>
                        <label>Esta información no sera pública en Buhogt.</label>

                        {{-- <div class="flex space-x-5 ">
                            <label class="w-64">Nombre de la empresa:</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Representate legal:</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Correo electronico:*</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Telefono: *</label>
                            <input class="w-60 h-10" type="text">
                        </div>
                        <div class="flex space-x-5 ">
                            <label class="w-64">Nit:</label>
                            <input class="w-60 h-10" type="text">
                        </div> --}}
                        <div>
                            {{ $this->Business }}
                        </div>
                    </div>

                    <div class="flex flex-col border p-10 space-y-4">
                        <label>Para comenzar, ¿Qué banco se prefiere que se te deposite?</label>
                        <div class="flex space-x-4">
                            <div class="w-96">
                                {{ $this->Banck }}
                            </div>
                            <div class="w-96">
                                {{ $this->Type_account }}
                            </div>
                        </div>
                        {{-- <div class="flex space-x-3">
                            <div class="flex">
                                <input type="radio" name="abc"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="abc" checked>
                                <label for="abc"
                                    class="text-sm text-gray-500 ms-2 dark:text-gray-400">Individual</label>
                            </div>
                            <div class="flex">
                                <input type="radio" name="abc"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="abc">
                                <label for="abc" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Negocio</label>
                            </div>
                        </div> --}}
                        <div class="flex ">
                            {{-- <div class="flex flex-col">
                                <label class="w-56">Nombre de cuenta:*</label>
                            </div> --}}
                            <div class="w-full">
                                {{ $this->Account_name }}
                            </div>
                        </div>
                        <div class="flex ">
                            {{-- <div class="flex flex-col">
                                <label class="w-56">Número de cuenta:*</label>
                            </div> --}}
                            <div class="w-full">
                                {{ $this->Account_number }}
                            </div>
                        </div>
                        <label>Se le estara haciendo su deposito cada 15 dias, cualquier cambio se puede contactar con
                            nuestro equipo.</label>
                    </div>

                    <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                        <button wire:click='stepFour()' class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                            Guardar y continuar
                        </button>
                    </div>
                </div>

                {{-- final --}}
                <div class="flex flex-col justify-center items-center flex-1 p-20 space-y-16" x-cloak
                    x-show="curren_page_step === 5">
                    <div class="bg-[#b6f4c0] h-52 w-96 flex p-4 space-x-5">
                        @svg('heroicon-s-check-circle', 'w-24 h-24')
                        <div class="flex flex-col space-y-4">
                            <label class="text-xl flex justify-center text-center">Gracias por registrarte como vendedor
                                de
                                Buhogt.</label>
                            <label>Estaremos revisando tu solictitud, y te estaremos contactando por medio de correo en
                                las
                                proximas 48 horas.</label>
                        </div>
                    </div>

                    <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                        <button wire:click='irAlaTienda()'
                            class="bg-[#272B60] lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                            Ir a la tienda
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
</div>