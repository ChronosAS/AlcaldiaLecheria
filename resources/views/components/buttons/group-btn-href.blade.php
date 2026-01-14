<a {{ $attributes->merge(['class'=>'px-4 py-2 text-sm font-medium  border  focus:z-10 focus:ring-2  bg-gray-800 border-gray-700 text-white hover:text-white hover:bg-gray-700 focus:ring-blue-500 focus:text-white']) }}>
    {{--
        btn-1 => border rounded-s-lg
        btn-2 => border-t border-b
        btn-3 => border rounded-e-lg
    --}}
    {{ $slot }}
</a>
