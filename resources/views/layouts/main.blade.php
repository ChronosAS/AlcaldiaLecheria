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
    <body class="bg-gray-500 h-full ">
        
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>
        <footer class="bg-white shadow m-auto dark:bg-white">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between sm:items-center sm:justify-center">
                <span class="flex flex-wrap items-center sm:text text-gray-500 sm:text-center dark:text-gray-400 mx-12">
                    Copyright © Alcaldía de Lechería 2024
                </span>
                 <div class="m-2 text-center">
                        <a class="btn btn-md p-2 text-black dark:text-blak text-center sm:text-center border border-black border-solid rounded-border " href="https://twitter.com/Urbanejalcaldia" target="_blank" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a class="btn btn-md p-2 text-violet-400 dark:text-violet-400 text-center sm:text-center border border-black border-solid-black rounded-border" href="https://www.instagram.com/alcaldiadelecheria/"target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-md p-2 text-red-500  dark:text-red-500 text-center sm:text-center border border-black border-solid rounded-border" href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                <ul class="flex flex-wrap items-center mt-3  font-medium text-gray-500 dark:text-gray-400 sm:text-center">
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
