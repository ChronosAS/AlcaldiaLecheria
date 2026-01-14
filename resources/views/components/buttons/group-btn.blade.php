<button {{ $attributes->merge(['class'=>'px-4 py-2 text-sm font-medium  border rounded-e-lg focus:z-10 focus:ring-2 bg-gray-800 border-gray-700 text-white hover:text-white hover:bg-gray-700 focus:ring-blue-500 focus:text-white']) }} type="button" >
    {{ $slot }}
</button>
