 <!-- start banner -->
 <div class="bg-yellow-500 text-white font-bold text-center py-5 text-sm ">
     <span> -20% de descuento con el código: BTR20 </span>
 </div>
 <!-- end banner -->

 <!-- start navbar -->
 <nav class=" md:shadow shadow-lg shadow-black/10 relative">
     <div
         class="flex flex-wrap justify-between items-center font-poppins py-4 max-w-7xl mx-auto lg:gap-16 gap-4 xl:px-0 px-4">

         <div class="flex items-center gap-5 ">

             <button class="lg:hidden block" id="btn-drawer-navbar-mobile">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="#000" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z" />
                 </svg>
             </button>

             {{-- <img src="../images/logohorizontal.png" alt=""
                 class="md:w-32 sm:w-[30%] w-[115px] object-cover order-1" /> --}}
             <a href="{{ route('ecommerce') }}">
                 <img src="/assets/logo/new-logo-mombii.svg" alt="Logo" class="w-36 object-cover" />
             </a>

         </div>

         <!-- start input search -->
         <div
             class="hidden lg:flex items-center xl:gap-8 gap-4 lg:flex-1 flex-none lg:w-auto w-full lg:order-2 order-3">
             <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                 class="hidden  text-sm text-center md:inline-flex items-center " type="button">productos <svg
                     class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 10 6">
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
                 class="flex items-center border border-black rounded-full  w-fit bg-white flex-1 relative">

                 <input name="search" placeholder="Busca lo que se te ocurra" type="text"
                     class="rounded-full w-full md:text-base text-sm p-2 pl-5 pr-0 text-base outline-none"
                     autocomplete="off" />

                 <ul id="results-container"
                     class=" hidden bg-white rounded absolute md:-bottom-[410px] -bottom-[51dvh] z-40 border md:h-[400px] h-[50dvh] left-0 shadow-lg shadow-black/50 p-2 w-full overflow-y-scroll">
                     <!-- results -->
                 </ul>

                 <button class="px-3 pr-5 outline-none">
                     <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[20px] w-4 md:h-[20px] h-4"
                         viewBox="0 0 24 24">
                         <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5"
                             d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
                     </svg>
                 </button>

             </form>
         </div>
         <!-- start input search -->

         <!-- start links navigation -->
         <div class="hidden lg:flex items-center md:gap-5 gap-3 lg:order-3 order-2">
             @guest
                 <a href="{{ route('login') }}">
                     <span class="lg:block hidden">Iniciar sesión</span>
                     <span class="lg:hidden block">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 20 20">
                             <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                 <path
                                     d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75z" />
                                 <path
                                     d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10" />
                             </g>
                         </svg>
                     </span>
                 </a>
                 <a href="">
                     <span class="lg:block hidden">Registrarse</span>
                     <span class="lg:hidden block">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="1.5"
                                 d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                         </svg>
                     </span>
                 </a>
             @endguest

             @auth
                 <a href="">
                     <span class="lg:block hidden">Tienda</span>
                     <span class="lg:hidden block">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px]" viewBox="0 0 24 24">
                             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="1.5"
                                 d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75" />
                         </svg>
                     </span>
                 </a>
             @endauth
             <a href="">
                 <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
                     <path fill="red"
                         d="m11.645 20.91l-.007-.003l-.022-.012a15.247 15.247 0 0 1-.383-.218a25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25C2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052A5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25c0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17a15.247 15.247 0 0 1-.383.219l-.022.012l-.007.004l-.003.001a.752.752 0 0 1-.704 0z" />
                 </svg>
             </a>
             <a href="">
                 <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[26px] md:h-[26px]" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
                 </svg>
             </a>
             @auth

                 <x-dropdown align="right">
                     <x-slot name="trigger">
                         <div
                             class="md:flex hidden cursor-pointer justify-center items-center gap-[2px] flex-col text-[15px]">
                             <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}"
                                 class="w-[35px] h-[35px] object-cover rounded-full" alt="image" />
                             <span>{{ Auth::user()->name }}</span>
                         </div>
                     </x-slot>

                     <x-slot name="content">
                         <x-dropdown-link :href="route('profile')" wire:navigate>
                             {{ __('Perfil') }}
                         </x-dropdown-link>
                         <x-dropdown-link :href="route('profile')" wire:navigate>
                             {{ __('Ver pedidos') }}
                         </x-dropdown-link>
                         <form method="POST" action="{{ route('logout') }}" x-data>
                             @csrf
                             <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                 {{ __('Cerrar sesión') }}
                             </x-dropdown-link>
                         </form>
                     </x-slot>
                 </x-dropdown>




                 {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" class="flex items-center" @click.prevent="$root.submit();">

                    {{ __('Cerrar Sesión') }}
                </x-dropdown-link>
            </form> --}}

             @endauth
             <!-- end links navigation -->

             <!-- start input search mobile -->
         </div>
         <!-- input search -->
         <div class="-translate-x-full transition-transform lg:hidden gap-5 flex justify-between items-center bg-white w-full h-full absolute top-0 left-0 right-0 bottom-0 ease-in duration-100 overflow-x-hidden"
             id="search-input-mobile">
             <button class=" p-2 border-r border-black h-full">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                     <path fill="#000" fill-rule="evenodd"
                         d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0"
                         clip-rule="evenodd" />
                 </svg>
             </button>
             <input id="input-search" type="text" placeholder="¿Qué estas buscando?"
                 class="w-full h-full outline-none text-lg">
         </div>
         <!-- results mobile -->
         <ul id="results-container-mobile"
             class=" bg-white z-40 rounded absolute -bottom-[71dvh] z-30 border h-[70dvh] left-0 shadow-lg shadow-black/50 p-2 w-full overflow-y-scroll hidden">
             <!-- results -->
             Content
         </ul>
         <!-- end input search mobile -->

         <!-- start links navigation mobile -->
         <div class="lg:hidden flex order-2 items-center md:gap-5 sm:gap-5 gap-3">
             <button id="btn-search-input-mobile">
                 <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[25px] w-6 sm:h-[25px] h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
                 </svg>
             </button>
             <a href="">
                 <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[25px] w-6 sm:h-[25px] h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                 </svg>
             </a>
             <a href="">
                 <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[25px] w-6 sm:h-[25px] h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
                 </svg>
             </a>
         </div>
         <!-- end links navigation mobile -->
     </div>
 </nav>

 <div id="drawer-navbar-mobile"
     class="-translate-x-full transition-all duration-200 ease lg:hidden block fixed top-0 left-0 w-screen h-[100dvh] z-40">

     <div class="delay-200	 overlay transition-all opacity-0 w-screen h-screen bg-black/50 fixed top-0 left-0 z-40">
     </div>

     <div class="bg-white sm:w-[50%] w-screen  h-full absolute top-0 z-50">
         <header
             class="min-h-[70px] border-b border-gray-400 flex justify-between items-center px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10">
             {{-- <img src="../images/logohorizontal.png" alt="" class="w-32  object-contain " /> --}}
             <a href="{{ route('ecommerce') }}">
                 <img src="/assets/logo/new-logo-mombii.svg" alt="Logo" class="w-36 object-cover" />
             </a>
             <button id="close-drawer-navbar-mobile" class="">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 active:text-red-500 text-black"
                     viewBox="0 0 24 24">
                     <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="m9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                 </svg>
             </button>
         </header>

         <section class="px-3 py-5 text-lg">
             <button data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                 aria-controls="drawer-example" data-drawer-placement="bottom" id="btn-categories"
                 class="p-2 rounded active:bg-gray-200 flex justify-between items-center w-full"
                 data-drawer-backdrop="false">
                 <div class="flex flex-row items-center gap-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                         <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5"
                             d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25zm0 9.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18zM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25zm0 9.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18z" />
                     </svg>
                     <p class="text-start">
                         <span>Categoria </span><br>
                     </p>
                 </div>
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="#000" fill-rule="evenodd"
                         d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                         clip-rule="evenodd" />
                 </svg>
             </button>

             <a href="" class="flex items-center gap-3 my-3 p-2 rounded active:bg-gray-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75" />
                 </svg>
                 Tiendas Mombi.com
             </a>

             <hr class="border border-gray-300 my-5" />

             <a href="" class="flex items-center gap-3 my-3 p-2 rounded active:bg-gray-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M15.75 6a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632" />
                 </svg>
                 Cuenta
             </a>
             <a href="" class="flex items-center gap-3 my-3 p-2 rounded active:bg-gray-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                     <path fill="#000"
                         d="m14.447 3.724l-6-3a1 1 0 0 0-.894 0l-6 3A1 1 0 0 0 1 4.618v6.764a1 1 0 0 0 .553.894l6 3a1 1 0 0 0 .894 0l6-3a1 1 0 0 0 .553-.894V4.618a1 1 0 0 0-.553-.894M5.871 5.897l5.343-2.672l2.158 1.079L8 6.943ZM8 1.618l2.096 1.048l-5.353 2.677l-2.115-1.039ZM2 5.11l2.25 1.105V9a.5.5 0 0 0 1 0V6.706L7.5 7.811v6.321L2 11.382Zm6.5 9.022v-6.32L14 5.11v6.272Z" />
                 </svg>
                 Pedidos</a>
             <a href="" class="flex items-center gap-3 my-3 p-2 rounded active:bg-gray-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                 </svg>
                 Favoritos</a>

             <hr class="border border-gray-300 my-5" />

             <a href="#" class="flex items-center gap-3 p-2 rounded active:bg-gray-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                     <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="1.5"
                         d="M9.879 7.519c1.172-1.025 3.071-1.025 4.243 0c1.171 1.025 1.171 2.687 0 3.712a2.98 2.98 0 0 1-.67.442c-.746.361-1.452.999-1.452 1.827v.75M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0m-9 5.25h.008v.008H12z" />
                 </svg>
                 ¿Necesitas ayuda?</a>
         </section>
     </div>

 </div>
 <!-- end navbar -->

 <!-- start categorías -->
 <div class=" lg:bg-gray-100  ">
     <div class="max-w-7xl mx-auto p-4 lg:flex hidden justify-between gap-5 items-center flex-wrap">

         <section class="flex items-center justify-start xl:gap-8 gap-6 flex-wrap">
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="moda-mujer"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Moda Mujer
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="moda-mujer"
                     class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="moda-hombre"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Moda Hombre
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="moda-hombre"
                     class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="hogar-jardin"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Hogar & Jardín
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="hogar-jardin"
                     class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="salud-belleza"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Salud y belleza
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="salud-belleza"
                     class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="collecionable-arte"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Coleccionables y Arte
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="collecionable-arte"
                     class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="bolsos"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Bolsos
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="bolsos" class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="joyeria"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Joyería
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="joyeria" class="z-50 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
         </section>

         <div class="flex justify-end flex-1">
             <!-- start dropdown -->
             <div>
                 <button id="dropdownDefaultButton" data-dropdown-toggle="mas"
                     class="text-sm text-center inline-flex items-center " type="button">
                     Más
                     <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <div id="mas" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                     <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                         <li>
                             <a href="#" class="block px-4 py-2 hover:underline">Dashboard</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- end dropdown -->
         </div>
     </div>

     <div class="lg:hidden flex justify-center items-center">

         <div id="drawer-example"
             class="fixed sm:!w-[50%] !w-screen top-0 left-0 z-40 h-screen overflow-y-auto transition-transform translate-y-full md:w-80 w-screen bg-white"
             tabindex="-1" aria-labelledby="drawer-label">

             <header
                 class="min-h-[70px] border-b border-gray-400 flex justify-between px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10 items-center">
                 <span class="text-lg font-semibold">Categorías</span>
                 <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                     class="">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                     </svg>
                     <span class="sr-only">Close menu</span>
                 </button>
             </header>
             <section class="text-lg flex flex-col items-start justify-start" id="container-categories-mobile">
                 <button id="moda-mujer"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Moda
                     Mujer
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="moda-hombre"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Moda
                     Hombre
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="jardin"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Hogar
                     y
                     Jardín
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="salud-belleza"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Salud
                     y Belleza
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="coleccionable-arte"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Coleccionable
                     y Arte
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="bolsos"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Bolsos
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
                 <button id="joyeria"
                     class="border-b border-gray-500 py-3 w-full p-4 py-5 text-start active:bg-gray-200 flex justify-between items-center">Joyería
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="#000" fill-rule="evenodd"
                             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12L7.72 5.03a.75.75 0 0 1 1.06-1.06z"
                             clip-rule="evenodd" />
                     </svg>
                 </button>
             </section>
         </div>

         <div id="drawer-category-selected"
             class="sm:!w-[50%] !w-screen fixed top-0 left-0 z-40 h-screen overflow-y-auto transition-transform md:w-80 w-screen transition-all translate-y-full bg-white">
             <header
                 class="min-h-[70px] border-b border-gray-400 flex justify-between px-4 py-2 sticky top-0 bg-white mb-5 shadow-lg shadow-black/10 items-center">
                 <span id="title-drawer-category-selected" class="text-lg font-semibold"></span>
                 <button id="close-drawer-category-selected">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                         <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                     </svg>
                 </button>
             </header>
             <section class="text-lg">
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-moda-mujer">
                     <span>moda-mujer</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-moda-hombre">
                     <span>moda-hombre</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-jardin">
                     <span>jardín</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-salud-belleza">
                     <span>salud-belleza</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-coleccionable-arte">
                     <span>coleccionable-arte</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-bolsos">
                     <span>bolsos</span>
                 </div>
                 <div class="category-selected hidden text-gray-500 min-h-[50dvh] grid place-items-center"
                     id="section-joyeria">
                     <span>joyería</span>
                 </div>
             </section>
         </div>

     </div>
 </div>
 <!-- end categorías -->


 <script>
     const drawerNavbarMobile = () => {

         const drawerNavbarMobile = document.querySelector('#drawer-navbar-mobile')

         document.querySelector('#btn-drawer-navbar-mobile').addEventListener('click', () => {
             drawerNavbarMobile.classList.remove('-translate-x-full')
             drawerNavbarMobile.classList.add('translate-x-0')
             drawerNavbarMobile.querySelector('.overlay').classList.remove('opacity-0')
             drawerNavbarMobile.querySelector('.overlay').classList.add('opacity-100')
         })


         drawerNavbarMobile.querySelector('#close-drawer-navbar-mobile').addEventListener('click', () => {

             drawerNavbarMobile.querySelector('.overlay').classList.add('opacity-0')
             drawerNavbarMobile.querySelector('.overlay').classList.remove('opacity-100')
             drawerNavbarMobile.classList.add('-translate-x-full')
             drawerNavbarMobile.classList.remove('translate-x-0')
         })
     }
     drawerNavbarMobile()


     const categoriesMobile = () => {
         const drawerSelected = document.querySelector('#drawer-category-selected')

         const handleCloseButtonDrawer = () => {
             const $buttonCloseDrawer = drawerSelected.querySelector('#close-drawer-category-selected')

             $buttonCloseDrawer.addEventListener('click', () => {
                 drawerSelected.classList.add('translate-y-full')
                 drawerSelected.classList.remove('translate-y-[0]')
             })

         }

         handleCloseButtonDrawer()

         document.querySelectorAll('#container-categories-mobile button').forEach($btn => {
             $btn.addEventListener('click', () => {
                 const categorySelected = $btn.id

                 drawerSelected.querySelectorAll('section .category-selected').forEach($e => {
                     $e.classList.add('hidden')
                 })

                 drawerSelected.querySelector('#title-drawer-category-selected').textContent = $btn
                     .textContent

                 drawerSelected.classList.remove('translate-y-full')
                 drawerSelected.classList.add('translate-y-[0]')
                 drawerSelected.querySelector(`#section-${categorySelected}`).classList.remove(
                     'hidden')

             })
         })
     }
     categoriesMobile()



     //
     const handleFormSubmit = () => {


         const $formSearch = document.getElementById('form-search-navbar');
         const $resultsContainer = $formSearch.querySelector('#results-container');
         const clearBtn = $formSearch.querySelector('#btn-clear')
         const submitBtn = $formSearch.querySelector('#btn-submit')

         const debounce = (fn, delay = 1000) => {
             let timerId = null;
             return (...args) => {
                 clearTimeout(timerId);
                 timerId = setTimeout(() => fn(...args), delay);
             };
         };


         const onInput = debounce(console.log, 500);


         const resetForm = () => {

             clearBtn.addEventListener('click', () => {
                 $formSearch.reset()
                 $resultsContainer.classList.add('hidden')
                 $formSearch.querySelector('input').focus({
                     preventScroll: true
                 })
                 clearBtn.classList.add('hidden')
                 submitBtn.classList.remove('hidden')
             })

         }

         resetForm()

         const showResults = () => {

             const value = $formSearch.querySelector('input').value;
             const existValue = value.trim().length > 0

             $resultsContainer.classList[existValue ? 'remove' : 'add']('hidden')

             onInput(value)

             let results = ''

             Array(10).fill('result').forEach((_, i) => {
                 results += `<li><a href="http://localhost:5500/src/home.html" class="group inline-block w-full hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300 focus-within:bg-gray-300 focus-visible:bg-gray-300">
      <div class="flex items-center justify-between p-2 rounded">
        <span class="flex items-center gap-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
          </svg>
          ${_} ${i + 1}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
          <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m19.5 19.5l-15-15m0 0v11.25m0-11.25h11.25" />
        </svg>
      </div>
      <hr class="border group-last:border-transparent border-gray-200 group-hover:border-transparent">
    </a></li>`
             })

             $resultsContainer.innerHTML = results

             clearBtn.classList[existValue ? 'remove' : 'add']('hidden')
             submitBtn.classList[existValue ? 'add' : 'remove']('hidden')

             const keyboardFocusLink = () => {
                 const enlaces = $resultsContainer.querySelectorAll('ul li a');

                 let index = -1;

                 enlaces.forEach((enlace, i) => {
                     enlace.addEventListener('keydown', function(event) {
                         if (event.key === 'ArrowDown') {
                             index = (i + 1) % enlaces.length;
                             enlaces[index].focus();
                             event.preventDefault();
                         } else if (event.key === 'ArrowUp') {
                             index = (i - 1 + enlaces.length) % enlaces.length;
                             enlaces[index].focus();
                             event.preventDefault();
                         }
                     });
                 });
             }

             keyboardFocusLink()
         }


         const searchInput = () => {

             $formSearch.addEventListener('submit', (e) => {
                 e.preventDefault();

                 // const value = $formSearch.querySelector('input').value;
                 // if (value.trim().length > 0) showResults()
             });

             $formSearch.querySelector('input').addEventListener('input', showResults)

             $formSearch.querySelector('input').addEventListener('blur', () => {
                 if (!$resultsContainer.classList.contains('hidden')) {
                     $resultsContainer.classList.add('hidden')
                 }
             })
         }

         searchInput()

         const searchInputMobile = () => {
             const $searchInput = document.getElementById('search-input-mobile')
             const $resultsContainerMobile = document.querySelector('#results-container-mobile')


             $searchInput.querySelector('#input-search').addEventListener('input', e => {

                 const existValue = e.target.value.trim().length <= 2
                 $resultsContainerMobile.classList[existValue ? 'add' : 'remove']('hidden')

                 onInput(e.target.value)

                 let results = ''

                 Array(8).fill('result').forEach((_, i) => {
                     results += `<li class="hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300"><a  tabindex="${i + 1}" href="#" class="group hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300 ">
      <div class="flex items-center justify-between p-2 rounded">
        <span class="flex items-center gap-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
          </svg>
          ${_} ${i + 1}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
          <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m19.5 19.5l-15-15m0 0v11.25m0-11.25h11.25" />
        </svg>
      </div>
      <hr class="border group-last:border-transparent border-gray-200 group-hover:border-transparent">
    </a></li>`
                 })

                 $resultsContainerMobile.innerHTML = results
             })

             document.getElementById('btn-search-input-mobile').addEventListener('click', e => {
                 $searchInput.classList.remove('-translate-x-full')
                 $searchInput.classList.add('translate-none')

                 $searchInput.querySelector('#input-search').focus()
             })

             $searchInput.querySelector('button').addEventListener('click', () => {
                 $resultsContainerMobile.classList.add('hidden')
                 $searchInput.classList.add('-translate-x-full')
                 $searchInput.classList.remove('translate-none')
                 $searchInput.querySelector('#input-search').value = ''
             })
         }
         searchInputMobile()

     }
     handleFormSubmit()
 </script>
