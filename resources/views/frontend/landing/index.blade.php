<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta description="Platafoma de comerecio electronico, vende en linea y compra en linea" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>landing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,400;6..12,600;6..12,700&display=swap"
        rel="stylesheet" />
</head>

<body>

    <header class="bg-[#161933] py-4">
        <nav class="flex justify-between items-center w-[90%] mx-auto">
            <div>
                <img class="w-36" src="images/logo_horizontal_dark.svg" class="" alt="">
            </div>
            <div
                class="nav-links md:static absolute bg-[#161933] md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li class="text-gray-200 font-medium text-lg"><a class="hover:text-white" href="#">Por que
                            Buhogt</a></li>
                    <li class="text-gray-200 font-medium text-lg"><a class="hover:text-white"
                            href="#">Beneficios</a></li>
                    <li class="text-gray-200 font-medium text-lg"><a class="hover:text-white"
                            href="#">Funciones</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button
                    class="bg-[#FFF] text-black font-medium border-black px-4 md:px-14 py-2 rounded-full hover:bg-[#87acec]">Registrate</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl text-white cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>
    <!-- hero section -->
    <div class=" bg-[#161933]">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-100 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <!-- <defs>
      <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
        <path d="M.5 200V.5H200" fill="none" />
      </pattern>
    </defs> -->
            <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
        </svg>
        <div class="container mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex space-x-6">
                        <span
                            class="rounded-full bg-gray-900/90 px-5 py-1 text-sm font-semibold leading-6 text-white ring-1 ring-inset ring-indigo-600/10">
                            Plataforma de Comercio Eléctronico</span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600">
                            <span class="text-white">Versión beta</span>
                            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Unete al marketplace donde
                    miles de emprendedore venden</h1>
                <p class="mt-6 text-lg leading-8 text-white">Comeinza ahora e impulsa las ventas de tu negocio en menos
                    tiempo con <span class="underline decoration-solid">Buhogt</span> </p>
                <div class="mt-10 flex items-center w-full px-12 md:px-0">
                    <a href="#"
                        class="mt-8 max-w-[20rem] md:w-1/2 w-full flex justify-center  shadow-xl rounded-full border border-indigo-9500 bg-null px-12 py-3 text-[1.1rem] font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-indigo-500 transition duration-300 ease-in-out">
                        Registrate ahora
                    </a>
                    <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> -->
                </div>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <div
                        class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                        <img src="/assets/images/video.png" alt="App screenshot" width="2432" height="1442"
                            class="w-[20.2rem] lg:w-[29.2rem] md:w-[30.5rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin hero section -->

    <!-- features section -->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-indigo-900">Potencializa tus ventas de manera
                        eficiente </h2>
                    <p class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Tu mejor socio en el
                        sector de comercio electronico.</p>
                    <p class="mt-6 leading-7 text-gray-600 text-md">Explora tesoros únicos, conecta con vendedores
                        apasionados y encuentra productos exclusivos. Navega de forma intuitiva y convierte tus compras
                        en momentos auténticos.</p>
                </div>
                <dl
                    class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-800" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Crea tu tienda
                        </dt>
                        <dd class="mt-2 text-base">Rerum repellat labore necessitatibus reprehenderit molestiae
                            praesentium.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-800" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Lleva tu inventario
                        </dt>
                        <dd class="mt-2 text-base">Corporis asperiores ea nulla temporibus asperiores non tempore
                            assumenda aut.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-800" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Posiciona tu marca
                        </dt>
                        <dd class="mt-2">In sit qui aliquid deleniti et. Ad nobis sunt omnis. Quo sapiente dicta
                            laboriosam.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-800" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Pagos en automatico
                        </dt>
                        <dd class="mt-2">Sed rerum sunt dignissimos ullam. Iusto iure occaecati voluptate eligendi
                            fugiat sequi.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-800" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Notificaciones instantaneas
                        </dt>
                        <dd class="mt-2">Quos inventore harum enim nesciunt. Aut repellat rerum omnis adipisci.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900 text-xl">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Obteción de datos
                        </dt>
                        <dd class="mt-2">Quae sit sunt excepturi fugit veniam voluptatem ipsum commodi.</dd>
                    </div>


                </dl>
            </div>
        </div>
    </div>
    <!-- fin features section -->

    <!-- inicio de beneficios -->
    <div class="bg-amber-50 px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-base font-semibold leading-7 text-indigo-950">Obten la ayuda que necesitas</p>
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Beneficios de Buhogt</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        </div>

        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                        <img alt="Party" src="/assets/images/parte-dash-1-1.webp"
                            class="absolute inset-0 h-auto w-auto object-cover" />
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-4xl">Crece tus ventas</h2>

                        <p class="mt-4 text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                            eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                            quidem quam repellat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-first lg:h-full">
                        <img alt="Party" src="/assets/images/gestion-productos-1.webp"
                            class="absolute inset-0h-auto w-auto object-cover" />
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-4xl">Añade tus productos en linea</h2>

                        <p class="mt-4 text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                            eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                            quidem quam repellat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- fin  -->

    <section class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
                <div class="px-6 md:px-0 lg:pr-4 lg:pt-4">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600"></h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Una forma facil de
                            vender</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis ratione.</p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Facil de gestionar
                                </dt>
                                <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                    impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Seguridad
                                </dt>
                                <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                    lorem cupidatat commodo.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                        <path fill-rule="evenodd"
                                            d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Publicidad
                                </dt>
                                <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                    magna sit morbi lobortis.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="sm:px-6 lg:px-0">
                    <div
                        class="relative isolate overflow-hidden bg-indigo-500 px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none">
                        <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white"
                            aria-hidden="true"></div>
                        <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                            <div class="w-screen overflow-hidden rounded-tl-xl bg-gray-900 ring-1 ring-white/10">
                                <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                    <div class="-mb-px flex text-sm font-medium leading-6 text-gray-400">
                                        <div
                                            class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                            Ventas</div>
                                        <div class="border-r border-gray-600/10 px-4 py-2">Dashboard</div>
                                    </div>
                                </div>
                                <div class="px-6 pb-14 pt-6">
                                    <img src="/assets/images/admin-buho.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl"
                            aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-100/40 px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-base font-semibold leading-7 text-indigo-950">Obten la ayuda que necesitas</p>
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Beneficios de Buhogt</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Se parte de esta comunidad
                y da el salto que deseas
                para tu negocio.</p>
        </div>

        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="Party"
                        src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Registrate en buhogt <br>
                        y comienza a vender <br>
                        linea</h2>

                    <p class="mt-4 text-gray-600 text-[1.2rem]">
                        Haste parte de la Platafoma de comercio electronico, <br> donde los emprededores
                        venden sus productos.
                    </p>

                    <a href="#"
                        class="mt-8 shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 text-md font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Registrate ahora
                    </a>
                </div>
            </div>
        </div>



        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-first lg:h-full">
                    <img alt="Party"
                        src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl ">Crece tu negocio con <br>
                        Buhogt</h2>

                    <p class="mt-4 text-gray-600 text-[1.2rem]">
                        Emprendedores y pequeñas empresas
                        se asocian con Buhogt para llegar nuevos
                        clientes, aumentar volumen de pedidos e
                        impulsar más ventas.
                    </p>

                    <a href="#"
                        class="mt-8 shadow-2xl inline-block rounded-full bg-indigo-950 px-12 py-3 text-md font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Registrate ahora
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-white">
        <div class="lg:absolute lg:inset-0 lg:left-1/2">
            <img class="h-64 w-full bg-white object-cover sm:h-80 lg:absolute lg:h-full py-32"
                src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=2560&h=3413&&q=80"
                alt="">
        </div>
        <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
            <div class="px-6 lg:px-8">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Se parte de Buhogt</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Proin volutpat consequat porttitor cras nullam
                        gravida at orci molestie a eu arcu sed ut tincidunt magna.</p>
                    <form action="#" method="POST" class="mt-16">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <label for="first-name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                                <div class="mt-2.5">
                                    <input type="text" name="first-name" id="first-name"
                                        autocomplete="given-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="last-name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Apellido</label>
                                <div class="mt-2.5">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Correo
                                    eléctronico</label>
                                <div class="mt-2.5">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="company"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Empresa</label>
                                <div class="mt-2.5">
                                    <input type="text" name="company" id="company" autocomplete="organization"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between text-sm leading-6">
                                    <label for="phone" class="block font-semibold text-gray-900">Numero</label>
                                    <p id="phone-description" class="text-gray-400">Optional</p>
                                </div>
                                <div class="mt-2.5">
                                    <input type="tel" name="phone" id="phone" autocomplete="tel"
                                        aria-describedby="phone-description"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <!-- <div class="sm:col-span-2">
              <div class="flex justify-between text-sm leading-6">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">¿Que cosas te gustaria ver?</label>
                <p id="message-description" class="text-gray-400">Max 500 characters</p>
              </div>
              <div class="mt-2.5">
                <textarea id="message" name="message" rows="4" aria-describedby="message-description"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
              </div>
            </div> -->
                            <fieldset class="sm:col-span-2">
                                <legend class="block text-sm font-semibold leading-6 text-gray-900">¿Cómo te enteraste
                                    de buhogt?</legend>
                                <div class="mt-4 space-y-4 text-sm leading-6 text-gray-600">
                                    <div class="flex gap-x-2.5">
                                        <input id="budget-under-25k" name="budget" value="under_25k" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="budget-under-25k">Amigos o familiares</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="budget-25k-50k" name="budget" value="25k-50k" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="budget-25k-50k">Facebook</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="budget-50k-100k" name="budget" value="50k-100k" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="budget-50k-100k">Instagram</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="budget-over-100k" name="budget" value="over_100k" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="budget-over-100k">Pagina web</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
                            <button type="submit"
                                class="rounded-full bg-indigo-950 shadow-2xl px-8 py-2.5 text-center text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar
                                registro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">YouTube</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>


</body>

<script>
    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>

</html>
