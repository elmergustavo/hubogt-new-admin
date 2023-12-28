<!DOCTYPE html>
{{-- <html lang="en" data-sidenav-view="{{ $sidenav ?? 'default' }}"> --}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css')

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body>

    <!--============================
        HEADER START
    ==============================-->
    @include('frontend.layouts.header')
    <!--============================
        HEADER END
    ==============================-->



    <main class="">

        {{-- @include('layouts.shared/page-title', [
                    'title' => $title,
                    'sub_title' => $sub_title,
                ]) --}}

        @yield('content')

    </main>

    @include('frontend.layouts.footer')




    {{-- @include('layouts.shared/customizer') --}}

    @include('layouts.shared/footer-scripts')



    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])

</body>


</html>
