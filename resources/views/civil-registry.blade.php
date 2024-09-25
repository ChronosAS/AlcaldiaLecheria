<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Registro Civil' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div x-data="{ tab: 'Registro Civil'}" class=" mx-auto max-w-7xl ">
            <ul
                class="flex flex-wrap -mb-px  font-medium text-center items-center gap-y-4 sm:justify-between justify-evenly"
                id="civil-registry-tab"
                data-tabs-toggle="#civil-registry-tab-content"
                role="tablist"
                data-tabs-active-classes="hover:border-blue-500 hover:border-blue-400 border-blue-700"
                data-tabs-inactive-classes="border-transparent hover:border-blue-500 hover:border-blue-300 border-blue-700 hover:border-blue-300">
                <li class="pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Historia'"  class="inline-block  " id="history-tab" data-tabs-target="#history"  role="tab" aria-controls="history" aria-selected="false">   
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/conducta.webp')}}"/>
                    </a>
                </li>
                <li class="pb-0 p-2  hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Himno'" class="inline-block " id="hymn-tab" data-tabs-target="#hymn"  role="tab" aria-controls="hymn" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/fe-de-vida.webp')}}"/>
                    </a>
                </li>
                <li class="pb-0 p-2  hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Escudo'" class="inline-block " id="shield-tab" data-tabs-target="#shield"  role="tab" aria-controls="shield" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/matrimonios-70.webp')}}"/>
                    </a>
                </li>
                <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Bandera'" class="inline-block  " id="flag-tab" data-tabs-target="#flag"  role="tab" aria-controls="flag" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/matrimonios.webp')}}"/>
                    </a>
                </li> 
                 <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Bandera'" class="inline-block  " id="flag-tab" data-tabs-target="#flag"  role="tab" aria-controls="flag" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/mudanza.webp')}}"/>
                    </a>
                </li> 
                 <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Bandera'" class="inline-block  " id="flag-tab" data-tabs-target="#flag"  role="tab" aria-controls="flag" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/nac.webp')}}"/>
                    </a>
                </li> 
                 <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Bandera'" class="inline-block  " id="flag-tab" data-tabs-target="#flag"  role="tab" aria-controls="flag" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/residencia.webp')}}"/>
                    </a>
                </li> 
                 <li class=" pb-0 p-2 hover:border-blue-900  border-transparent border-4" role="presentation">
                    <a @click="title = 'Bandera'" class="inline-block  " id="flag-tab" data-tabs-target="#flag"  role="tab" aria-controls="flag" aria-selected="false">
                        <img class="sm:min-w-[17rem] sm:min-h-[13rem] sm:max-w-[17rem] sm:max-h-[13rem] min-w-[7rem] min-h-[3rem] max-w-[9rem] max-h-[6rem]" src="{{asset('assets/img/civil-registry/solteria.webp')}}"/>
                    </a>
                </li> 
            </ul>
        </div>
        <div id="civil-registry-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="history" role="tabpanel" aria-labelledby="history-tab">
                <x-info.history/>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="hymn" role="tabpanel" aria-labelledby="hymn-tab">
                <x-info.hymn/>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="shield" role="tabpanel" aria-labelledby="shield-tab">
                <x-info.shield/>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="flag" role="tabpanel" aria-labelledby="flag-tab">
                <x-info.flag/>
            </div>
        </div>
    </div>
</x-main-layout>
