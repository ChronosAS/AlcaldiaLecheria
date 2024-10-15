<x-main-layout class="dark:bg-slate-300">
    <div >
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl">Historia y Simbolos</h1>
        </x-main-header>
        <div  class="">
            <div x-data="{ selectedTab: 'historia' }" class="flex flex-wrap -mb-px text-3xl  font-medium text-center items-center justify-evenly text-white shadow-2xl mt-4 px-4 mx-auto max-w-7xl border-b  bg-blue-900 sm:rounded-xl">
                <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class=" flex flex-wrap mt-5 mb-5  font-medium text-center items-center justify-between gap-12  " role="tablist" aria-label="tab options">
                    <button @click="selectedTab = 'historia'" :aria-selected="selectedTab === 'historia'" :tabindex="selectedTab === 'historia' ? '0' : '-1'" :class="selectedTab === 'historia' ? ' text-blue-600 border-b-2 border-blue-600  ' : 'text-white font-medium    hover:border-b-2 hover:border-b-blue-500 hover:text-blue-400'" class="h-min px-4 py-2 " type="button" role="tab" aria-controls="tabpanelHistoria" >Historia</button>
                    <button @click="selectedTab = 'Himno'" :aria-selected="selectedTab === 'Himno'" :tabindex="selectedTab === 'Himno' ? '0' : '-1'" :class="selectedTab === 'Himno' ? ' text-blue-600 border-b-2 border-blue-600  ' : 'text-white font-medium    hover:border-b-2 hover:border-b-blue-500 hover:text-blue-400'" class="h-min px-4 py-2 " type="button" role="tab" aria-controls="tabpanel'Himno" >Himno</button>
                    <button @click="selectedTab = 'Escudo'" :aria-selected="selectedTab === 'Escudo'" :tabindex="selectedTab === 'Escudo' ? '0' : '-1'" :class="selectedTab === 'Escudo' ? ' text-blue-600 border-b-2 border-blue-700  ' : 'text-white font-medium    hover:border-b-2 hover:border-b-blue-500 hover:text-blue-400'" class="h-min px-4 py-2 " type="button" role="tab" aria-controls="tabpanelEscudo" >Escudo</button>
                    <button @click="selectedTab = 'Bandera'" :aria-selected="selectedTab === 'Bandera'" :tabindex="selectedTab === 'Bandera' ? '0' : '-1'" :class="selectedTab === 'Bandera' ? ' text-blue-600 border-b-2 border-blue-600  ' : 'text-white font-medium    hover:border-b-2 hover:border-b-blue-500 hover:text-blue-400'" class="h-min px-4 py-2 " type="button" role="tab" aria-controls="tabpanelBandera" >Bandera</button>
                </div>
               
                <div class=" text-black ">
                    <div x-show="selectedTab === 'historia'" id="tabpanelHistoria" role="tabpanel" aria-label="historia">
                        <x-info.history/>
                    </div>
                    <div x-show="selectedTab === 'Himno'" id="tabpanelHimno" role="tabpanel" aria-label="Himno">
                        <x-info.hymn/>
                    </div>
                    <div x-show="selectedTab === 'Escudo'" id="tabpanelEscudo" role="tabpanel" aria-label="Escudo">
                        <x-info.shield/>
                    </div>
                    <div x-show="selectedTab === 'Bandera'" id="tabpanelBandera" role="tabpanel" aria-label="Bandera">
                        <x-info.flag/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
