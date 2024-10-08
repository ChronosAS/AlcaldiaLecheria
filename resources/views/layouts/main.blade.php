<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- X feed -->
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <!-- Icon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
        <!-- FontAwesome icons -->
        <script src="https://kit.fontawesome.com/7d5a02dee9.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> --}}

        <!-- Scripts -->
        @viteReactRefresh
        @vite(['resources/css/app.css','resources/css/components.css','resources/js/app.jsx'])
        @stack('styles')
        <!-- Styles -->
        @livewireStyles
    </head>
    <body {{ $attributes->merge(['class'=>'bg-gray-500 h-full']) }} x-data="{}">
        @livewire('main-nav')
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-blue-900 shadow m-auto" >
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between sm:items-center sm:justify-center">
                <span class="flex flex-wrap items-center sm:text text-white sm:text-center  mx-12">
                    Copyright © Alcaldía de Lechería 2024
                </span>
                <ul class="flex flex-wrap items-center mt-3  font-medium text-white sm:text-center">
                    <li><a href="{{ route('login') }}" class="hover:underline me-4 md:me-6">Admin</a></li>
                </ul>
            </div>
        </footer>
        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
