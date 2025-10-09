<x-main-layout class="bg-blue-700">
    <div x-data="{ title: 'Registro Civil' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="mx-auto max-w-6xl">
            <div class="text-center ">
                <h1 class="section-heading text-uppercase text-[2.5rem] font-extrabold tracking-wide text-white drop-shadow-lg">
                    Tramites
                </h1>
            </div>
            <ul
                class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 px-2 py-3"
                id="civil-registry-tab"
            >
                @php
                    $tramites = [

                        ['route' => 'app.civil-reg.fe-de-vida', 'img' => 'fe-de-vida.webp', 'label' => 'Fe de Vida'],
                        ['route' => 'app.civil-reg.matri', 'img' => 'matrimonios.webp', 'label' => 'Matrimonios'],
                        ['route' => 'app.civil-reg.mudanza', 'img' => 'mudanza.webp', 'label' => 'Mudanza'],
                        ['route' => 'app.civil-reg.nacimientos', 'img' => 'nacimientos.webp', 'label' => 'Nacimientos'],
                        ['route' => 'app.civil-reg.residencia', 'img' => 'residencia.webp', 'label' => 'Residencia'],
                        ['route' => 'app.civil-reg.solteria', 'img' => 'solteria.webp', 'label' => 'Soltería'],
                        ['route' => 'app.civil-reg.union', 'img' => 'union.webp', 'label' => 'Unión Estable'],
                        ['route' => 'app.civil-reg.defunciones', 'img' => 'defunciones.webp', 'label' => 'Defunciones'],
                    ];
                @endphp
                @foreach($tramites as $tramite)
                <a href="{{ route($tramite['route']) }}"
                   class="group cursor-pointer  transition-all duration-300 rounded-2xl border-2 border-transparent flex flex-col justify-center items-center "
                   style="text-decoration: none;">
                    <img
                        class="transition-transform duration-300  shadow-md border-2 border-blue-200 sm:group-hover:scale-105 group-hover:shadow-lg bg-white"
                        src="{{ asset('assets/img/civil-registry/' . $tramite['img']) }}"
                        alt="{{ $tramite['label'] }}"
                    />
                    {{-- <span class="mt-2 text-lg sm:text-xl font-semibold text-blue-900 group-hover:text-blue-700 transition-colors text-center">
                       Trámite de {{ $tramite['label'] }}
                    </span> --}}
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</x-main-layout>
