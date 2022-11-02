<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('layouts.styles')
        @include('layouts.scripts')
    </head>
    <body>
        @include('layouts.navbar')

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @include('layouts.footer')

        <!-- Scripts -->
        <!-- Jquery JS -->
        <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>

        <!-- Slick Carousel JS -->
        <script type="module" src="{{ asset('vendors/slick/slick.min.js') }}"></script>

        <!-- Main JS -->
        <script type="module" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
