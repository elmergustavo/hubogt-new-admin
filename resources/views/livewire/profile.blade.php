<div>
    <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Pagos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,400;6..12,600;6..12,700&display=swap"
      rel="stylesheet" />
  </head>

  <body>
    <div id="modal-results" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 md:h-[calc(100%-1rem)] h-[100dvh] ">
      <div class="relative md:p-4 p-2 xl:w-[1000px] lg:w-[80%] md:h-full h-[90dvh] w-full">
        <!-- Modal content -->
        <div
          class="relative bg-white shadow md:h-[550px] !pb-10 h-full border border-gray-500 w-full md:gap-5 gap-2 md:p-10 p-2 overflow-hidden grid xl:grid-cols-[300px,1fr] lg:grid-cols-[220px,1fr] md:grid-cols-[200px,1fr] grid-cols-1">

          <div class="flex justify-end w-full absolute top-0 right-0 p-2">
            <button type=" button"
              class="hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
              id="btn-modal-results-close">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>

          <aside class="p-5 lg:border-none border border-black/50">
            <div class="md:block hidden">
              <div class="mb-8 ">
                <h5 class="lg:text-2xl text-xl block font-semibold">Mejores sugerencias</h5>
                <span class="text-sm text-gray-500" id="text-search"></span>
              </div>
              <ul class="lg:text-xl text-lg flex flex-col gap-5 overflow-y-scroll md:h-[320px] h-[100px]">
                <li><a class="hover:underline" href="">Tenis</a></li>
                <li><a class="hover:underline" href="">Sudaderas Vintage</a></li>
              </ul>
            </div>

            <div class="md:hidden block">
              <div id="accordion-results" data-accordion="collapse">
                <h2 id="accordion-results-heading-1">
                  <button type="button"
                    class="flex items-center !bg-transparent border border-black justify-between w-full p-2 !text-black font-medium gap-3"
                    data-accordion-target="#accordion-results-body-1" aria-expanded="false"
                    aria-controls="accordion-results-body-1">
                    <h5 class="!text-black" id="text-search-movil">Mejores sugerencias</h5>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                    </svg>
                  </button>
                </h2>
                <div id="accordion-results-body-1" class="hidden" aria-labelledby="accordion-collapse-results-1">
                  <ul class="text-lg flex flex-col gap-5 p-2 pt-4">
                    <li><a class="hover:underline" href="">Tenis</a></li>
                    <li><a class="hover:underline" href="">Sudaderas Vintage</a></li>
                  </ul>
                </div>
              </div>

            </div>

          </aside>

          <section
            class="overflow-y-scroll pt-5 pb-8 md:px-0 px-5 grid lg:grid-cols-2 grid-cols-1 justify-center place-items-center gap-x-2 gap-y-8 border border-black/50 lg:border-none"
            x-data="{ items: [1,2,3,4,5] }">
            <!-- start item -->
            <template x-for="item in items">
              <div class="carousel-item xl:w-[220px] w-[210px] h-auto  ">
                <div class="relative h-[200px] aspect-square w-full">
                  <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded" alt="image" />
                  <button
                    class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                      xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                    </svg></button>
                </div>
                <div class="flex gap-4 flex-col pt-3">
                  <h3 class="text-lg ">Item ${i + 1}</h3>
                  <!-- start stars  -->
                  <div class="flex items-center justify-start gap-2">
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
                  <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                    <b class="text-base">Q27.88</b>
                    <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                  </div>
                  <span class="text-sm">by MysticArtByJose</span>
                  <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
                    carrito</button>
                </div>
              </div>
            </template>
            <!-- end item -->
          </section>

        </div>
      </div>
    </div>

    <!-- start banner -->
    <div class="bg-yellow-500 text-white font-bold text-center py-5 text-sm ">
      <span> -20% de descuento con el código: BTR20 </span>
    </div>
    <!-- end banner -->

    <!-- start navbar -->
    <nav class="flex justify-between items-center  font-poppins py-4 max-w-7xl mx-auto lg:gap-16 gap-5 xl:px-0 px-4">

      <img src="../images/logohorizontal.png" alt="" class="w-32 object-cover" />

      <div class="md:flex hidden items-center xl:gap-8 gap-4 flex-1">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
          class="text-sm text-center inline-flex items-center " type="button">productos <svg class="w-2.5 h-2.5 ms-3"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
            </li>
          </ul>
        </div>

        <form id="form-search-navbar"
          class="flex items-center border border-black rounded-full overflow-hidden w-fit bg-white flex-1">

          <input name="search" placeholder="Busca lo que se te ocurra" type="text"
            class="rounded-md w-full p-2 pl-5 pr-0 text-base outline-none" />

          <button data-modal-target="modal-results" class="px-3 pr-5 outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[20px] md:h-[20px] w-[10px] h-[10px]"
              viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
            </svg>
          </button>

        </form>
      </div>

      <div class="md:flex hidden items-center gap-5">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
            <path fill="red"
              d="m11.645 20.91l-.007-.003l-.022-.012a15.247 15.247 0 0 1-.383-.218a25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25C2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052A5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25c0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17a15.247 15.247 0 0 1-.383.219l-.022.012l-.007.004l-.003.001a.752.752 0 0 1-.704 0z" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
          </svg>
        </a>
      </div>

      <a href="" class="md:flex hidden justify-center items-center gap-[2px] flex-col text-[15px]">
        <img src=" https://placehold.co/30x30" class="w-[35px] h-[35px] object-cover rounded-full" alt="image" />
        Diego
      </a>

      <button class="font-medium rounded-lg text-sm px-5 py-2.5 md:hidden flex items-center gap-2 flex-row-reverse"
        type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
        aria-controls="drawer-example">
        <span class="hidden sm:block">Menú</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px]" viewBox="0 0 20 20">
          <path fill="currentColor" fill-rule="evenodd"
            d="M6 4.75A.75.75 0 0 1 6.75 4h10.5a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 4.75M6 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 10m0 5.25a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H6.75a.75.75 0 0 1-.75-.75M1.99 4.75a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1zm0 10.5a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1zm0-5.25a1 1 0 0 1 1-1H3a1 1 0 0 1 1 1v.01a1 1 0 0 1-1 1h-.01a1 1 0 0 1-1-1z"
            clip-rule="evenodd" />
        </svg>
      </button>

      <div id="drawer-example"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-label">

        <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close menu</span>
        </button>

        <hr class="mb-5 mt-8">

        <form id="form-search-navbar-movil"
          class="flex items-center border border-black rounded-full overflow-hidden w-fit bg-white flex-1">
          <input placeholder="Busca lo que se te ocurra" name="search" type="text"
            class="rounded-md w-full p-2 pl-5 pr-0 text-base outline-none" />
          <button class="px-3 pr-5 outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px]" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
            </svg>
          </button>
        </form>

        <hr class="mb-5 mt-8">

        <div class="text-white flex flex-col gap-5 text-lg">

          <a href="" class="flex items-center gap-5 justify-start">
            <span class="">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[26px] h-[26px]" viewBox="0 0 24 24">
                <path fill="red"
                  d="m11.645 20.91l-.007-.003l-.022-.012a15.247 15.247 0 0 1-.383-.218a25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25C2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052A5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25c0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17a15.247 15.247 0 0 1-.383.219l-.022.012l-.007.004l-.003.001a.752.752 0 0 1-.704 0z" />
              </svg>
            </span>
            <span>Favoritos</span>
          </a>
          <a href="" class="flex items-center gap-5 justify-start">
            <span class="">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[26px] h-[26px]" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="1.5"
                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
              </svg>
            </span>
            <span>Carrito</span>
          </a>
          <a href="" class="flex gap-5 justify-start items-center">
            <img src=" https://placehold.co/26x26" class="w-[26px] h-[26px] object-cover rounded-full" alt="image" />
            Diego
          </a>
        </div>

      </div>
    </nav>
    <!-- end navbar -->

    <main class="xl:px-0 min-h-[50dvh] border border-gray-300 my-10 max-w-7xl mx-auto">
      <section class=" grid md:grid-cols-[290px,1fr] grid-cols-1">
        <aside id="sidebar-userdash" class="sidebar-userdash border-r  border-gray-300 p-6 md:block hidden">

          <header class="flex justify-center items-center flex-col text-center mb-5 gap-2">
            <img src=" https://placehold.co/200x210" class="w-[130px] h-[130px] object-cover rounded-full"
              alt="image" />
            <span class="text-blue-900 font-bold text-lg">Diego Francisco Lopez Alvarado</span>
            <span class="italic">User shop</span>
          </header>

          <div class="flex flex-col gap-3">
            <button name="profile"
              class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white bg-blue-900 text-white">Perfil</button>
            <button name="account"
              class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Seguridad de la
              cuenta</button>
            <button name="cards" class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Tarjetas
              guardadas</button>
            <button name="orders" class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Ver
              pedidos</button>
            <button name="address"
              class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Dirección de
              envió</button>
          </div>

          <button class="underline mt-20 py-2 px-5">Cerrar sesión</button>
        </aside>

        <aside id="sidebar-user-dash-movil"
          class="sidebar-userdash md:hidden block border-b border-gray-300 sticky top-0 z-20 shadow-xl shadow-black/10">
          <div id="accordion-user-dash" data-accordion="collapse" class="w-full">
            <h2 id="accordion-collapse-heading-user-dash">
              <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border gap-3 !border-b !border-black !bg-white"
                data-accordion-target="#accordion-collapse-body-user-dash" aria-expanded="false"
                aria-controls="accordion-collapse-body-user-dash">
                <p class="text-center  flex flex-wrap">
                  <span class="text-blue-900 font-bold md:text-lg text-base">Diego Francisco Lopez Alvarado</span>
                  <span class="italic !text-gray-500">(User shop)</span>
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
                  class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white bg-blue-900 text-white">Perfil</button>
                <button name="account"
                  class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Seguridad de la
                  cuenta</button>
                <button name="cards"
                  class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Tarjetas
                  guardadas</button>
                <button name="orders" class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Ver
                  pedidos</button>
                <button name="address"
                  class="btn-sidebar py-2 px-5 text-start hover:bg-blue-900 hover:text-white ">Dirección de
                  envió</button>
              </div>
              <hr class="block my-5 border">
              <button class="underline py-2 px-5">Cerrar sesión</button>
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
              <input type="text" id="name" name="name" placeholder="Nombre" value="Diego Francisco"
                class="p-3 px-4 border border-black ">
            </div>
            <div class="flex flex-col gap-3">
              <label for="lastName" class="font-bold">Apellido</label>
              <input type="text" id="lastName" name="lastName" placeholder="Apellidos" value="Lopez Alvarado"
                class="p-3 px-4 border border-black ">
            </div>
            <div class="flex flex-col gap-3">
              <label for="email" class="font-bold ">Email</label>
              <input type="email" id="email" name="email" placeholder="Email" value="correo@correo.com"
                class="p-3 px-4 border border-black ">
            </div>
            <div class="flex flex-col gap-3">
              <label for="phone" class="font-bold ">Teléfono</label>
              <input type="email" id="phone" name="phone" placeholder="Teléfono" value="8112457898"
                class="p-3 px-4 border border-black ">
            </div>

            <button
              class="p-3 lg:mt-[100px] mt-5 bg-blue-900 hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto">Guardar</button>
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
                placeholder="Introducir contraseña actual" class="p-3 px-4 border border-black ">
            </div>
            <div class="flex flex-col gap-3">
              <input type="password" id="newPassword" name="newPassword" placeholder="Ingrese nueva contraseña"
                class="p-3 px-4 border border-black ">
            </div>
            <div class="flex flex-col gap-3">
              <input type="password" id="confirmPassword" name="confirmPassword"
                placeholder="Reescriba nueva contraseña" class="p-3 px-4 border border-black ">
            </div>

            <button
              class="p-3 lg:mt-[50px] mt-5 bg-blue-900 hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto">Cambiar
              contraseña</button>
          </form>

          <header class="border-b border-t border-gray-300 p-3 md:py-5 mt-5 py-6 text-center">
            <h6 class="text-2xl font-bold">Privacidad</h6>
            <span class="block mt-1 text-lg">Modifique su configuración de privacidad aquí</span>
          </header>

          <form class="md:w-[60%] w-full md:px-0 px-4 mx-auto py-8 pb-10 flex flex-col gap-6">
            <span class="font-bold">Configuración de la pagina de perfil</span>
            <div class="group flex gap-3 items-center">
              <input type="checkbox" id="privacyNotice" name="privacyNotice" placeholder="Introducir contraseña actual"
                class="p-3 px-4 border border-black hidden">
              <div class="w-5 h-5 border border-black border-2 grid place-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 scale-[1.8] group-has-[:checked]:block hidden"
                  viewBox="0 0 16 16">
                  <path fill="#000" fill-rule="evenodd"
                    d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353l4.493-6.74a.75.75 0 0 1 1.04-.207"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <label for="privacyNotice" class="cursor-pointer">Mostrar tu perfil a los usuarios</label>
            </div>

            <button
              class="p-3 lg:mt-[50px] mt-5 bg-blue-900 hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto">Guardar</button>
          </form>
        </div>

        <div id="orders" class="hidden section">
          <header class="border-b border-gray-300 p-3 md:py-5 py-6 text-center">
            <h6 class="text-2xl font-bold">Pedidos</h6>
            <span class="block mt-1 text-lg">Encuentra mas detalles sobre tus pedidos</span>
          </header>
          <div class="w-full p-4 flex flex-col gap-20" x-data="{items: [1,1]}">

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
                        data-accordion-target="#accordion-collapse-body-order-info" aria-expanded="false"
                        aria-controls="accordion-collapse-body-order-info">
                        <p class="text-center  flex flex-wrap">
                          <span class="text-black font-bold md:text-lg text-base text-center">Información del
                            pedido</span>
                        </p>
                        <svg data-accordion-icon class="w-3 h-3 rotate-360 shrink-0" aria-hidden="false"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                          <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
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
                    <div class="flex md:flex-nowrap flex-wrap gap-8 md:justify-start justify-center items-center">
                      <img src=" https://placehold.co/200x210" class="w-[170px] h-[170px] object-cover" alt="image" />
                      <div class="flex flex-col gap-1">
                        <h3 class="text-3xl font-bold">Pumas blancos</h3>
                        <p>
                          <span>Zapatos puma blancos</span>
                          <span>|</span>
                          <span>diseño xcv</span>
                        </p>
                        <button class="p-2 bg-blue-900 mt-4 hover:bg-blue-950 text-white md:w-fit w-full">Comprar
                          nuevamente</button>
                      </div>
                    </div>

                    <div class="flex min-w-[200px] flex-col flex-1 gap-3 justify-center items-center">
                      <button
                        class=" lg:w-[50%] w-full p-2 bg-transparent border border-blue-900 hover:bg-gray-200 text-blue-900 ">Contactar
                        al vendedor</button>
                      <button
                        class=" lg:w-[50%] w-full p-2 bg-transparent border border-blue-900 hover:bg-gray-200 text-blue-900 ">Escribir
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
                  <a href="" class="hover:text-blue-900 text-blue-800 underline font-semibold">Editar</a>
                  <a href="" class="hover:text-blue-900 text-blue-800 underline font-semibold">Eliminar</a>
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
              class="p-3  mt-5 bg-blue-900 hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto">Agregar
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
            <div class="flex flex-col gap-5 lg:flex-nowrap flex-wrap" x-data="{items:[7804,9742]}">
              <template x-for="item in items">
                <div
                  class="border border-black/70 p-4 flex justify-between items-center gap-3 sm:flex-nowrap flex-wrap text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[51px] h-[22px]" viewBox="0 0 256 114">
                    <path fill="#1A1F71"
                      d="M97.197 1.46L63.68 81.418H41.814L25.32 17.604c-1-3.921-1.869-5.364-4.912-7.022C15.434 7.88 7.22 5.353 0 3.781L.487 1.46h35.204c4.48 0 8.514 2.983 9.54 8.148l8.715 46.273L75.462 1.46zm29.56 0l-17.103 79.958H88.966L106.071 1.46zm56.116 53.852c.086-21.099-29.174-22.27-28.983-31.697c.07-2.866 2.8-5.917 8.776-6.697c2.96-.383 11.138-.688 20.401 3.58l3.624-16.966C181.714 1.732 175.309 0 167.342 0c-20.45 0-34.835 10.862-34.95 26.428c-.134 11.514 10.275 17.931 18.103 21.766c8.063 3.916 10.767 6.433 10.73 9.933c-.058 5.365-6.44 7.74-12.373 7.828c-10.404.165-16.435-2.812-21.246-5.053l-3.755 17.528c4.84 2.218 13.76 4.145 22.999 4.243c21.74 0 35.959-10.737 36.023-27.36m54 26.106H256L239.29 1.46h-17.647c-3.98 0-7.325 2.31-8.809 5.861l-31.04 74.097h21.723l4.309-11.944h26.54zm-23.09-28.329l10.892-30.027l6.257 30.027zm-60.55 50.338h-8.406v7.823h9.402v2.352h-12.234V91.9h11.752v2.352h-8.92v6.857h8.405zm5.339-12.686h2.832v22.86h-2.832zm9.978 15.583c.064 3.833 2.48 5.41 5.344 5.41c2.03 0 3.285-.354 4.317-.804l.514 2.029c-.998.45-2.736.997-5.217.997c-4.796 0-7.661-3.187-7.661-7.889c0-4.7 2.767-8.372 7.308-8.372c5.12 0 6.44 4.445 6.44 7.31c0 .579-.033.997-.098 1.32zm8.307-2.028c.033-1.77-.74-4.572-3.928-4.572c-2.898 0-4.122 2.608-4.348 4.572zm18.154 8.758c-.74.355-2.383.903-4.475.903c-4.701 0-7.76-3.188-7.76-7.954c0-4.798 3.283-8.307 8.371-8.307c1.674 0 3.155.417 3.928.837l-.642 2.157c-.679-.354-1.741-.742-3.286-.742c-3.575 0-5.505 2.673-5.505 5.895c0 3.605 2.318 5.827 5.409 5.827c1.61 0 2.672-.386 3.477-.74zm7.948-18.772v3.735h4.056v2.156h-4.056v8.405c0 1.934.548 3.027 2.125 3.027c.772 0 1.224-.063 1.643-.194l.129 2.16c-.548.192-1.417.385-2.512.385c-1.321 0-2.384-.451-3.059-1.19c-.773-.871-1.095-2.254-1.095-4.09v-8.503h-2.416v-2.156h2.416V95.12zm8.013 8.598c0-1.836-.034-3.413-.129-4.863h2.48l.13 3.09h.094c.71-2.091 2.447-3.412 4.346-3.412c.291 0 .517.033.775.064v2.674c-.29-.066-.579-.066-.968-.066c-1.994 0-3.413 1.481-3.798 3.608a8.54 8.54 0 0 0-.097 1.32v8.308h-2.833zm25.111 2.8c0 5.764-4.026 8.276-7.76 8.276c-4.187 0-7.47-3.092-7.47-8.017c0-5.185 3.445-8.243 7.728-8.243c4.475 0 7.502 3.25 7.502 7.985m-12.333.162c0 3.413 1.932 5.99 4.701 5.99c2.706 0 4.733-2.546 4.733-6.055c0-2.64-1.32-5.958-4.669-5.958c-3.315 0-4.765 3.093-4.765 6.023m16.675-3.607c0-1.641-.034-2.93-.13-4.217h2.512l.161 2.576h.064c.773-1.45 2.576-2.898 5.152-2.898c2.156 0 5.506 1.288 5.506 6.631v9.275h-2.833v-8.984c0-2.51-.934-4.605-3.606-4.605c-1.836 0-3.286 1.321-3.799 2.898c-.13.355-.194.837-.194 1.321v9.37h-2.833z" />
                  </svg>
                  <span x-text="`**** **** **** ${item}`"></span>
                  <span>Expira en 03/25</span>
                  <button class="underline text-blue-900 hover:text-blue-950 font-semibold">Eliminar</button>
                </div>
              </template>
            </div>

            <button
              class="p-3  mt-5 bg-blue-900 hover:bg-blue-950 text-white w-full md:max-w-[250px] max-w-auto">Agregar
              nueva tarjeta</button>
          </div>
        </div>
      </section>
    </main>

    <footer class=" bg-blue-950 min-h-[500px] lg:py-20 py-10 px-5 text-white lg:text-sm text-xs">
      <div
        class="max-w-7xl mx-auto flex lg:flex-row flex-col lg:justify-around justify-center lg:items-start items-center lg:gap-5 gap-10">

        <div class="flex flex-col gap-4">
          <img src="../images/logo horizontal (1).png" alt="" class="w-[270px] object-cover" />
          <div class="flex gap-5 lg:flex-row flex-wrap flex-col">
            <button
              class="h-full p-3 px-5 text-sm bg-white lg:w-fit w-full text-blue-900 hover:bg-white/90 font-bold">Vende
              en
              Buhogt</button>
            <button
              class="h-full p-3 px-5 text-sm bg-white lg:w-fit w-full text-blue-900 hover:bg-white/90 font-bold">Contactanos</button>
          </div>
        </div>

        <div class="grid grid-cols-3 gap-10 ">
          <div class="flex flex-col gap-3">
            <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Tienda</h6>
            <span>Únete a buhogt</span>
            <span>Nuestro blog</span>
            <span>Optimiza tu tienda</span>
          </div>
          <div class="flex flex-col gap-3">
            <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Ayuda</h6>
            <span>Preguntas frecuentes</span>
            <span>Configuración de cookies</span>
            <span>Como vender en Buhogt</span>
            <span>Manual de venta de Buhogt</span>
          </div>
          <div class="flex flex-col gap-3">
            <h6 class="font-semibold lg:min-h-[30px] min-h-[40px]">Sobre nosotros</h6>
            <span>Quienes somos</span>
            <span>Política de privacidad</span>
            <span>Política de garantía</span>
            <span>Empleo</span>
          </div>
        </div>

        <div class="flex lg:flex-col flex-row gap-3 lg:items-start items-center justify-center">
          <span class="font-semibold lg:min-h-[30px] min-h-auto">Síguenos</span>

          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#fff"
                d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
            </svg>
            <span class="lg:block hidden">Instagram</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
              <path
                d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"
                fill="#fff" />
            </svg>
            <span class="lg:block hidden">Facebook</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#fff"
                d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
            </svg>
            <span class="lg:block hidden">Twitter</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#fff"
                d="M9.04 21.54c.96.29 1.93.46 2.96.46a10 10 0 0 0 10-10A10 10 0 0 0 12 2A10 10 0 0 0 2 12c0 4.25 2.67 7.9 6.44 9.34c-.09-.78-.18-2.07 0-2.96l1.15-4.94s-.29-.58-.29-1.5c0-1.38.86-2.41 1.84-2.41c.86 0 1.26.63 1.26 1.44c0 .86-.57 2.09-.86 3.27c-.17.98.52 1.84 1.52 1.84c1.78 0 3.16-1.9 3.16-4.58c0-2.4-1.72-4.04-4.19-4.04c-2.82 0-4.48 2.1-4.48 4.31c0 .86.28 1.73.74 2.3c.09.06.09.14.06.29l-.29 1.09c0 .17-.11.23-.28.11c-1.28-.56-2.02-2.38-2.02-3.85c0-3.16 2.24-6.03 6.56-6.03c3.44 0 6.12 2.47 6.12 5.75c0 3.44-2.13 6.2-5.18 6.2c-.97 0-1.92-.52-2.26-1.13l-.67 2.37c-.23.86-.86 2.01-1.29 2.7z" />
            </svg>
            <span class="lg:block hidden">Pinterest</span>
          </div>
        </div>
      </div>

      <div
        class="text-gray-500 max-w-7xl mx-auto flex justify-center items-center flex-col gap-5 text-sm lg:mt-20 mt-10">
        <div class="flex lg:flex-row flex-col gap-5 justify-center items-center text-center">
          <a href="">Configuraciones de uso</a>
          <a href="">Política de privacidad</a>
          <a href="">Política de cookies</a>
        </div>

        <span class="text-xs">© Buhogt. Todos los derechos reservados</span>
      </div>
    </footer>

    <!-- <script src="../home.js"></script> -->

    <script>
      // seleccionar los menus laterales (movil/desktop)
      document.querySelectorAll('.sidebar-userdash').forEach($sidebar => {
        // dentro de cada menu seleccionar sus botones
        $sidebar.querySelectorAll('.btn-sidebar').forEach($btn => {

          $btn.addEventListener('click', () => {
            // desactivar todos los botones
            $btn.parentElement.querySelectorAll('button').forEach(e => { e.classList.remove('bg-blue-900', 'text-white') })
            // activar el botón que ha presionado
            $btn.classList.add('bg-blue-900', 'text-white')

            // obtener la sección que se quiere mostrar
            const $section = document.getElementById($btn.getAttribute('name'))
            // ocultar todas las secciones
            $section.parentElement.querySelectorAll('.section').forEach(e => { e.classList.add('hidden') })
            // mostrar la sección dependiendo del atributo name del botón que se presiono
            $section.classList.remove('hidden')
          })
        })
      })
    </script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  </body>

</html>
</div>
