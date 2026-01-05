<x-main-layout class="bg-slate-300">
    <div>
        <x-main-header class="sm:bg-[0 55%] sm:bg-cover bg-[length:411px_747px] 2xl:py-[17rem] 2xl:px-[50rem] " bg_img="../assets/img/VDV/banner-vdv.webp">
            <img class="sm:h-80  " src="{{ asset('../assets/img/VDV/logo-vdv.webp') }}">
        </x-main-header>
    </div>

    <div x-data="{ tab: ''}" class="mt-4 px-4 mx-auto max-w-7xl border-b border-gray-700 bg-blue-900 sm:rounded-xl">
        <ul
            class="flex flex-wrap -mb-px text-lg font-medium text-center items-center justify-evenly text-white"
            id="vdv-tab"
            data-tabs-toggle="#vdv-tab-content"
            role="tablist"
            data-tabs-active-classes="text-white hover:text-blue-500  border-blue-500 "
            data-tabs-inactive-classes="border-transparent text-white hover:text-blue-500  border-gray-100 hover:border-gray-300 ">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-300 hover:border-gray-300" id="gallery-tab" data-tabs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Galeria</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg " id="review-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">Historia</button>
            </li>
        </ul>
    </div>
    <div id="vdv-tab-content">
        <div class="hidden p-4 rounded-lg bg-slate-300" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
            <livewire:v-d-v.gallery>
        </div>
        <div class="hidden p-4 rounded-lg bg-slate-300" id="history" role="tabpanel" aria-labelledby="review-tab">
            <x-app.v-d-v.historical-review/>
        </div>
    </div>
</x-main-layout>
