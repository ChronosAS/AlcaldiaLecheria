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
    <body {{ $attributes->merge(['class'=>'bg-gray-500 h-full']) }} x-data="{ showBar: false }">
        @livewire('main-nav')
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-white shadow m-auto dark:bg-white">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between sm:items-center sm:justify-center">
                <span class="flex flex-wrap items-center sm:text text-gray-500 sm:text-center dark:text-gray-400 mx-12">
                    Copyright © Alcaldía de Lechería 2024
                </span>
                <ul class="flex flex-wrap items-center mt-3  font-medium text-gray-500 dark:text-gray-400 sm:text-center">
                    <li><a href="{{ route('login') }}" class="hover:underline me-4 md:me-6">Admin</a></li>
                </ul>
            </div>
        </footer>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
