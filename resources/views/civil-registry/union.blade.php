<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'unión Estable de Hecho' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div class="my-8 mt-0 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card>
                <x-slot name="title">
                    <div class=" text-3xl">
       
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    <div class="text-xl">
                        <div class="flex items-center justify-center">
                        <img src="{{asset('assets/img/civil-registry/registry-info/union.webp')}}" class="min-h-[15rem] max-h-[18rem] min-w-[30rem] max-w-[35rem] m-4 transition duration-300 ease-in-out hover:shadow-lg rounded-lg">
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content" class="center flex flex-col">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto items-center">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'requirements'" :aria-selected="selectedTab === 'requirements'" :tabindex="selectedTab === 'requirements' ? '0' : '-1'" :class="selectedTab === 'requirements' ? 'font-bold text-blue-600 border-b-2 border-blue-700  ' : 'text-black font-medium    hover:border-b-2 hover:border-b-blue-400 hover:text-black'" class="h-min px-4 py-2 text-md" type="button" role="tab" aria-controls="tabpanelRequirements" >Requisitos</button>
                            <button @click="selectedTab = 'info'" :aria-selected="selectedTab === 'info'" :tabindex="selectedTab === 'info' ? '0' : '-1'" :class="selectedTab === 'info' ? 'font-bold text-blue-600 border-b-2 border-blue-700  ' : 'text-black font-medium    hover:border-b-2 hover:border-b-blue-400 hover:text-black'" class="h-min px-4 py-2 text-md" type="button" role="tab" aria-controls="tabpanelInfo" >Información importante</button>
                        </div>
                        <div class="px-2 py-4 text-black ">
                            <div x-show="selectedTab === 'requirements'" id="tabpanelRequirements" role="tabpanel" aria-label="requirements" class="text-center">
                                <ul class="max-w-xl text-md font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Imprimir y llenar el Formato de solicitud (En Letra Molde Legible).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Adicionalmente, el interesado debe presentar Original y Copia de alguno de los siguientes requisitos que pruebe FEHACIENTEMENTE QUE RESIDEN LEGALMENTE EN EL MUNICIPIO:<br>- Recibo de Servicio Público a nombre de alguno de los solicitantes.<br>- Documento de Propiedad<br>- Contrato de Arrendamiento<br>- Rif personal actualizado<br>- Constancia de residencia del condominio ó Constancia de residencia del consejo comunal. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Presentar original y dos (2) copias de las cédulas de identidad de los interesados.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Copias de las Cédulas de Identidad de dos (2) testigos mayores de 21 años, OJO que no sean familiares, los cuales deben estar presente el día indicado. (OBLIGATORIO).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Datos de los padres o copia de la cédula de identidad</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">6.- En caso de tener hijos procreados bajo la Unión Estable de Hecho presentar copias de las Actas de Nacimientos (así sean mayores de edad).</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">7.- En caso de ser divorciados presentar Original y Copia de sentencia de divorcio (OBLIGATORIO).</li>

                                </ul>
                            </div>
                            <div x-show="selectedTab === 'info'" id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center">
                                <ul class="max-w-xl text-lg  font-black  text-black bg-white border border-blue-200 rounded-lg ">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">- Las Uniones Estables de Heechos se realizan en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex  flex-row items-center justify-center space-x-5 ">
                        <a  href="{{ route('app.civil-registry') }}" class=" cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-lg font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed ">Regresar</a>
                        
                        <a  href="" class=" cursor-pointer whitespace-nowrap rounded-xl bg-green-700 px-4 py-2 text-lg font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed  ">Descargar Formulario</a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>