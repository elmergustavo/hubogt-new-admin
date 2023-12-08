<!DOCTYPE html>
{{-- <html lang="en" data-sidenav-view="{{ $sidenav ?? 'default' }}"> --}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css')
</head>

<body>

    <div class="">

        {{-- @include('layouts.shared/sidebar') --}}

        <div class="page-content">

            @include('layouts.shared/topbar')

            <main class="">

                {{-- @include('layouts.shared/page-title', [
                    'title' => $title,
                    'sub_title' => $sub_title,
                ]) --}}

                @yield('content')

            </main>

            @include('layouts.shared/footer')

        </div>

    </div>

    {{-- @include('layouts.shared/customizer') --}}

    @include('layouts.shared/footer-scripts')

    @vite(['resources/js/app.js'])

</body>


</html>
