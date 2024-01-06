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
                    class="bg-[#FFF] text-black font-medium border-black px-5 py-2 rounded-full hover:bg-[#87acec]">Registrate</button>
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
                            class="w-[20.2rem] lg:w-[32rem] md:w-[30.5rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
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

    <div class="bg-amber-50 px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-base font-semibold leading-7 text-indigo-950">Obten la ayuda que necesitas</p>
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Beneficios de Buhogt</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        </div>

        <section>
            <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                    <div class="relative z-10 lg:py-16">
                        <div class="relative h-60 sm:h-80 md:h-full">
                            <img alt="admin" src="../images/admin-buho.jpg"
                                class="absolute inset-0 h-full w-full object-cover shadow-lg " />
                        </div>
                    </div>

                    <div class="relative flex items-center bg-gray-100">
                        <span
                            class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"></span>

                        <div class="p-8 sm:p-12 lg:p-24 ">
                            <h2 class="text-2xl font-bold sm:text-3xl">
                                Obten estadisticas al instante
                                de tus productos.
                            </h2>

                            <p class="mt-4 text-gray-600">
                                Explora tesoros únicos, conecta con vendedores apasionados y encuentra productos
                                exclusivos. Navega de forma intuitiva y convierte tus compras en momentos auténticos.
                            </p>
                            <div class="mt-10 flex items-center w-full px-12 md:px-0">
                                <a href="#"
                                    class="mt-8 inline-block shadow-xl rounded-full border border-indigo-9500 bg-indigo-950 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-950 focus:outline-none focus:ring active:text-indigo-500 transition duration-300 ease-in-out">
                                    Registrate ahora
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</body>

<script>
    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>

</html>
