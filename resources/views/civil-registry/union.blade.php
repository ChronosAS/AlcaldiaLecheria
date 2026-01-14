<x-main-layout class="bg-blue-700">
    <div x-data="{ title: 'Unión Estable de Hecho' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class="text-3xl font-bold text-blue-800 flex items-center gap-3">
                        <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                        Unión Estable de Hecho
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-lg text-blue-700 flex items-center gap-2">
                        <i class="fas fa-users text-blue-400"></i>
                        Trámite presencial y requisitos obligatorios
                    </div>
                </x-slot>
                <x-slot name="content" class="center flex flex-col">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto items-center">
                        <div 
                            @keydown.right.prevent="$focus.wrap().next()" 
                            @keydown.left.prevent="$focus.wrap().previous()" 
                            class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly bg-white/80 rounded-t-xl shadow"
                            role="tablist" aria-label="tab options"
                        >
                            <button 
                                @click="selectedTab = 'requirements'" 
                                :aria-selected="selectedTab === 'requirements'" 
                                :tabindex="selectedTab === 'requirements' ? '0' : '-1'" 
                                :class="selectedTab === 'requirements' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300' 
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-blue-400 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelRequirements"
                            >
                                <i class="fas fa-list-ul mr-2"></i> Requisitos
                            </button>
                            <button 
                                @click="selectedTab = 'info'" 
                                :aria-selected="selectedTab === 'info'" 
                                :tabindex="selectedTab === 'info' ? '0' : '-1'" 
                                :class="selectedTab === 'info' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300' 
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-blue-400 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelInfo"
                            >
                                <i class="fas fa-info-circle mr-2"></i> Información Importante
                            </button>
                        </div>
                        <div class="px-2 py-6 text-black min-h-[100px] bg-white/90 rounded-b-xl shadow-lg transition-all duration-500">
                            <div 
                                x-show="selectedTab === 'requirements'" 
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelRequirements" role="tabpanel" aria-label="requirements" class="text-center"
                            >
                                <div><h1 class="text-black text-2xl font-extrabold mb-4">Requisitos</h1></div>
                                <ul class="max-w-xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg">1.- Imprimir y llenar el Formato de solicitud (En Letra Molde Legible).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">2.- Presentar Original y Copia de de la Constancia de Residencia del Condominio o Consejo Comunal.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">3.- Presentar original y dos (2) copias de las cédulas de identidad de los interesados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">4.- Copias de las Cédulas de Identidad de dos (2) testigos mayores de 21 años, que no sean familiares, los cuales deben estar presentes el día indicado. (OBLIGATORIO).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">5.- En caso de tener hijos procreados bajo la Unión Estable de Hecho presentar copias de las Actas de Nacimientos (así sean mayores de edad).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">6.- En caso de ser divorciados presentar Original y Copia de sentencia de divorcio (OBLIGATORIO).</li>
                                </ul>
                            </div>
                            <div 
                                x-show="selectedTab === 'info'" 
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center"
                            >
                                <ul class="max-w-xl text-lg font-black text-blue-900 bg-white border border-blue-200 rounded-lg shadow">
                                    <li class="w-full px-4 py-4 border-b border-blue-300 rounded-t-lg">
                                        Las Uniones Estables de Hecho se realizan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
                        <a  
                            href="{{ route('app.civil-registry') }}"
                            class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 sm:px-6 px-4 sm:py-3 py-2 sm:text-lg text-base font-semibold tracking-wide text-slate-100 transition hover:opacity-80 hover:scale-105 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed shadow w-full sm:w-auto"
                        >
                            <i class="fas fa-arrow-left mr-2"></i> Regresar
                        </a>
                        <a  
                            href="{{ asset('assets/docs/civil-registry/union-estable.pdf') }}" target="_blank"
                            class="cursor-pointer whitespace-nowrap rounded-xl bg-green-700 sm:px-6 px-4 sm:py-3 py-2 sm:text-lg text-base font-semibold tracking-wide text-slate-100 transition hover:opacity-80 hover:scale-105 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed shadow w-full sm:w-auto"
                        >
                            <i class="fas fa-download mr-2"></i> Descargar Planilla
                        </a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>
