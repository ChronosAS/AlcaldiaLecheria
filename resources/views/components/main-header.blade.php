@props(
    [
        'bg_img',
    ]
)

<header id="header1" class="pt-40 pb-56 xl:bg-cover  relative overflow-hidden h-full bg-no-repeat bg-center" style="background-image: url('{{ $bg_img }}')">
    <div class="text-white text-center sm:absolute  sm:bottom-0 sm:right-0 sm:m-6 px-6 md:px-12 font-sans font-black">
        {{ $slot }}
    </div>
    <div class=" sm:absolute   bg-gray-600/50    object-scale-down justify-items-center mt-20 sm:mt-0">
        <x-weather-widget/>
    </div>
</header>
