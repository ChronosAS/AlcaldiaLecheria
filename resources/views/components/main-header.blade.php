@props(
    [
        'bg_img',
    ]
)

<header id="header1" {{ $attributes->merge(['class' => 'pt-40 pb-56 xl:bg-cover relative overflow-hidden h-full bg-no-repeat bg-center']) }} style="background-image: url('{{ $bg_img }}')">
    <div class="text-white text-center absoulte sm:absolute  sm:bottom-0 sm:right-0 sm:m-6 px-6 md:px-12 font-sans font-black">
        {{ $slot }}
    </div>
</header>
