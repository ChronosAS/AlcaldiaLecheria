<header {{ $attributes->merge(['class' => 'bg-blue-900 dark:bg-blue-900 shadow']) }}>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $slot }}
        </h2>
    </div>
</header>
