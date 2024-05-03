<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Icon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
        <!-- FontAwesome icons -->
        <script src="https://kit.fontawesome.com/7d5a02dee9.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/css/components.css','resources/js/app.js'])
        @stack('styles')
        <!-- Styles -->
        @livewireStyles
    </head>
    <body {{ $attributes->merge(['bg-gray-500 h-full']) }}>
        <main>
            {{ $slot }}
        </main>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
