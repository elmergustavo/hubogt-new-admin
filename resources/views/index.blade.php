@extends('components.layouts.app')

@section('content')
    <div class="w-full bg-[#EBAF01]">
        <p class="text-center font-semibold text-white py-4">
            -20% de descuento con el código: BTR20
        </p>
    </div>

    @php
        $navIcons = [['src' => '/assets/icons/search.svg', 'alt' => 'search', 'href' => '/'], ['src' => '/assets/icons/like.svg', 'alt' => 'heart', 'href' => '/'], ['src' => '/assets/icons/user.svg', 'alt' => 'user', 'href' => '/login'], ['src' => '/assets/icons/card.svg', 'alt' => 'card', 'href' => '/login']];
    @endphp

    <header class="max-w-10xl mx-auto">
        <nav class="flex justify-between items-center px-6 md:px-20 py-4">
            <a href="/" class="flex items-center gap-1">
                <img src="/assets/logo/logo_horizontal.svg" alt="logo" width="180" height="180">

            </a>

            <div class="flex items-center gap-5 font-semibold">
                @foreach ($navIcons as $icon)
                    <a href="{{ $icon['href'] }}">
                        <img src="{{ $icon['src'] }}" alt="{{ $icon['alt'] }}" width="25" height="25"
                            class="object-contain">
                    </a>
                @endforeach
            </div>
        </nav>
    </header>




    @php
        $navLinks = [['href' => '/', 'key' => 'Inspiration', 'text' => 'Moda Mujer'], ['href' => '/', 'key' => 'Find Projects', 'text' => 'Moda Hombre'], ['href' => '/', 'key' => 'Learn Development', 'text' => 'Hogar & Jardín'], ['href' => '/', 'key' => 'Career Advancement', 'text' => 'Salud y Belleza'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Coleccionables y Arte'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Zapatos'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Joyería'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Cupones'], ['href' => '/', 'key' => 'Hire Developers', 'text' => 'Más']];
    @endphp

    <div class="bg-[#F5F5F5] w-full text-sm font-semibold text-center flex justify-center items-center">
        <nav class="p-4">
            <ul class="flex justify-between items-center space-x-10">
                @foreach ($navLinks as $link)
                    <li class="">
                        <a href="{{ $link['href'] }}" class="flex gap-1">
                            {{ $link['text'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection
