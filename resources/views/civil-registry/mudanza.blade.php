<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Permisos de Mudanza' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div class="my-10 space-y-4 px-4 mx-auto max-w-5xl">
            <x-full-card >
                <x-slot name="title">
                    <div class=" text-3xl">

                    </div>
                </x-slot>
                <x-slot name="subTitle">
                    
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'requirements' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'requirements'" :aria-selected="selectedTab === 'requirements'" :tabindex="selectedTab === 'requirements' ? '0' : '-1'" :class="selectedTab === 'requirements' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-md" type="button" role="tab" aria-controls="tabpanelrequirements" >Requisitos</button>
                            <button @click="selectedTab = 'info'" :aria-selected="selectedTab === 'info'" :tabindex="selectedTab === 'info' ? '0' : '-1'" :class="selectedTab === 'info' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-md" type="button" role="tab" aria-controls="tabpanelInfo" >Información Importante</button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'requirements'" id="tabpanelrequirements" role="tabpanel" aria-label="requirements" class="text-center">
                                <ul class="max-w-xl text-md font-medium  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Original y dos (2) copias de la Cédula de Identidad. En caso de ENVIAR A UN TERCERO emitir una autorización con copia de la Cédula. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Presentar Original y Copia de algún documento que pruebe que es propietario o inquilino del lugar del cual sale la mudanza.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Original y una (1) copia del inventario de los bienes a trasladar.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">4.- Dos (2) Copias del Carnet de circulación del vehículo en el cual se realizará la mudanza.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">5.- Dos (2) Copias de la licencia de conducir y 2 Copias de Cédula de identidad del chofer del vehículo.</li>
                                </ul>
                            </div>
                            <div x-show="selectedTab === 'info'" id="tabpanelInfo" role="tabpanel" aria-label="info" class="text-center">
                                <ul class="max-w-xl text-lg  font-black  text-black bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">- Los permisos de mundanza se tramitaran en el Registro Civil en la Av. Anzoátegui con Calle Los Almendrones, Quinta Araguaney, Diagonal a la Plaza “El Parque”.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex  flex-row items-center justify-center space-x-5 ">
                        <a  href="{{ route('app.civil-registry') }}" class=" cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-lg font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed ">Regresar</a>
                    </div>
                </x-slot>
            </x-full-card>
        </div>
    </div>
</x-main-layout>