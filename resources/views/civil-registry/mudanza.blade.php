<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Permisos de Mudanza' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class="text-3xl font-bold text-blue-800 flex items-center gap-3">
                        <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                        Permiso de Mudanza
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-lg text-blue-700 flex items-center gap-2">
                        <i class="fas fa-truck-moving text-blue-400"></i>
                        Trámite presencial y requisitos obligatorios
                    </div>
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <!-- Modern Tabs -->
                        <div 
                            class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly bg-white/80 rounded-t-xl shadow"
                            role="tablist" aria-label="tab options"
                        >
                            <button 
                                @click="selectedTab = 'requirements'"
                                :aria-selected="selectedTab === 'requirements'"
                                :tabindex="selectedTab === 'requirements' ? '0' : '-1'"
                                :class="selectedTab === 'requirements' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelrequirements"
                            >
                                <i class="fas fa-list-ul mr-2"></i> Requisitos
                            </button>
                            <button 
                                @click="selectedTab = 'info'"
                                :aria-selected="selectedTab === 'info'"
                                :tabindex="selectedTab === 'info' ? '0' : '-1'"
                                :class="selectedTab === 'info' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelInfo"
                            >
                                <i class="fas fa-info-circle mr-2"></i> Información Importante
                            </button>
                        </div>
                        <!-- Tab Panels with Animation -->
                        <div class="px-2 py-6 text-slate-700 min-h-[120px] bg-white/90 rounded-b-xl shadow-lg transition-all duration-500">
                            <div 
                                x-show="selectedTab === 'requirements'" 
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelrequirements" role="tabpanel" aria-label="requirements" class="text-center"
                            >
                                <ul class="max-w-xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        1.- Original y dos (2) copias de la Cédula de Identidad. En caso de ENVIAR A UN TERCERO emitir una autorización con copia de la Cédula.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        2.- Presentar Original y Copia de algún documento que pruebe que es propietario o inquilino del lugar del cual sale la mudanza.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        3.- Original y una (1) copia del inventario de los bienes a trasladar.
                                    </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        4.- Dos (2) Copias del Carnet de circulación del vehículo en el cual se realizará la mudanza.
                                    </li>
                                    <li class="w-full px-4 py-2 transition-all duration-200 hover:bg-blue-50">
                                        5.- Dos (2) Copias de la licencia de conducir y 2 Copias de Cédula de identidad del chofer del vehículo.
                                    </li>
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
                                    <li class="w-full px-4 py-4 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        Los permisos de mudanza se tramitan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center space-x-5 mt-8">
                        <a  
                            href="{{ route('app.civil-registry') }}"
                            class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-6 py-3 text-lg font-semibold tracking-wide text-slate-100 transition hover:opacity-80 hover:scale-105 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed shadow"
                        >
                            <i class="fas fa-arrow-left mr-2"></i> Regresar
                        </a>
                        <a  
                            href="{{ asset('assets/docs/civil-registry/permiso-mudanza.pdf')}}" target="_blank"
                            class="cursor-pointer whitespace-nowrap rounded-xl bg-green-700 px-6 py-3 text-lg font-semibold tracking-wide text-slate-100 transition hover:opacity-80 hover:scale-105 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed shadow"
                        >
                            <i class="fas fa-download mr-2"></i> Descargar Planilla
                        </a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>
