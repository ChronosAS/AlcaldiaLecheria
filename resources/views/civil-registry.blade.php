<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Registro Civil' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div  class=" mx-auto max-w-7xl ">
            <ul
                class="flex flex-wrap -mb-px  font-medium text-center items-center gap-y-4 sm:justify-evenly justify-evenly xl:pl-10 xl:pr-10 2xl:pl-5 2xl:pr-5 py-10"
                id="civil-registry-tab">
                <li class="pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a   href="{{ route('app.civil-reg.conducta') }}" class="inline-block cursor-pointer  " id="conduct-tab" >
                        <img class="sm:min-w-[17rem]  sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/conducta.webp')}}"/>
                    </a>
                </li>
                <li class="pb-0 p-2  hover:border-blue-900  border-transparent border-4" >
                    <a  href="{{ route('app.civil-reg.fe-de-vida') }}" class="inline-block cursor-pointer ">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/fe-de-vida.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a  href="{{ route('app.civil-reg.matri') }}" class="inline-block cursor-pointer  ">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/matrimonios.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a href="{{ route('app.civil-reg.mudanza') }}" class="inline-block cursor-pointer  " >
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/mudanza.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a href="{{ route('app.civil-reg.nacimientos') }}" class="inline-block cursor-pointer  " >
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/nac.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a href="{{ route('app.civil-reg.residencia') }}" class="inline-block cursor-pointer  " >
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/residencia.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a href="{{ route('app.civil-reg.solteria') }}" class="inline-block cursor-pointer  " >
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/solteria.webp')}}"/>
                    </a>
                </li>
                <li class="pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a   href="{{ route('app.civil-reg.union') }}" class="inline-block cursor-pointer  ">
                        <img class="sm:min-w-[17rem]  sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/union.webp')}}"/>
                    </a>
                </li>
                <li class="pb-0 p-2 hover:border-blue-900  border-transparent border-4" >
                    <a   href="{{ route('app.civil-reg.defunciones') }}" class="inline-block cursor-pointer  ">
                        <img class="sm:min-w-[17rem]  sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{ asset('assets/img/civil-registry/defunciones.webp') }}"/>
                    </a>
                </li>
            </ul>
            {{-- <h1 class="text-center text-3xl font-bold pt-16">Todas las citas y solicitudes de tramites se realizaran <br> de Lunes a Jueves de 8:00am a 11:30am</h1> --}}
        </div>
    </div>
</x-main-layout>
