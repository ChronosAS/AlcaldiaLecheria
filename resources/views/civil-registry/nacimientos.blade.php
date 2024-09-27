<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Nacimientos' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div>
            <x-full-card>
                <x-slot name="title">
                    <div class=" text-3xl">
                  
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-xl">
                        <div class="flex items-center justify-center">
                        <img src="{{asset('assets/img/civil-registry/registry-info/nacer.webp')}}" class="h-[7rem] m-4 transition duration-300 ease-in-out hover:shadow-lg ">
                        </div>
                    </div>
                </x-slot>
               <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requeriments' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'requeriments'" :aria-selected="selectedTab === 'requeriments'" :tabindex="selectedTab === 'requeriments' ? '0' : '-1'" :class="selectedTab === 'requeriments' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelRequeriments" >Requisitos de Presentaciones</button>
                            <button @click="selectedTab = 'special'" :aria-selected="selectedTab === 'special'" :tabindex="selectedTab === 'special' ? '0' : '-1'" :class="selectedTab === 'special' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelSpecial" >Nacidos en el exterior de Padre o Madre venezolanos </button>
                            <button @click="selectedTab = 'info'" :aria-selected="selectedTab === 'info'" :tabindex="selectedTab === 'info' ? '0' : '-1'" :class="selectedTab === 'info' ? 'font-bold text-blue-700 border-b-2 border-blue-700 ' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelInfo" >Información Importante</button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'requeriments'" id="tabpanelRequeriments" role="tabpanel" aria-label="requeriments" class="text-justify">
                                <ul class="max-w-xl text-sm font-medium  text-black bg-white border border-blue-200 rounded-lg" class="text-center">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Acudir a la oficina de registro civil con los certificados de nacimiento EV-25 emitidos por el centro de salud.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Original y 3 copias de la cédula de identidad de ambos padres. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Copia del acta de matrimonio si son casados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Permiso de presentación extemporánea emitido por el CPNNA (Consejo de Protección de los Niños, Niñas y Adolescentes) si tiene más de 90 días de nacido.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Dos (2) testigos mayores de edad con 1 copia de C.I. c/u.</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'special'" id="tabpanelSpecial" role="tabpanel" aria-label="special" class="text-center">
                                <ul class="max-w-xl text-sm font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Original del Acta de Nacimiento legalizada, apostillada y de ser necesario traducida al español.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Acta de Nacimiento de ambos padres. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Una (1) Copia de los pasaportes de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Dos (2) copias de las de cedulas de identidad de ambos padres.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Copia del acta de matrimonio de los padres. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">6.- Dos (2) testigos mayores de edad con copia de su cedula, venezolanos. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">7.- Permiso de presentación extemporánea emitido por el CPNNA (Consejo de Protección del Niño, Niña y Adolecentes) en caso de que el niño tenga más de 90 días de nacido .</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">8.- Si los padres no son casados deben estar presente ambos para la presentación del bebé.</li>
                                </ul>
                          
                            </div>
                             <div x-show="selectedTab === 'info'" id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center">
                                <ul class="max-w-xl text-lg  font-black  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">- El trámite es por cita, la misma se otorga una vez que presenten todos los requisitos aquí mencionados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">- Las presentaciones de Niños y Niñas se realizan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <a  href="{{ route('app.civil-registry') }}" class=" cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-lg font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Regresar</a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>