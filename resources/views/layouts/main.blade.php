<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

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
    <body class="bg-gray-500">
        @livewire('main-nav')
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>
        <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
            </div>
        </div>
        </section>
        <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    Copyright © Alcaldía de Lechería 2024
                </span>
                 <div class="">
                        <a class="btn btn-md p-2 text-white" href="https://twitter.com/Urbanejalcaldia" target="_blank" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a class="btn btn-md p-2 text-gray-200" href="https://www.instagram.com/alcaldiadelecheria/"target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-md p-2 text-red-500" href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
        </footer>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
