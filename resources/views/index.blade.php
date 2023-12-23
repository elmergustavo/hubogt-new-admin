@extends('layouts.home', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex justify-center items-center mt-8">
        <div class="max-w-3xl text-center">
            <img src="assets/mantenimiento.svg" alt="En Mantenimiento" />
            <p>Aún estamos contruyendo este modulo ¡Vuelve pronto!</p>
        </div>
    </div>


    <div class="flex items-center justify-center h-full">
        <div class="swiper" id="swiper_one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-content">
                        <div class="text-center w-3/5 mx-auto">
                            <img src="assets/images/hero/saas1.png" class="w-full" />
                        </div>
                        <div class="text-center my-6 pb-12">
                            <h5 class="font-medium text-base/[1.6] text-gray-600 my-2.5">Manage your saas business with ease
                            </h5>
                            <p class="text-sm/[1.6] text-gray-500 mb-4">Make your saas application
                                stand out with high-quality landing page
                                designed and developed by
                                professional.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide End -->
                <div class="swiper-slide">
                    <div class="swiper-slide-content">
                        <div class="text-center w-3/5 mx-auto">
                            <img src="assets/images/hero/saas2.png" class="w-full" />
                        </div>
                        <div class="text-center my-6 pb-12">
                            <h5 class="font-medium text-base/[1.6] text-gray-600 my-2.5">The best way to showcase your
                                mobile app</h5>
                            <p class="text-sm/[1.6] text-gray-500">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide End -->
                <div class="swiper-slide">
                    <div class="swiper-slide-content">
                        <div class="text-center w-3/5 mx-auto">
                            <img src="assets/images/hero/saas3.png" class="w-full" />
                        </div>
                        <div class="text-center my-6 pb-12">
                            <h5 class="font-medium text-base/[1.6] text-gray-600 my-2.5">Smart Solution that convert Lead to
                                Customer</h5>
                            <p class="text-sm/[1.6] text-gray-500">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide End -->
            </div>
            <!-- swiper-wrapper End -->
            <div class="swiper-pagination !bottom-0"></div>
        </div>
    </div>

    <div class="border-[16px] border-[#84CDE4] border-opacity-25">
        <div class="bg-white px-8 py-10 flex flex-col justify-center items-center">
            <h1 class="font-bold text-2xl">Buho Vendedores</h1>

            <p class="max-w-xl text-center">
                Buho es un marketplace que ha estado potenciando a los pequeños
                negocios ¿Quieres vender en Buhogt? Abre un puesto y y empieza a
                vender.
            </p>

            <div class="flex gap-3 text-sm font-semibold mt-6">
                <button class="px-4 py-2 text-white bg-[#272B60]">Comenzar a vender</button>
                <button class="px-4 py-2 border-2 border-black">Requisitos para vender</button>
            </div>
        </div>
    </div>
@endsection
