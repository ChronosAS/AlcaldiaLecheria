<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-700 dark:hover:bg-white focus:bg-gray-50  active:bg-gray-300  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
