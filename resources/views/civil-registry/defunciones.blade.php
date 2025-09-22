<x-main-layout class="bg-blue-700">
    <div x-data="{ title: 'Defunciones' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class="text-3xl font-bold text-blue-800 flex items-center gap-3">
                        <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                        Registro de Defunciones
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-lg text-blue-700 flex items-center gap-2">
                        <i class="fas fa-user-times text-blue-400"></i>
                        Trámite presencial y requisitos especiales
                    </div>
                </x-slot>
                <x-slot name="content" class="center flex flex-col">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto items-center">
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
                                    : 'text-black font-medium hover:border-b-2 hover:border-blue-400 hover:text-blue-700 transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelRequirements"
                            >
                                <i class="fas fa-list-ul mr-2"></i> Requisitos
                            </button>
                            <button
                                @click="selectedTab = 'weekend'"
                                :aria-selected="selectedTab === 'weekend'"
                                :tabindex="selectedTab === 'weekend' ? '0' : '-1'"
                                :class="selectedTab === 'weekend' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300' 
                                    : 'text-black font-medium hover:border-b-2 hover:border-blue-400 hover:text-blue-700 transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpaneWeekend"
                            >
                                <i class="fas fa-calendar-alt mr-2"></i> Fines de semana y feriados
                            </button>
                            <button
                                @click="selectedTab = 'info'"
                                :aria-selected="selectedTab === 'info'"
                                :tabindex="selectedTab === 'info' ? '0' : '-1'"
                                :class="selectedTab === 'info' 
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300' 
                                    : 'text-black font-medium hover:border-b-2 hover:border-blue-400 hover:text-blue-700 transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelInfo"
                            >
                                <i class="fas fa-info-circle mr-2"></i> Información importante
                            </button>
                        </div>
                        <!-- Tab Panels with Animation -->
                        <div class="px-2 py-6 text-black min-h-[120px] bg-white/90 rounded-b-xl shadow-lg transition-all duration-500">
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
                                <ul class="max-w-xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-3 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        1.- Original y 3 copias de la cédula de identidad del exponente, el cual debe ser un familiar directo (Padres, hijos o cónyuge).
                                    </li>
                                    <li class="w-full px-4 py-3 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        2.- Original y cuatro (04) Copia del Certificado de defunción expedido por la entidad hospitalaria o clínica (debidamente firmada y sellado).
                                    </li>
                                    <li class="w-full px-4 py-3 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        3.- Cuatro (04) Copias de la Cédula de Identidad del difunto(a).
                                    </li>
                                    <li class="w-full px-4 py-3 border-b border-blue-300 transition-all duration-200 hover:bg-blue-50">
                                        4.- Copia de la cédula de identidad de todos los hijos legítimos y reconocidos.
                                    </li>
                                    <li class="w-full px-4 py-3 transition-all duration-200 hover:bg-blue-50">
                                        5.- Copia de la Cédula de Identidad de (2) dos testigos mayores de 18 años los cuales deberán estar presentes al momento del asentamiento. (obligatorio).
                                    </li>
                                </ul>
                            </div>
                            <div 
                                x-show="selectedTab === 'weekend'" 
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpaneWeekend" role="tabpanel" aria-label="weekend" class="text-center"
                            >
                                <ul class="max-w-3xl text-lg font-black text-black bg-white border border-blue-200 rounded-lg shadow">
                                    <li class="w-full px-4 py-4 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        Solo para defunciones los fines de Semana y Feriados
                                    </li>
                                    <li class="w-full px-4 py-4 border-b border-blue-300 rounded-t-lg transition-all duration-200 hover:bg-blue-50">
                                        Teléfono de Guardia: <br> <span class="font-mono text-blue-700 text-xl">0416-2830854</span>
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
                                        <i class="fas fa-map-marker-alt text-blue-400 mr-2"></i>
                                        Las Defunciones se realizan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.
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
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>
