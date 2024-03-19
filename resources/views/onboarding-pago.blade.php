@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <!-- end navbar -->

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

    <main class="max-w-7xl mx-auto mt-[10dvh] xl:px-0 px-4 min-h-[50dvh]">
        <!-- start steps -->
        <section class="flex justify-start lg:gap-10 gap-3 items-center">

            <div class="flex md:flex-row flex-col-reverse items-center md:text-start text-center md:gap-5 sm:gap-2 gap-1 lg:flex-none lg:justify-start justify-center flex-1"
                id="step-1">
                <div class="w-12 h-12 rounded-full bg-blue-950 text-white grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="m11.25 11.25l.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0m-9-3.75h.008v.008H12z" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1 min-h-[65px] md:text-base text-xs">
                    <span class="text-sm text-gray-500">Paso 1.</span>
                    <span class="font-semibold">Información de envío</span>
                </div>
            </div>

            <hr class="w-16 border border-black ">

            <div class="flex md:flex-row flex-col-reverse items-center md:text-start text-center md:gap-5 sm:gap-2 gap-1 lg:flex-none lg:justify-start justify-center flex-1 "
                id="step-2">
                <div class="w-12 h-12 rounded-full bg-cyan-500 text-white grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1 min-h-[65px] md:text-base text-xs">
                    <span class="text-sm text-gray-500">Paso 2.</span>
                    <span class="font-semibold">Datos de pago</span>
                </div>
            </div>

            <hr class="w-16 border border-black">

            <div class="flex md:flex-row flex-col-reverse items-center md:text-start text-center md:gap-5 sm:gap-2 gap-1 lg:flex-none lg:justify-start justify-center flex-1 "
                id="step-3">
                <div class="w-12 h-12 rounded-full bg-cyan-500 text-white grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0c1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659c-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1 min-h-[65px] md:text-base text-xs">
                    <span class="text-sm text-gray-500">Paso 3.</span>
                    <span class="font-semibold">Pago exitoso</span>
                </div>
            </div>

        </section>
        <!-- end steps -->

        <hr class="mt-5 mb-10">

        <section class="md:grid grid-cols-2 flex flex-col-reverse md:gap-28 gap-16">

            <!-- start formulario paso 1 (información de envió) -->
            <form id="section-step-1" class="flex flex-col gap-5">
                <span class="font-bold text-3xl">Nombre y dirección</span>
                <div class="flex flex-col gap-2">
                    <label for="name" class="w-auto">Nombre</label>
                    <input name="name" type="text" placeholder="Coloca acá tu nombre"
                        class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="3" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="lastName" class="w-auto">Apellido(s)</label>
                    <input name="lastName" type="text" placeholder="Coloca acá tu apellido"
                        class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="3" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone" class="w-auto">Número telefónico</label>
                    <input name="phone" type="text" placeholder="0000-0000"
                        class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="8" maxlength="10"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="address" class="w-auto">Dirección</label>
                    <input name="address" type="text" placeholder="Coloca tu dirección exacta"
                        class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="8" required>
                </div>
                <div class="grid md:grid-cols-2 gap-3 grid-cols-1">
                    <div class="flex flex-col gap-2 flex-1">
                        <label for="postCode" class="w-auto">Código postal</label>
                        <input name="postCode" type="text" placeholder="00000"
                            class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 flex-1 w-full rounded-lg" minlength="5"
                            maxlength="5" required>
                    </div>
                    <div class="flex flex-col gap-2 flex-1">
                        <label for="city" class="w-auto">Ciudad</label>
                        <input name="city" type="text" placeholder="Guatemala"
                            class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 flex-1 w-full rounded-lg"
                            minlength="2" required>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-3 grid-cols-1">
                    <div class="flex flex-col gap-2 flex-1">
                        <label for="department" class="w-auto">Departamento</label>
                        <select name="department" class="p-3 border border-gray-400 px-4 bg-white h-full w-full rounded-lg">
                            <option value="central-java">Central Java</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 flex-1">
                        <label for="township" class="w-auto">Municipio</label>
                        <input name="township" type="text" placeholder="Guatemala"
                            class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="3" required>
                    </div>
                </div>

                <div id="error-form-first-step"
                    class="bg-red-600/20 border border-red-500 text-red-500 p-2 font-bold hidden">
                </div>

                <button class="bg-primary p-4 hover:bg-blue-950 text-white text-xl uppercase mt-5 rounded-lg">Continuar</button>
            </form>
            <!-- end formulario de envió -->

            <!-- start formulario paso 2 (datos de cobro) -->
            <div id="section-step-2" class="flex flex-col gap-8 hidden">
                <span class="text-3xl">Escoge tu pago</span>

                <div class="relative">
                    <div id="dropdownRadioButton" data-dropdown-toggle="dropdown-paid"
                        class=" text-center flex justify-between items-center w-full border border-black p-5 rounded-lg"
                        type="button">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5" />
                            </svg>
                            <span id="type-paid-label">Tipo de pago </span>
                            <svg xmlns="http://www.w3.org/2000/svg" id="icon-check" class="w-5 h-5 hidden"
                                viewBox="0 0 16 16">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14m3.844-8.791a.75.75 0 0 0-1.187-.918l-3.7 4.79l-1.65-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </div>

                    <!-- Dropdown menu -->
                    <div id="dropdown-paid" class="z-10 hidden w-full bg-white text-black border border-black shadow rounded-lg">
                        <ul class=" text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                            <li>
                                <label
                                    class="text-sm font-medium text-gray-900 flex items-center gap-2 p-5 hover:bg-gray-200 rounded-lg">
                                    <input type="radio" name="type-paid" value="tarjeta">
                                    Tarjeta de crédito o débito
                                </label>
                            </li>
                            <li>
                                <label
                                    class="text-sm font-medium text-gray-900 flex items-center gap-2 p-5 hover:bg-gray-200">
                                    <input type="radio" name="type-paid" value="deposito">
                                    Deposito bancario (v2)
                                </label>
                            </li>
                        </ul>
                    </div>


                </div>

                <span id="title_details" class="text-3xl hidden"> Detalle del pago</span>

                <section id="details" class="hidden">
                    <!-- campos - opción " tarjeta de crédito o débito" -->
                    <div id="tarjeta" class="flex flex-col gap-8">
                        <div class="flex flex-col gap-2">
                            <label for="cardName" class="w-auto">Nombre</label>
                            <input id="cardName" name="cardName" type="text" placeholder="Coloca acá tu nombre"
                                class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="5"
                                required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="cardNumber" class="w-auto">Número de la tarjeta</label>
                            <input id="cardNumber" name="cardNumber" type="number" placeholder="000 000 000 000 000"
                                class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg" minlength="20"
                                maxlength="20" required>
                        </div>
                        <div class="grid md:grid-cols-2 gap-3 grid-cols-1">
                            <div class="flex flex-col gap-2 flex-1">
                                <label for="cardYear" class="w-auto">MM/YY</label>
                                <input id="cardYear" name="cardYear" type="text" placeholder="00/2025"
                                    class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 flex-1 w-full rounded-lg"
                                    minlength="4" required>
                            </div>
                            <div class="flex flex-col gap-2 flex-1">
                                <label for="cardCvv" class="w-auto">CVV</label>
                                <input id="cardCvv" name="cardCvv" type="number" placeholder="123"
                                    class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 flex-1 w-full rounded-lg"
                                    minlength="3" minlength="3" required>
                            </div>
                        </div>
                    </div>

                    <!-- campos - opción "deposito bancario (v2)" -->
                    <div id="deposito" class="hidden flex flex-col gap-8">
                        <div class=" flex flex-col gap-2">
                            <label for="name" class="w-auto">Nombre</label>
                            <input id="name" name="name" type="text" placeholder="Coloca acá tu nombre"
                                class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="name" class="w-auto">Banco</label>

                            <div class="relative">
                                <div id="dropdown-banco-name" data-dropdown-toggle="dropdown-radio-banco"
                                    class="text-center flex justify-between items-center w-full border border-black p-3 rounded-lg"
                                    type="button">
                                    <div class="flex items-center gap-2">
                                        <span id="banco-label">Banco</span>
                                    </div>
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </div>

                                <!-- Dropdown menu -->
                                <div id="dropdown-radio-banco"
                                    class="z-10 hidden w-full bg-white text-black border border-black shadow rounded-lg">
                                    <ul class=" text-sm text-gray-700" aria-labelledby="dropdown-banco-name">
                                        <li>
                                            <label
                                                class="text-sm font-medium text-gray-900 flex items-center gap-2 p-3 hover:bg-gray-200">
                                                <input type="radio" name="banco" value="banco-industrial">
                                                Banco Industrial
                                            </label>
                                        </li>
                                        <li>
                                            <label
                                                class="text-sm font-medium text-gray-900 flex items-center gap-2 p-3 hover:bg-gray-200">
                                                <input type="radio" name="banco" value="banco-banrural">
                                                Banco Banrural
                                            </label>
                                        </li>
                                        <li>
                                            <label
                                                class="text-sm font-medium text-gray-900 flex items-center gap-2 p-3 hover:bg-gray-200">
                                                <input type="radio" name="banco" value="banco-trabajadore">
                                                Banco de trabajadore
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="bankNumber" class="w-auto">Numero de banco</label>
                            <input id="bankNumber" name="bankNumber" type="text" placeholder="000102010000020"
                                class=" placeholder:text-gray-700 p-3 border border-gray-400 px-5 rounded-lg">
                        </div>
                    </div>

                </section>

                <label class="group flex items-center gap-3 hidden" id="save_details">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden group-has-[:checked]:block"
                        viewBox=" 0 0 16 16">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14m3.844-8.791a.75.75 0 0 0-1.187-.918l-3.7 4.79l-1.65-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="w-5 h-5 border border-black rounded-full group-has-[:checked]:hidden"></div>
                    Guardar para futuras compras
                    <input type="checkbox" class="hidden" id="checkboxSaveData">
                </label>

                <hr>

                <div class="flex justify-between items-center">
                    <span class="text-3xl"> Dirección de Entrega</span>
                    <a href="" class="text-gray-500 hover:underline">Editar</a>
                </div>
                <div class="*:text-gray-500 flex flex-col gap-2 *:text-lg *:font-light">
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Officia aspernatur maiores quibusdam?</p>
                    <p>Animi unde dolorum quidem?</p>
                    <p>Mollitia nemo quia debitis.</p>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-3xl"> Factura</span>
                    <a href="" class="text-gray-500 hover:underline">Editar</a>
                </div>
                <div class="*:text-gray-500 flex flex-col gap-2 *:text-lg *:font-light">
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Officia aspernatur maiores quibusdam?</p>
                    <p>Animi unde dolorum quidem?</p>
                </div>

                <div id="error-form-second-step"
                    class="bg-red-600/20 border border-red-500 text-red-500 p-2 font-bold hidden"></div>

                <div class="flex gap-5 flex-wrap">
                    <button id="btn_back_step"
                        class="flex-1 bg-transparent hover:bg-gray-200 p-4 uppercase flex justify-center gap-5 items-center rounded-lg"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10"
                                clip-rule="evenodd" />
                        </svg>
                        Regresar
                    </button>
                    <button id="btn_paid" class="flex-1 bg-blue-900 text-white hover:bg-blue-950 p-4 uppercase rounded-lg">
                        Pagar
                    </button>
                </div>
            </div>
            <!-- end formulario de envió -->

            <!-- start sección paso 3 -->
            <section id="section-step-3" class="h-full hidden">
                <b class="text-4xl mb-10 block text-center">Gracias por tu compra</b>

                <div class="bg-green-400/40 min-h-[40dvh] place-items-center p-10 grid grid-cols-[auto,1fr] gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14m3.844-8.791a.75.75 0 0 0-1.187-.918l-3.7 4.79l-1.65-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-xl">Gracias por tu compra, esperamos que tu experiencia en <b>buhogt</b> hay sido
                        satisfactoria. <br> Te
                        esperamos ver otra vez</span>
                </div>

                <button class="uppercase bg-blue-900 hover:bg-blue-950 text-white w-fit p-5 px-8 mt-16 rounded-lg">ir a mi
                    usuario</button>
            </section>
            <!-- end sección paso 3 -->

            <!-- start orden de pago para (paso 1 y paso 2) -->
            <section id="orden-pago-general" class="sm:w-3/4 w-full mx-auto lg:sticky lg:top-5 h-fit">
                <span class="text-3xl ">Orden</span>
                <aside class="my-8">
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Subtotal</span>
                        <b>Q119.13</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Impuestos</span>
                        <b>Q90</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Envió</span>
                        <b>Q10</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4 text-2xl">
                        <b>Total</b>
                        <b>Q219.32</b>
                    </div>
                </aside>

                <aside class="mt-10">
                    <div class="md:block hidden">
                        <div class="grid grid-cols-[auto,1fr] gap-5 items-center">
                            <img src="/images/products/product-1.png"
                                class="xl:w-[120px] w-[100px] xl:h-[120px] h-[100px] object-cover rounded"
                                alt="image" />
                            <div class="flex flex-col gap-3">
                                <span class="text-gray-500 text-lg"> Levis, jean</span>
                                <span class="text-xl"> Q219.32</span>
                            </div>
                        </div>
                    </div>

                    <div id="accordion-collapse" data-accordion="collapse" class="md:hidden block">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-gray-800 border border-gray-500  gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Productos seleccionados</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden py-8"
                            aria-labelledby="accordion-collapse-heading-1">

                            <div class="grid grid-cols-[auto,1fr] gap-5 items-center">
                                <img src="/images/products/product-1.png"
                                    class="aspect-square sm:w-[100px] w-[85px] sm:h-[100px] h-[85px] object-cover rounded"
                                    alt="image" />
                                <div class="flex flex-col gap-3">
                                    <span class="text-gray-500 text-lg"> Levis, jean</span>
                                    <span class="text-xl"> Q219.32</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex justify-between items-center gap-2 mt-10">
                        <span class="text-gray-500">Tiempo de entrega</span>
                        <b>1 - 4 días</b>
                    </div>
                </aside>

            </section>
            <!-- end orden de pago para (paso 1 y paso 2) -->

            <!-- start orden de pago para (paso 3) -->
            <section id="orden-pago-step-3" class="hidden sm:w-3/4 w-full mx-auto h-fit">

                <span class="text-4xl font-bold">N° orden: NP50X</span>

                <hr class="mt-5">

                <aside class="mt-10">
                    <div class="md:block hidden">
                        <div class="grid grid-cols-[auto,1fr] gap-5 items-center">
                            <img src="/images/products/product-1.png"
                                class="xl:w-[120px] w-[100px] xl:h-[120px] h-[100px] object-cover rounded"
                                alt="image" />
                            <div class="flex flex-col gap-3">
                                <span class="text-gray-500 text-lg"> Levis, jean</span>
                                <span class="text-xl"> Q219.32</span>
                            </div>
                        </div>
                    </div>

                    <div id="accordion-products-paid" data-accordion="collapse" class="md:hidden block">
                        <h2 id="accordion-collapse-heading-products-paid">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-gray-800 border border-gray-500  gap-3"
                                data-accordion-target="#accordion-body-products-paid" aria-expanded="false"
                                aria-controls="accordion-body-products-paid">
                                <span>Productos seleccionados</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-products-paid" class="hidden py-8"
                            aria-labelledby="accordion-collapse-heading-products-paid">

                            <div class="grid grid-cols-[auto,1fr] gap-5 items-center">
                                <img src="/images/products/product-1.png"
                                    class="aspect-square sm:w-[100px] w-[85px] sm:h-[100px] h-[85px] object-cover rounded"
                                    alt="image" />
                                <div class="flex flex-col gap-3">
                                    <span class="text-gray-500 text-lg"> Levis, jean</span>
                                    <span class="text-xl"> Q219.32</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>

                <aside class="my-8">
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500 underline">Número de orden</span>
                        <b>NP50X</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Subtotal</span>
                        <b>Q119.13</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Estimado de entrega</span>
                        <b>1-4 Dias</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Impuestos</span>
                        <b>Q90</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4">
                        <span class="text-gray-500">Envió</span>
                        <b>Q10</b>
                    </div>
                    <div class="flex justify-between gap-2 items-end mt-4 text-2xl">
                        <b>Total</b>
                        <b>Q219.32</b>
                    </div>
                </aside>

            </section>
            <!-- end orden de pago para (paso 3) -->
        </section>
    </main>

    <!-- star artículos similares -->
    <section class="max-w-7xl mx-auto mb-10 xl:px-0 px-4 mt-32 mb-[20dvh]">
        <span class="text-3xl mb-10 block sm:text-start text-center">Otros productos que te pueden interesar</span>

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
                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>
            <button data-next-btn
                class="absolute -right-0 top-[35%] transform -translate-y-1/2 bg-white hover:bg-gray-200 hover:border-black w-fit block border px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h border-6" viewBox="0 0 24 24">
                    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </button>
            <!-- end botones Next y Previous -->
        </div>
        <!-- end productos -->

    </section>
    <!-- end artículos similares -->

    <script>
        const $stepOne = document.querySelector('#step-1')
        const $stepTwo = document.querySelector('#step-2')
        const $stepThree = document.querySelector('#step-3')

        const $form_first_step = document.getElementById('section-step-1');
        const $form_second_step = document.getElementById('section-step-2');
        const $section_third_step = document.getElementById('section-step-3');

        const goToSecondStep = () => {
            $stepTwo.children[0].classList.add('!bg-blue-900')
            $form_first_step.classList.add('hidden')
            $form_second_step.classList.remove('hidden')
            window.scrollTo({
                top: 150,
                behavior: 'smooth'
            })
        }

        const goToThirdStep = () => {
            $stepThree.children[0].classList.add('!bg-blue-900')
            $form_first_step.classList.add('hidden')
            $form_second_step.classList.add('hidden')
            $section_third_step.classList.remove('hidden')
            // eliminar de sessionStorage, los datos del formulario del paso 1
            sessionStorage.removeItem('step-1')
            window.scrollTo({
                top: 160,
                behavior: 'smooth'
            })
        }

        const showErrors = (selector, $error_container, message) => {
            const $input = document.querySelector(selector)

            $input.classList.add('border-red-500', 'border-2')

            $error_container.classList.remove('hidden')
            $error_container.textContent = message

            $input.addEventListener('focus', () => {
                $input.classList.remove('border-red-500', 'border-2')
                $error_container.classList.add('hidden')
                $error_container.textContent = ''
            })
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Obtener data previamente almacenada, si es que existe, para evitar volver a completar el paso 1
            const isFirstStepCompleted = sessionStorage.getItem('step-1')
            if (isFirstStepCompleted) goToSecondStep()
        })

        // formulario paso 1
        $form_first_step.addEventListener('submit', e => {
            e.preventDefault()

            const data = Object.fromEntries(new FormData(e.target))

            // validaciones formulario paso 1
            let errors = 0
            const $error_first_form = document.getElementById('error-form-first-step')

            for (const [key, value] of Object.entries(data)) {
                if (value.trim() === '') {
                    showErrors(`[name="${key}"]`, $error_first_form, 'Todos lo campos son obligatorios')
                    errors++
                }
                if (key === 'postCode' && Number.isNaN(+value)) {
                    showErrors(`[name="${key}"]`, $error_first_form, 'Código Postal debe ser un número')
                    errors++
                }
            }

            if (errors === 0) {
                sessionStorage.setItem('step-1', JSON.stringify(data))
                goToSecondStep()
            }

        })

        // formulario paso 2
        document.getElementById('btn_paid').addEventListener('click', () => {

            // Validar que se haya seleccionado un tipo de pago.
            let isAnyTypePaidSelected = false
            let optionSelected = null

            document.querySelectorAll('#dropdown-paid input[name="type-paid"]').forEach(el => {
                if (el.checked) {
                    isAnyTypePaidSelected = true
                    optionSelected = el.value
                    return
                }
            })

            const $error_second_form = document.getElementById('error-form-second-step')

            if (!isAnyTypePaidSelected) {
                $error_second_form.classList.remove('hidden')
                $error_second_form.textContent = 'Selecciona un tipo de pago antes de continuar'
                return
            }

            optionSelected === 'tarjeta' ? payByCard() : payByTransference()

        })

        const payByCard = () => {
            const $container = document.getElementById('tarjeta')

            const $error_second_form = document.getElementById('error-form-second-step')
            let errors = 0

            const dataToSave = {}

            // validaciones básicas
            $container.querySelectorAll('input').forEach(input => {
                if (input.value === '') {
                    showErrors(`#${input.id}`, $error_second_form, 'Todos los campos son obligatorios')
                    errors++
                    return
                }

                if (input.id === 'cardName' && input.value.length <= 1) {
                    showErrors(`#${input.id}`, $error_second_form,
                        'Ingresa un nombre valido (al menos dos caracteres)')
                    errors++
                    return
                }

                if (input.id === 'cardNumber' && (input.value.length <= 10 || Number.isNaN(+input.value))) {
                    showErrors(`#${input.id}`, $error_second_form, 'Ingresa un número de tarjeta valido')
                    errors++
                    return
                }

                if (input.id === 'cardYear' && (input.value.length !== 5 || Number.isNaN(+input.value.split('/')
                        .join('')))) {
                    showErrors(`#${input.id}`, $error_second_form,
                        'Ingresa un año de vencimiento valida con el formato (MM/YY)')
                    errors++
                    return
                }

                if (input.id === 'cardCvv' && (input.value.length !== 3 || Number.isNaN(+input.value))) {
                    showErrors(`#${input.id}`, $error_second_form, 'Ingresa un CVV valido')
                    errors++
                    return
                }

                dataToSave[input.id] = input.value
            })

            if (errors === 0) {
                // valor del checkbox que da permiso para guardar los datos ingresados
                const isSavingData = document.getElementById('checkboxSaveData').checked

                if (isSavingData) {
                    // la constante "dataToSave" contiene los datos de la tarjeta
                    // sessionStorage.setItem('card-info', JSON.stringify(dataToSave))
                    console.log('Datos guardados para tu siguiente compra')
                }

                goToThirdStep()
            }
        }

        const payByTransference = () => {

            const $container = document.getElementById('deposito')

            let errors = 0
            const $error_second_form = document.getElementById('error-form-second-step')

            const dataToSave = {}

            let isAnyBankSelected = false

            document.querySelectorAll('#dropdown-radio-banco input[name="banco"]').forEach(el => {
                if (el.checked) {
                    isAnyBankSelected = true
                    dataToSave.bank = el.value
                    return
                }
            })

            if (!isAnyBankSelected) {
                showErrors('#dropdown-banco-name', $error_second_form, 'Selecciona un banco')
                errors++
            }

            $container.querySelectorAll('input').forEach(input => {
                if (input.value === '') {
                    showErrors(`#${input.id}`, $error_second_form, 'Todos los campos son obligatorios')
                    errors++
                    return
                }

                if (input.id === 'name' && input.value.length <= 1) {
                    showErrors(`#${input.id}`, $error_second_form,
                        'Ingresa un nombre valido (al menos dos caracteres)')
                    errors++
                    return
                }

                if (input.id === 'bankNumber' && (input.value.length <= 10 || Number.isNaN(+input.value))) {
                    showErrors(`#${input.id}`, $error_second_form, 'Ingresa un número banco valido')
                    errors++
                    return
                }

                dataToSave[input.id] = input.value
                delete dataToSave[""]
            })

            if (errors === 0) {
                // valor del checkbox que da permiso para guardar los datos ingresados
                const isSavingData = document.getElementById('checkboxSaveData').checked
                if (isSavingData) {
                    // la constante "dataToSave" contiene los datos de la tarjeta
                    // sessionStorage.setItem('card-info', JSON.stringify(dataToSave))
                    console.log('Datos guardados para tu siguiente compra')
                }

                goToThirdStep()
            }
        }

        // regresar al primer paso, y recuperar los datos de sessionStorage.
        document.getElementById('btn_back_step').addEventListener('click', () => {
            $stepTwo.children[0].classList.remove('!bg-blue-900')
            $form_first_step.classList.remove('hidden')
            $form_second_step.classList.add('hidden')
            window.scrollTo({
                top: 150,
                behavior: 'smooth'
            })

            const isFirstStepCompleted = sessionStorage.getItem('step-1')
            if (isFirstStepCompleted) {
                const data = JSON.parse(isFirstStepCompleted)

                for (const [key, value] of Object.entries(data)) {
                    $form_first_step.querySelector(`[name="${key}"]`).value = value
                }
            }

        })

        // paso 2 - dropdown - tipo de pago
        document.querySelectorAll('#dropdown-paid input[name="type-paid"]').forEach(el => {
            el.addEventListener('input', (e) => {
                document.querySelector('#type-paid-label').textContent = e.target.parentElement.textContent;

                document.querySelector('#title_details').classList.remove('hidden');
                document.querySelector('#details').classList.remove('hidden');
                document.querySelector('#save_details').classList.remove('hidden');

                if (e.target.checked) {
                    document.querySelector('#icon-check').classList.remove('hidden')
                    // remover mensajes de error si existen
                    document.getElementById('error-form-second-step').textContent = ''
                    document.getElementById('error-form-second-step').classList.add('hidden')
                }

                // Ocultar todos los formularios, excepto el que coincida con el tipo de pago
                document.querySelectorAll('#details > div').forEach($e => {
                    $e.id === e.target.value ? $e.classList.remove('hidden') : $e.classList.add(
                        'hidden')
                })
            })
        })

        // paso 2 - dropdown - tipo de banco
        document.querySelectorAll('#dropdown-radio-banco input[name="banco"]').forEach(el => {
            el.addEventListener('input', (e) => {
                document.querySelector('#banco-label').textContent = e.target.parentElement.textContent
                document.querySelector('#dropdown-banco-name').classList.remove('border-red-500',
                    'border-2')
            })
        })
    </script>

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
          <img src="/images/products/${img}" class="w-full h-full object-cover rounded" alt="image" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
