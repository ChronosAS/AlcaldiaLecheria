<x-main-layout class="bg-white">
    <div x-data="{ title: 'Registro Civil' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="mx-auto max-w-6xl">
            <ul
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 py-12"
                id="civil-registry-tab"
            >
                @php
                    $tramites = [
                        
                        ['route' => 'app.civil-reg.fe-de-vida', 'img' => 'fe-de-vida.webp', 'label' => 'Fe de Vida'],
                        ['route' => 'app.civil-reg.matri', 'img' => 'matrimonios.webp', 'label' => 'Matrimonios'],
                        ['route' => 'app.civil-reg.mudanza', 'img' => 'mudanza.webp', 'label' => 'Mudanza'],
                        ['route' => 'app.civil-reg.nacimientos', 'img' => 'nac.webp', 'label' => 'Nacimientos'],
                        ['route' => 'app.civil-reg.residencia', 'img' => 'residencia.webp', 'label' => 'Residencia'],
                        ['route' => 'app.civil-reg.solteria', 'img' => 'solteria.webp', 'label' => 'Soltería'],
                        ['route' => 'app.civil-reg.union', 'img' => 'union.webp', 'label' => 'Unión Estable'],
                        ['route' => 'app.civil-reg.defunciones', 'img' => 'defunciones.webp', 'label' => 'Defunciones'],
                    ];
                @endphp
                @foreach($tramites as $tramite)
                <li class="group transition-all duration-300 p-2 rounded-2xl border-2 border-transparent hover:border-blue-700 hover:bg-blue-50/60 shadow hover:shadow-xl">
                    <a href="{{ route($tramite['route']) }}" class="flex flex-col items-center gap-2 cursor-pointer">
                        <img 
                            class="transition-transform duration-300 rounded-xl shadow-md border-2 border-blue-200 group-hover:scale-105 group-hover:shadow-lg bg-white
                                sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem]
                                min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]"
                            src="{{ asset('assets/img/civil-registry/' . $tramite['img']) }}"
                            alt="{{ $tramite['label'] }}"
                        />
                        <span class="mt-2 text-lg font-semibold text-blue-900 group-hover:text-blue-700 transition-colors text-center">{{ $tramite['label'] }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-main-layout>
