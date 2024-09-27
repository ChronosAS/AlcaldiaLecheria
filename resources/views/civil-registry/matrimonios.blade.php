<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Matrimonios' }">
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
                        <img src="{{asset('assets/img/civil-registry/registry-info/matrimonial.webp')}}" class="h-[7rem] m-4 transition duration-300 ease-in-out hover:shadow-lg ">
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'requirements'" :aria-selected="selectedTab === 'requirements'" :tabindex="selectedTab === 'requirements' ? '0' : '-1'" :class="selectedTab === 'requirements' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelRequirements" >Articulo 66</button>
                            <button @click="selectedTab = 'special'" :aria-selected="selectedTab === 'special'" :tabindex="selectedTab === 'special' ? '0' : '-1'" :class="selectedTab === 'special' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelSpecial" >Casos especiales</button>
                             <button @click="selectedTab = 'info'" :aria-selected="selectedTab === 'info'" :tabindex="selectedTab === 'info' ? '0' : '-1'" :class="selectedTab === 'info' ? 'font-bold text-blue-700 border-b-2 border-blue-700 ' : 'text-slate-700 font-medium hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelInfo" >Información Importante</button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'requirements'" id="tabpanelRequirements" role="tabpanel" aria-label="requirements" class="text-center">
                                <ul class="max-w-xl text-sm font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Imprimir y llenar el Formato (En Letra Molde Legible) después que tome la Cita.  <br> <a class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar Aqui</a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Adicionalmente, el interesado debe presentar cualquier documento que pruebe que alguno de los contrayentes o ambos residen legalmente en el Municipio..</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Presentar original y 2 copias de las cédulas de identidad de los contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Partidas de nacimiento originales y copias de ambos contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Cartas de soltería de ambos contrayentes<a class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar Aqui</a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">6.- Descargar e Imprimir el Acta de Esponsalicia.<a class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar Aqui</a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">7.- Copias de las Cédulas de Identidad de dos testigos, mayores de 21 años de edad, venezolanos. (No pueden ser los padres)</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'special'" id="tabpanelSpecial" role="tabpanel" aria-label="special" class="text-center">
                                <ul class="max-w-xl text-sm font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">* Si uno o ambos de los contrayentes es Adolescente además de los requisitos antes mencionados deberá consignar:<br>- La carta de soltería debe estar notariada.<br>- Copia de las Cédulas de Identidad de los representantes legales los cuales deben estar presente obligatoriamente el día del acto..</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">* Si uno o ambos de los contrayentes es Divorciado o Viudo además de los requisitos antes mencionados deberá consignar:<br>- Copia certificada de la sentencia de divorcio en lugar de la carta de Soltería.<br>- Curatela en caso de tener hijos menores de edad (Art. 110 del Código Civil)</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">* Si uno o ambos de los contrayentes es Extranjero, además de los requisitos antes mencionados deberá consignar:<br>- Original y copia del pasaporte.<br>- Partida de nacimiento debidamente legalizada, Apostillada y traducida al español.</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'info'" id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center">
                                <ul class="max-w-xl text-lg  font-black  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">Los requisitos para Matrimonios deberán ser consignados por lo menos con quince (15) días de antelación a la realización del acto para su verificación. Y previa reservación de la fecha del acto.</li>
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
