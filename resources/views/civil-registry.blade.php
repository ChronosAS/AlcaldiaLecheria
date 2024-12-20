<x-main-layout class="bg-white">
    <div x-data="{ title: 'Registro Civil' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div  class=" mx-auto max-w-7xl ">
            <ul
                class="flex flex-wrap -mb-px  font-medium text-center items-center gap-y-4 sm:justify-evenly justify-evenly xl:pl-10 xl:pr-10 2xl:pl-5 2xl:pr-5 py-10"
                id="civil-registry-tab">
                <li class="pb-0 p-2    border-transparent border-4 rounded-lg" >
                    <a  href="{{ route('app.civil-reg.fe-de-vida') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition">
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class="  rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/fe-de-vida.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class=" pb-0 p-2   border-transparent border-4 rounded-lg" >
                    <a  href="{{ route('app.civil-reg.matri') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition">
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/matrimonios.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class=" pb-0 p-2   border-transparent border-4 rounded-lg" >
                    <a href="{{ route('app.civil-reg.mudanza') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition " >
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/mudanza.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class=" pb-0 p-2   border-transparent border-4 rounded-lg " >
                    <a href="{{ route('app.civil-reg.nacimientos') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition " >
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem] " src="{{asset('assets/img/civil-registry/nac.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>    
                    </a>
                </li>
                <li class=" pb-0 p-2   border-transparent border-4 rounded-lg" >
                    <a href="{{ route('app.civil-reg.residencia') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition" >
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/residencia.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class=" pb-0 p-2   border-transparent border-4 rounded-lg" >
                    <a href="{{ route('app.civil-reg.solteria') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition" >
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/solteria.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class="pb-0 p-2   border-transparent border-4 rounded-lg" >
                    <a   href="{{ route('app.civil-reg.union') }}" class="inline-block cursor-pointer hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition">
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem]  sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/union.webp')}}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
                <li class="pb-0 p-2   border-transparent border-4 rounded-lg " >
                    <a   href="{{ route('app.civil-reg.defunciones') }}" class="inline-block cursor-pointer  hover:-translate-y-1 hover:scale-110 ease-in-out duration-300 transition">
                        <div class=" rounded-lg relative isolate flex flex-col justify-end overflow-hidden">
                            <img class=" rounded-lg sm:min-w-[17rem]  sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{ asset('assets/img/civil-registry/defunciones.webp') }}"/>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/50 to-blue-700/50 opacity-[.20]"></div>
                        </div>
                    </a>
                </li>
            </ul>
            {{-- <h1 class="text-center text-3xl font-bold pt-16">Todas las citas y solicitudes de tramites se realizaran <br> de Lunes a Jueves de 8:00am a 11:30am</h1> --}}
        </div>
    </div>
</x-main-layout>
