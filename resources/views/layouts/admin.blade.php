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
        <script src="{{ asset('vendor/ckeditor5/build/ckeditor.js') }}"></script>
        <!-- Scripts -->
        @vite(['resources/css/custom.css','resources/css/app.css', 'resources/js/app.js','public/vendor/ckeditor5/sample/styles.css'])

        <!-- Styles -->
        @livewireStyles
        @stack('styles')
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-white dark:bg-white">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-blue-900 dark:bg-blue-900 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
                    {{ $header }}
                </div>
            </header>
            @endif
            <x-banner />
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @stack('scripts')
        @livewireScripts
    </body>
</html>
