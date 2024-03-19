@extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


@section('content')
    <main class="xl:px-0 min-h-[50dvh] border border-gray-300 my-10 max-w-7xl mx-auto">
        <section class=" grid md:grid-cols-[290px,1fr] grid-cols-1">
            <aside id="sidebar-userdash" class="sidebar-userdash border-r  border-gray-300 p-6 md:block hidden">

                <header class="flex justify-center items-center flex-col text-center mb-5 gap-2">
                    @php
                        $user = Auth::user();
                        $profilePhotoUrl = $user->profile_photo_path
                            ? Storage::url($user->profile_photo_path)
                            : 'https://ui-avatars.com/api/?name=' .
                                urlencode($user->name) .
                                '&color=7F9CF5&background=EBF4FF';
                    @endphp
                    <img src="{{ $profilePhotoUrl }}" class="w-[100px] h-[100px] object-cover rounded-full" alt="image" />
                    <span class="text-blue-900 font-bold text-lg">{{ Auth::user()->name }}</span>
                </header>

                <div class="flex flex-col gap-3">
                    <button name="profile"
                        class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white bg-primary text-white rounded-lg">Perfil</button>
                    <button name="account"
                        class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Seguridad de
                        la
                        cuenta</button>
                    <button name="cards"
                        class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Tarjetas
                        guardadas</button>
                    <button name="orders"
                        class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Ver
                        pedidos</button>
                    <button name="address"
                        class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Dirección de
                        envió</button>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a href="{{ route('logout') }}"
                            class="flex items-center py-2 px-5 hover:bg-primary rounded-lg hover:text-white"
                            @click.prevent="$root.submit();">

                            {{ __('Cerrar Sesión') }}
                        </a>
                    </form>
                </div>
            </aside>

            <aside id="sidebar-user-dash-movil"
                class="sidebar-userdash md:hidden block border-b border-gray-300 sticky top-0 z-20 shadow-xl shadow-black/10">
                <div id="accordion-user-dash" data-accordion="collapse" class="w-full">
                    <h2 id="accordion-collapse-heading-user-dash">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border gap-3 !border-b !border-black !bg-white rounded-lg"
                            data-accordion-target="#accordion-collapse-body-user-dash" aria-expanded="false"
                            aria-controls="accordion-collapse-body-user-dash">
                            <p class="text-center  flex flex-wrap">
                                <span class="text-blue-900 font-bold md:text-lg text-base">{{ Auth::user()->name }}</span>
                                {{-- <span class="italic !text-gray-500">(User shop)</span> --}}
                            </p>
                            <svg data-accordion-icon class="w-3 h-3 rotate-360 shrink-0" aria-hidden="false"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-user-dash" class="hidden p-3 !bg-gray-100"
                        aria-labelledby="accordion-collapse-heading-user-dash">
                        <div class="flex flex-col gap-2">
                            <button name="profile"
                                class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white bg-primary text-white rounded-lg">Perfil</button>
                            <button name="account"
                                class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Seguridad de la
                                cuenta</button>
                            <button name="cards"
                                class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Tarjetas
                                guardadas</button>
                            <button name="orders"
                                class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Ver
                                pedidos</button>
                            <button name="address"
                                class="btn-sidebar py-2 px-5 text-start hover:bg-primary hover:text-white rounded-lg">Dirección de
                                envió</button>
                        </div>
                        <hr class="block my-5 border">
                        <button class="underline py-2 px-5 hover:bg-primary hover:text-white w-full rounded-lg">Cerrar sesión</button>
                    </div>
                </div>
            </aside>

            <div class="section" id="profile">
                <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Perfil</h6>
                    <span class="block mt-1 text-lg">Información personal</span>
                </header>
                <form class="md:w-[60%] w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <label for="name" class="font-bold ">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Nombre"
                            class="p-3 px-4 border border-black rounded-lg">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="lastName" class="font-bold">Apellido</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Apellidos"
                            class="p-3 px-4 border border-black rounded-lg">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email" class="font-bold ">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="p-3 px-4 border border-black rounded-lg">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="phone" class="font-bold ">Teléfono</label>
                        <input type="email" id="phone" name="phone" placeholder="Teléfono"
                            class="p-3 px-4 border border-black rounded-lg">
                    </div>

                    <button
                        class="p-3 lg:mt-5 mt-5 bg-primary hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto rounded-lg">Guardar</button>
                </form>
            </div>

            <div id="account" class="hidden section">
                <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Cuenta</h6>
                    <span class="block mt-1 text-lg">Edite la configuración de su cuenta</span>
                </header>
                <form class="md:w-[60%] w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <label for="currentPassword" class="font-bold ">Contraseña</label>
                        <input type="password" id="currentPassword" name="currentPassword"
                            placeholder="Introducir contraseña actual" class="p-3 px-4 border border-black rounded-lg">
                    </div>
                    <div class="flex flex-col gap-3">
                        <input type="password" id="newPassword" name="newPassword"
                            placeholder="Ingrese nueva contraseña" class="p-3 px-4 border border-black rounded-lg">
                    </div>
                    <div class="flex flex-col gap-3">
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Reescriba nueva contraseña" class="p-3 px-4 border border-black rounded-lg">
                    </div>

                    <button
                        class="p-3 lg:mt-5 mt-5 bg-primary hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto rounded-lg">Cambiar
                        contraseña</button>
                </form>

                <header class="border-b border-t border-gray-300 p-3 md:py-5 mt-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Privacidad</h6>
                    <span class="block mt-1 text-lg">Modifique su configuración de privacidad aquí</span>
                </header>

                <form class="md:w-[60%] w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">
                    <span class="font-bold">Configuración de la pagina de perfil</span>
                    <div class="group flex gap-3 items-center">
                        <input type="checkbox" id="privacyNotice" name="privacyNotice"
                            placeholder="Introducir contraseña actual" class="p-3 px-4 border border-black hidden">
                        <div class="w-5 h-5 border border-black border-2 grid place-items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-3 h-3 scale-[1.8] group-has-[:checked]:block hidden" viewBox="0 0 16 16">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353l4.493-6.74a.75.75 0 0 1 1.04-.207"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <label for="privacyNotice" class="cursor-pointer">Mostrar tu perfil a los usuarios</label>
                    </div>

                    <button
                        class="p-3 lg:mt-3 mt-5 bg-primary hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto rounded-lg">Guardar</button>
                </form>
            </div>

            <div id="orders" class="hidden section">
                <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Pedidos</h6>
                    <span class="block mt-1 text-lg">Encuentra mas detalles sobre tus pedidos</span>
                </header>
                <div class="w-full p-4 flex flex-col gap-20" x-data="{ items: [1, 1] }">

                    <template x-for="item in items">
                        <div class="border border-gray-300 p-4 px-5">
                            <header
                                class="md:flex hidden flex-wrap gap-5 items-center justify-between border-b border-gray-300 pb-3 px-2">
                                <div class="grid grid-cols-[repeat(3,auto)] gap-5 place-items-center items-start">
                                    <p class="flex flex-col gap-5">
                                        <span class="text-xl font-bold">Pedido realizado</span>
                                        <span>12 de noviembre 2023</span>
                                    </p>
                                    <p class="flex flex-col gap-5">
                                        <span class="text-xl font-bold">Total</span>
                                        <span>Q765.99</span>
                                    </p>
                                    <p class="flex flex-col gap-5">
                                        <span class="text-xl font-bold">Enviar a</span>
                                        <span>Diego Lopez / 10837</span>
                                    </p>
                                </div>

                                <div class="grid grid-cols-[repeat(3,auto)] gap-5 place-items-center">
                                    <p class="flex flex-col gap-5">
                                        <span class="text-xl font-bold">Pedido realizado</span>
                                        <a href="" class="hover:underline">Ver detalles del pedido</a>
                                    </p>
                                    <div class="w-[1px] h-full pb-[4px] grid content-end grid-cols-1">
                                        <div class="bg-black w-[2px] h-[16px]"></div>
                                    </div>
                                    <p class="flex flex-col gap-5">
                                        <span class="text-xl font-bold">No. 8374920</span>
                                        <a href="" class="hover:underline">Ver recibo</a>
                                    </p>
                                </div>
                            </header>

                            <header class="md:hidden block">
                                <div id="accordion-order-info" data-accordion="collapse" class="w-full">
                                    <h2 id="accordion-collapse-heading-order-info">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-2 font-medium text-gray-500 border gap-3 !border-b !border-gray-400 !bg-white"
                                            data-accordion-target="#accordion-collapse-body-order-info"
                                            aria-expanded="false" aria-controls="accordion-collapse-body-order-info">
                                            <p class="text-center  flex flex-wrap">
                                                <span
                                                    class="text-black font-bold md:text-lg text-base text-center">Información
                                                    del
                                                    pedido</span>
                                            </p>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-360 shrink-0"
                                                aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-order-info" class="hidden p-3 !bg-gray-100 border"
                                        aria-labelledby="accordion-collapse-heading-order-info">
                                        <div class="flex flex-col gap-2">
                                            <p class="flex flex-col gap-1">
                                                <span class="font-bold text-lg">Pedido realizado</span>
                                                <span>12 noviembre 2023</span>
                                            </p>
                                            <p class="flex flex-col gap-1">
                                                <span class="font-bold text-lg">Total</span>
                                                <span>Q765.99</span>
                                            </p>
                                            <p class="flex flex-col gap-1">
                                                <span class="font-bold text-lg">Enviar a</span>
                                                <span>Diego Lopez / 10837</span>
                                            </p>
                                            <hr class="border border-black/20">
                                            <p class="flex flex-col gap-1">
                                                <span class="font-bold text-lg">Pedido realizado</span>
                                                <a href="" class="underline">Ver detalles del pedido</a>
                                            </p>
                                            <p class="flex flex-col gap-1">
                                                <span class="font-bold text-lg">No. 8374920</span>
                                                <a href="" class="underline">Ver recibo</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <div class="mt-10">
                                <div class="px-2">
                                    <div class="flex md:flex-nowrap flex-wrap items-end lg:gap-16 md:gap-8 gap-3">
                                        <span class="font-semibold md:text-3xl text-2xl">Pedido</span>
                                        <span class="md:text-2xl text-lg">12/11/2023</span>
                                        <span class="md:text-2xl text-lg">Q765.99</span>
                                    </div>
                                    <p class="block mt-2">
                                        <span>Zapatos puma blancos</span>
                                        <span>|</span>
                                        <span>diseño xcv</span>
                                    </p>
                                </div>

                                <div class="lg:grid flex flex-wrap grid-cols-[1fr,40%] gap-5 items-start mt-10">
                                    <div
                                        class="flex md:flex-nowrap flex-wrap gap-8 md:justify-start justify-center items-center">
                                        <img src=" https://placehold.co/200x210" class="w-[170px] h-[170px] object-cover"
                                            alt="image" />
                                        <div class="flex flex-col gap-1">
                                            <h3 class="text-3xl font-bold">Pumas blancos</h3>
                                            <p>
                                                <span>Zapatos puma blancos</span>
                                                <span>|</span>
                                                <span>diseño xcv</span>
                                            </p>
                                            <button
                                                class="px-4 py-2 bg-primary mt-4 hover:bg-blue-950 text-white md:w-fit w-full rounded-lg">Comprar
                                                nuevamente</button>
                                        </div>
                                    </div>

                                    <div class="flex min-w-[200px] flex-col flex-1 gap-3 justify-center items-center">
                                        <button
                                            class=" lg:w-[50%] w-full p-2 bg-transparent border border-blue-900 hover:bg-gray-200 text-blue-900 rounded-lg">Contactar
                                            al vendedor</button>
                                        <button
                                            class=" lg:w-[50%] w-full p-2 bg-transparent border border-blue-900 hover:bg-gray-200 text-blue-900 rounded-lg">Escribir
                                            una opinion</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </template>

                </div>
            </div>

            <div id="address" class="hidden section">
                <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Direcciones de envió</h6>
                    <span class="block mt-1 text-lg">Edite su dirección de hogar o de oficina</span>
                </header>
                <div class="md:w-[60%] w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">
                    <div class="mt-8">
                        <span class="font-bold text-lg">Hogar</span>
                        <div class="text-gray-600 p-5 flex flex-col gap-2 text-lg">
                            <p>Calle 5-4 avenida, zona 1, San Lucas Sacatepequez</p>
                            <p>San Lucas Sacatepequez</p>
                            <p>Breve descripción de la propiedad</p>
                            <p>+502 59876-3477</p>
                            <div class="flex gap-10 mt-5">
                                <a href=""
                                    class="hover:text-blue-900 text-blue-800 underline font-semibold">Editar</a>
                                <a href=""
                                    class="hover:text-blue-900 text-blue-800 underline font-semibold">Eliminar</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-lg">Oficina</span>
                        <div class="text-gray-600 p-5 flex flex-col gap-2 text-lg">
                            <p>Introducir contraseña actual</p>
                        </div>
                    </div>

                    <button
                        class="p-3 mt-5 bg-primary hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto rounded-lg">Agregar
                        dirección</button>
                </div>
            </div>

            <div id="cards" class="hidden section">
                <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
                    <h6 class="text-2xl font-bold">Tarjetas guardadas</h6>
                    <span class="block mt-1 text-lg">Los datos de las tarjetas osn guardadas unicamente por Buhogt</span>
                </header>
                <div class="lg:w-[60%] md:w-[80%]  w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">

                    <b class="text-gray-800">Tu tarjeta</b>
                    <div class="flex flex-col gap-5 lg:flex-nowrap flex-wrap" x-data="{ items: [7804, 9742] }">
                        <template x-for="item in items">
                            <div
                                class="border border-black/70 p-4 flex justify-between items-center gap-3 sm:flex-nowrap flex-wrap text-center rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[51px] h-[22px]" viewBox="0 0 256 114">
                                    <path fill="#1A1F71"
                                        d="M97.197 1.46L63.68 81.418H41.814L25.32 17.604c-1-3.921-1.869-5.364-4.912-7.022C15.434 7.88 7.22 5.353 0 3.781L.487 1.46h35.204c4.48 0 8.514 2.983 9.54 8.148l8.715 46.273L75.462 1.46zm29.56 0l-17.103 79.958H88.966L106.071 1.46zm56.116 53.852c.086-21.099-29.174-22.27-28.983-31.697c.07-2.866 2.8-5.917 8.776-6.697c2.96-.383 11.138-.688 20.401 3.58l3.624-16.966C181.714 1.732 175.309 0 167.342 0c-20.45 0-34.835 10.862-34.95 26.428c-.134 11.514 10.275 17.931 18.103 21.766c8.063 3.916 10.767 6.433 10.73 9.933c-.058 5.365-6.44 7.74-12.373 7.828c-10.404.165-16.435-2.812-21.246-5.053l-3.755 17.528c4.84 2.218 13.76 4.145 22.999 4.243c21.74 0 35.959-10.737 36.023-27.36m54 26.106H256L239.29 1.46h-17.647c-3.98 0-7.325 2.31-8.809 5.861l-31.04 74.097h21.723l4.309-11.944h26.54zm-23.09-28.329l10.892-30.027l6.257 30.027zm-60.55 50.338h-8.406v7.823h9.402v2.352h-12.234V91.9h11.752v2.352h-8.92v6.857h8.405zm5.339-12.686h2.832v22.86h-2.832zm9.978 15.583c.064 3.833 2.48 5.41 5.344 5.41c2.03 0 3.285-.354 4.317-.804l.514 2.029c-.998.45-2.736.997-5.217.997c-4.796 0-7.661-3.187-7.661-7.889c0-4.7 2.767-8.372 7.308-8.372c5.12 0 6.44 4.445 6.44 7.31c0 .579-.033.997-.098 1.32zm8.307-2.028c.033-1.77-.74-4.572-3.928-4.572c-2.898 0-4.122 2.608-4.348 4.572zm18.154 8.758c-.74.355-2.383.903-4.475.903c-4.701 0-7.76-3.188-7.76-7.954c0-4.798 3.283-8.307 8.371-8.307c1.674 0 3.155.417 3.928.837l-.642 2.157c-.679-.354-1.741-.742-3.286-.742c-3.575 0-5.505 2.673-5.505 5.895c0 3.605 2.318 5.827 5.409 5.827c1.61 0 2.672-.386 3.477-.74zm7.948-18.772v3.735h4.056v2.156h-4.056v8.405c0 1.934.548 3.027 2.125 3.027c.772 0 1.224-.063 1.643-.194l.129 2.16c-.548.192-1.417.385-2.512.385c-1.321 0-2.384-.451-3.059-1.19c-.773-.871-1.095-2.254-1.095-4.09v-8.503h-2.416v-2.156h2.416V95.12zm8.013 8.598c0-1.836-.034-3.413-.129-4.863h2.48l.13 3.09h.094c.71-2.091 2.447-3.412 4.346-3.412c.291 0 .517.033.775.064v2.674c-.29-.066-.579-.066-.968-.066c-1.994 0-3.413 1.481-3.798 3.608a8.54 8.54 0 0 0-.097 1.32v8.308h-2.833zm25.111 2.8c0 5.764-4.026 8.276-7.76 8.276c-4.187 0-7.47-3.092-7.47-8.017c0-5.185 3.445-8.243 7.728-8.243c4.475 0 7.502 3.25 7.502 7.985m-12.333.162c0 3.413 1.932 5.99 4.701 5.99c2.706 0 4.733-2.546 4.733-6.055c0-2.64-1.32-5.958-4.669-5.958c-3.315 0-4.765 3.093-4.765 6.023m16.675-3.607c0-1.641-.034-2.93-.13-4.217h2.512l.161 2.576h.064c.773-1.45 2.576-2.898 5.152-2.898c2.156 0 5.506 1.288 5.506 6.631v9.275h-2.833v-8.984c0-2.51-.934-4.605-3.606-4.605c-1.836 0-3.286 1.321-3.799 2.898c-.13.355-.194.837-.194 1.321v9.37h-2.833z" />
                                </svg>
                                <span x-text="`**** **** **** ${item}`"></span>
                                <span>Expira en 03/25</span>
                                <button class="underline text-blue-900 hover:text-blue-950 font-semibold rounded-lg">Eliminar</button>
                            </div>
                        </template>
                    </div>

                    <button
                        class="p-3 mt-5 bg-primary hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto rounded-lg">Agregar
                        nueva tarjeta</button>
                </div>
            </div>
        </section>
    </main>

    <script>
        // seleccionar los menus laterales (movil/desktop)
        document.querySelectorAll('.sidebar-userdash').forEach($sidebar => {
            // dentro de cada menu seleccionar sus botones
            $sidebar.querySelectorAll('.btn-sidebar').forEach($btn => {

                $btn.addEventListener('click', () => {
                    // desactivar todos los botones
                    $btn.parentElement.querySelectorAll('button').forEach(e => {
                        e.classList.remove('bg-primary', 'text-white')
                    })
                    // activar el botón que ha presionado
                    $btn.classList.add('bg-primary', 'text-white')

                    // obtener la sección que se quiere mostrar
                    const $section = document.getElementById($btn.getAttribute('name'))
                    // ocultar todas las secciones
                    $section.parentElement.querySelectorAll('.section').forEach(e => {
                        e.classList.add('hidden')
                    })
                    // mostrar la sección dependiendo del atributo name del botón que se presiono
                    $section.classList.remove('hidden')
                })
            })
        })
    </script>
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
