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
                    <div x-data="{ selectedTab: 'groups' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'" :tabindex="selectedTab === 'groups' ? '0' : '-1'" :class="selectedTab === 'groups' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelGroups" >Groups</button>
                            <button @click="selectedTab = 'likes'" :aria-selected="selectedTab === 'likes'" :tabindex="selectedTab === 'likes' ? '0' : '-1'" :class="selectedTab === 'likes' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelLikes" >Casos especiales</button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups" class="text-justify">
                                <ul class="max-w-xl text-sm font-medium  text-blue-900 bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Imprimir y llenar el Formato (En Letra Molde Legible) después que tome la Cita. <br> <a class="cursor-pointer text-blue-700 hover:text-blue-500">Descargar Aqui</a></li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Adicionalmente, el interesado debe presentar cualquier documento que pruebe que alguno de los contrayentes o ambos residen legalmente en el Municipio.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Presentar original y 2 copias de las cédulas de identidad de los contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Partidas de nacimiento originales y copias de ambos contrayentes.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Copias de las Cédulas de Identidad de los testigos mayores de edad, venezolanos. (No pueden ser los padres)</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">6- Copia de constancia de CONCUBINATO o UNIÓN ESTABLE DE HECHO.</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'likes'" id="tabpanelLikes" role="tabpanel" aria-label="likes">
                                <ul class="max-w-xl text-sm font-medium  text-blue-900 bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">* Si uno o ambos de los contrayentes es Adolescente además de los requisitos antes mencionados deberá consignar:<br> <br>- Copia de las Cédulas de Identidad de los representantes legales los cuales deben estar presente obligatoriamente el día del acto.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">* Si uno o ambos de los contrayentes es Divorciado o Viudo además de los requisitos antes mencionados deberá consignar:<br> <br>- Copia certificada de la sentencia de divorcio o del acta de defunción.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">* Si uno o ambos de los contrayentes es Extranjero, además de los requisitos antes mencionados deberá consignar:<br><br>- Original y copia del pasaporte.<br>- Partida de nacimiento debidamente legalizada, Apostillada y traducida al español.<br>- Carta de soltería legalizada (todos los documentos traducidos al español)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </x-slot>
            
            </x-full-card>
        </div>
    </div>
</x-main-layout>
