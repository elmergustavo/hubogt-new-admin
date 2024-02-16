<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @filamentStyles
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class=" antialiased">
    {{-- <x-banner /> --}}

    <div class="">
        {{-- @livewire('navigation-menu') --}}
        @include('frontend.layouts.new-header')

        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}

            @yield('content')
        </main>

        @include('frontend.layouts.new-footer')
    </div>


    @filamentScripts
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
