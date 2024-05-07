<a {{ $attributes->merge(['class'=>'px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white']) }}>
    {{--
        btn-1 => border rounded-s-lg
        btn-2 => border-t border-b
        btn-3 => border rounded-e-lg
    --}}
    {{ $slot }}
</a>
