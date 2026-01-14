<x-main-layout class="bg-blue-700">
    <div x-data="{ title: 'Matrimonios' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class="text-3xl font-bold text-blue-800 flex items-center gap-3">
                        <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                        Matrimonios Civiles
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-lg text-blue-700 flex items-center gap-2">
                        <i class="fas fa-ring text-blue-400"></i>
                        Trámite presencial y requisitos legales
                    </div>
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-3xl mt-4 px-4 mx-auto">
                        <!-- Modern Tabs -->
                        <div
                            class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly bg-white/80 rounded-t-xl shadow"
                            role="tablist" aria-label="tab options"
                        >
                            <button @click="selectedTab = 'requirements'"
                                :aria-selected="selectedTab === 'requirements'"
                                :tabindex="selectedTab === 'requirements' ? '0' : '-1'"
                                :class="selectedTab === 'requirements'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-4 py-2 text-md rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelRequirements">
                                Artículo 66
                            </button>
                            <button @click="selectedTab = 'special'"
                                :aria-selected="selectedTab === 'special'"
                                :tabindex="selectedTab === 'special' ? '0' : '-1'"
                                :class="selectedTab === 'special'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-4 py-2 text-md rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelSpecial">
                                Casos especiales Art.66
                            </button>
                            <button @click="selectedTab = 'article'"
                                :aria-selected="selectedTab === 'article'"
                                :tabindex="selectedTab === 'article' ? '0' : '-1'"
                                :class="selectedTab === 'article'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-4 py-2 text-md rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpaneArticle">
                                Artículo 70
                            </button>
                            <button @click="selectedTab = 'specialtwo'"
                                :aria-selected="selectedTab === 'specialtwo'"
                                :tabindex="selectedTab === 'specialtwo' ? '0' : '-1'"
                                :class="selectedTab === 'specialtwo'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-4 py-2 text-md rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelSpecialtwo">
                                Casos especiales Art.70
                            </button>
                            <button @click="selectedTab = 'info'"
                                :aria-selected="selectedTab === 'info'"
                                :tabindex="selectedTab === 'info' ? '0' : '-1'"
                                :class="selectedTab === 'info'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-4 py-2 text-md rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelInfo">
                                Información Importante
                            </button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'requirements'" id="tabpanelRequirements" role="tabpanel" aria-label="requirements" class="text-center">
                                <ul class="max-w-3xl text-md font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Imprimir y llenar el Formato (En Letra Molde Legible)  <br> <a href="{{ asset('assets/docs/civil-registry/matrimonios.pdf') }}" target="_blank" class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar </a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Presentar constancia de residencia de algunos de los contrayentes (Condominio o Consejo Comunal)</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Presentar original y 2 copias de las cédulas de identidad de los contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Partidas de nacimiento originales y copias de ambos contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Cartas de soltería de ambos contrayentes.<br/><a href="{{ asset('assets/docs/civil-registry/carta-de-solteria-matrimonios.pdf') }}" target="_blank" class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar </a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">6.- Descargar e Imprimir el Acta de Esponsalicia.<br/><a href="{{ asset('assets/docs/civil-registry/acta-eponsalicia.pdf') }}" target="_blank" class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar </a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">7.- Copias de las Cédulas de Identidad de dos testigos, mayores de 21 años de edad, venezolanos. (No pueden ser los padres)</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'special'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelSpecial" role="tabpanel" aria-label="special" class="text-center">
                                <ul class="max-w-3xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Adolescente además de los requisitos antes mencionados deberá consignar:<br>
                                        - La carta de soltería debe estar notariada.<br>
                                        - Copia de las Cédulas de Identidad de los representantes legales los cuales deben estar presente obligatoriamente el día del acto.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Divorciado o Viudo además de los requisitos antes mencionados deberá consignar:<br>
                                        - Copia certificada de la sentencia de divorcio en lugar de la carta de Soltería.<br>
                                        - Curatela en caso de tener hijos menores de edad (Art. 110 del Código Civil)
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Extranjero, además de los requisitos antes mencionados deberá consignar:<br>
                                        - Original y copia del pasaporte.<br>
                                        - Partida de nacimiento debidamente legalizada, Apostillada y traducida al español.
                                    </li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'article'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpaneArticle" role="tabpanel" aria-label="article" class="text-center">
                                <ul class="max-w-3xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        1.- Imprimir y llenar el Formato (En Letra Molde Legible)  <br/>
                                        <a href="{{ asset('assets/docs/civil-registry/matrimonios.pdf') }}" target="_blank" class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar </a>
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        2.- Presentar constancia de residencia de algunos de los contrayentes (Condominio o Consejo Comunal)
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        3.- Presentar original y 2 copias de las cédulas de identidad de los contrayentes.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        4.- Partidas de nacimiento originales y copias de ambos contrayentes.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        5.- Copias de las Cédulas de Identidad de los testigos mayores de edad, venezolanos. (No pueden ser los padres)
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        6- Copia de constancia de CONCUBINATO o UNIÓN ESTABLE DE HECHO.
                                    </li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'specialtwo'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelSpecialtwo" role="tabpanel" aria-label="specialtwo" class="text-center">
                                <ul class="max-w-3xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Adolescente además de los requisitos antes mencionados deberá consignar:<br>
                                        <br>- Copia de las Cédulas de Identidad de los representantes legales los cuales deben estar presente obligatoriamente el día del acto.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Divorciado o Viudo además de los requisitos antes mencionados deberá consignar:<br>
                                        <br>- Copia certificada de la sentencia de divorcio o del acta de defunción.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        * Si uno o ambos de los contrayentes es Extranjero, además de los requisitos antes mencionados deberá consignar:<br>
                                        <br>- Original y copia del pasaporte.<br>
                                        - Partida de nacimiento debidamente legalizada, Apostillada y traducida al español.<br>
                                        - Carta de soltería legalizada (todos los documentos traducidos al español)
                                    </li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'info'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center">
                                <ul class="max-w-3xl text-lg font-black text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        Los requisitos para Matrimonios deberán ser consignados por lo menos con quince (15) días de antelación a la realización del acto para su verificación. Y previa reservación de la fecha del acto.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
                        <a href="{{ route('app.civil-registry') }}"
                            class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 sm:px-6 px-4 sm:py-3 py-2 sm:text-lg text-base font-semibold tracking-wide text-slate-100 transition hover:opacity-80 hover:scale-105 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed shadow w-full sm:w-auto">
                            <i class="fas fa-arrow-left mr-2"></i> Regresar
                        </a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>
