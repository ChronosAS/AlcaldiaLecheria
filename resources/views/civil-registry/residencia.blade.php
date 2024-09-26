<x-main-layout class="bg-slate-300">
    <div x-data="{ title: 'Constancia de Residencia' }">
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
                        <img src="{{asset('assets/img/civil-registry/registry-info/residencial.webp')}}" class="h-[7rem] m-4 transition duration-300 ease-in-out hover:shadow-lg ">
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content" class="center">
                    <div x-data="{ selectedTab: 'groups' }" class="max-w-xl mt-4 px-4 mx-auto">
                        <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-slate-300 justify-evenly " role="tablist" aria-label="tab options">
                            <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'" :tabindex="selectedTab === 'groups' ? '0' : '-1'" :class="selectedTab === 'groups' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelGroups" >Groups</button>
                            <button @click="selectedTab = 'likes'" :aria-selected="selectedTab === 'likes'" :tabindex="selectedTab === 'likes' ? '0' : '-1'" :class="selectedTab === 'likes' ? 'font-bold text-blue-700 border-b-2 border-blue-700  ' : 'text-slate-700 font-medium    hover:border-b-2 hover:border-b-slate-800 hover:text-black'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelLikes" >Likes</button>
                        </div>
                        <div class="px-2 py-4 text-slate-700 ">
                            <div x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups" class="text-justify">
                                <ul class="max-w-xl text-sm font-medium  text-blue-900 bg-white border border-blue-200 rounded-lg">
                                    <li class="w-full px-4 py-2 border-b border-blue-300 rounded-t-lg ">1.- Debe acudir personalmente el interesado.</li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">2.- Solicitar ante la sede de la Policía del Municipio constancia de no poseer antecedente policiales. </li>
                                    <li class="w-full px-4 py-2 border-b border-blue-300 ">3.- Dirigirse al registro civil con dicho documento y copia de la cedula de identidad y solicitar la buena conducta.</li>

                                </ul>
                            </div>
                            <div x-show="selectedTab === 'likes'" id="tabpanelLikes" role="tabpanel" aria-label="likes">
                            </div>
                        </div>
                    </div>
                </x-slot>
            
            </x-full-card>
        </div>
    </div>
</x-main-layout>