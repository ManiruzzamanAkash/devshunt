<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

         <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">

        <!-- Font Awesome icons -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }}">

        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
