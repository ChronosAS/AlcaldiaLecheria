<x-main-layout class="bg-blue-700">
    <div x-data="{ title: 'Nacimientos' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide" x-text='title'></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class="text-3xl font-bold text-blue-800 flex items-center gap-3">
                        <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                        Registro de Nacimientos
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-lg text-blue-700 flex items-center gap-2">
                        <i class="fas fa-baby text-blue-400"></i>
                        Trámite presencial y requisitos legales
                    </div>
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requeriments' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <!-- Modern Tabs -->
                        <div
                            class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly bg-white/80 rounded-t-xl shadow"
                            role="tablist" aria-label="tab options"
                        >
                            <button @click="selectedTab = 'requeriments'"
                                :aria-selected="selectedTab === 'requeriments'"
                                :tabindex="selectedTab === 'requeriments' ? '0' : '-1'"
                                :class="selectedTab === 'requeriments'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelRequeriments">
                                <i class="fas fa-list-ul mr-2"></i> Requisitos de Presentaciones
                            </button>
                            <button @click="selectedTab = 'special'"
                                :aria-selected="selectedTab === 'special'"
                                :tabindex="selectedTab === 'special' ? '0' : '-1'"
                                :class="selectedTab === 'special'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelSpecial">
                                <i class="fas fa-globe-americas mr-2"></i> Nacidos en el exterior
                            </button>
                            <button @click="selectedTab = 'info'"
                                :aria-selected="selectedTab === 'info'"
                                :tabindex="selectedTab === 'info' ? '0' : '-1'"
                                :class="selectedTab === 'info'
                                    ? 'font-bold text-blue-700 border-b-4 border-blue-500 bg-blue-50/60 shadow transition-all duration-300'
                                    : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black transition-all duration-200'"
                                class="h-min px-6 py-3 text-lg rounded-t-xl focus:outline-none"
                                type="button" role="tab" aria-controls="tabpanelInfo">
                                <i class="fas fa-info-circle mr-2"></i> Información Importante
                            </button>
                        </div>
                        <!-- Tab Panels with Animation -->
                        <div class="px-2 py-6 text-slate-700 min-h-[120px] bg-white/90 rounded-b-xl shadow-lg transition-all duration-500">
                            <div
                                x-show="selectedTab === 'requeriments'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelRequeriments" role="tabpanel" aria-label="requeriments" class="text-justify"
                            >
                                <ul class="max-w-xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg">1.- Acudir a la oficina de registro civil con los certificados de nacimiento EV-25 emitidos por el centro de salud.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">2.- Original y 3 copias de la cédula de identidad de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">3.- Copia del acta de matrimonio si son casados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">4.- Permiso de presentación extemporánea emitido por el CPNNA (Consejo de Protección de los Niños, Niñas y Adolescentes) si tiene más de 90 días de nacido.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">5.- Dos (2) testigos mayores de edad con 1 copia de C.I. c/u.</li>
                                </ul>
                            </div>
                            <div
                                x-show="selectedTab === 'special'"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4"
                                id="tabpanelSpecial" role="tabpanel" aria-label="special" class="text-center"
                            >
                                <ul class="max-w-xl text-md font-medium text-black bg-white border border-blue-200 rounded-lg shadow space-y-0">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg">1.- Original del Acta de Nacimiento legalizada, apostillada y de ser necesario traducida al español.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">2.- Acta de Nacimiento de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">3.- Una (1) Copia de los pasaportes de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">4.- Dos (2) copias de las de cedulas de identidad de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">5.- Copia del acta de matrimonio de los padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">6.- Dos (2) testigos mayores de edad con copia de su cedula, venezolanos.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">7.- Permiso de presentación extemporánea emitido por el CPNNA (Consejo de Protección del Niño, Niña y Adolecentes) en caso de que el niño tenga más de 90 días de nacido.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300">8.- Si los padres no son casados deben estar presente ambos para la presentación del bebé.</li>
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
                                <ul class="max-w-xl text-lg font-black text-black bg-white border border-blue-200 rounded-lg shadow">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg">- El trámite es por cita, la misma se otorga una vez que presenten todos los requisitos aquí mencionados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg">- Las presentaciones de Niños y Niñas se realizan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.</li>
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
                        {{-- <a  href="" class=" cursor-pointer whitespace-nowrap rounded-xl bg-green-700 px-4 py-2 text-lg font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed  ">Descargar Formulario</a> --}}
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>
