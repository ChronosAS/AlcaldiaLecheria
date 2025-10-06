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
        <style>
            /* Hide vertical scrollbar but allow scrolling */
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .no-scrollbar {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }
        </style>
    </head>
    <body 
        x-data="{}" 
        {{ $attributes->merge(['class'=>'bg-blue-800 h-full [&::-webkit-scrollbar]:hidden']) }}
    >
        @livewire('main-nav')
        <main >
            {{ $slot }}
        </main>
        <footer class="bg-blue-900/90 text-gray-100 text-center">
            <div class="max-w-screen-xl mx-auto px-4 py-6 flex flex-col items-center justify-center gap-4">
                <span class="text-md text-gray-100 text-center">
                    Copyright © {{ date('Y') }} Alcaldía de Lechería. G-20001136-0. Todos los derechos reservados.
                </span>
                <ul class="flex space-x-4 justify-center border-t">
                    {{-- <li>
                        <a href="{{ route('login') }}" class="text-gray-200 hover:text-white text-md transition hidden">Admin</a>
                    </li> --}}
                    <li>
                        <a href="https://x.com/Urbanejalcaldia" target="_blank" class="text-gray-300 hover:text-black transition text-xl">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/alcaldiadelecheria/" target="_blank" class="text-gray-300 transition text-xl">
                            <i class="fab fa-instagram hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  rounded"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" class="text-gray-300 hover:text-red-400 transition text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
