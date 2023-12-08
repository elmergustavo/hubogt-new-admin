@extends('layouts.home', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex justify-center items-center mt-8">
        <div class="max-w-3xl text-center">
            <img src="assets/mantenimiento.svg" alt="En Mantenimiento" />
            <p>Aún estamos contruyendo este modulo ¡Vuelve pronto!</p>
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
