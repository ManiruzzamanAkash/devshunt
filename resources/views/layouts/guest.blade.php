<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.meta')
        @include('layouts.styles')
        @include('layouts.scripts')
    </head>
    <body>
        @include('layouts.navbar')

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @include('layouts.footer')
    </body>
</html>
