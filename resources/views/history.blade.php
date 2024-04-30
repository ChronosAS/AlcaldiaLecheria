<x-main-layout class="dark:bg-slate-300">
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">Historia</h1>
    </x-main-header>
    <div class="mt-4 px-4 mx-auto max-w-7xl border-b border-gray-200 dark:border-gray-700 dark:bg-gray-700 sm:rounded-xl">
        <ul 
            class="flex flex-wrap -mb-px text-lg font-medium text-center items-center justify-evenly"
            id="default-tab" 
            data-tabs-toggle="#default-tab-content" 
            role="tablist"
            data-tabs-active-classes="text-white hover:text-orange-500 dark:text-white dark:hover:text-orange-400 border-orange-500 dark:border-orange-400" 
            data-tabs-inactive-classes="dark:border-transparent text-white hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
        >
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg text-white" id="history-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">Historia</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-white" id="hymn-tab" data-tabs-target="#hymn" type="button" role="tab" aria-controls="hymn" aria-selected="false">Himno</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-white" id="shield-tab" data-tabs-target="#shield" type="button" role="tab" aria-controls="shield" aria-selected="false">Escudo</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-white" id="flag-tab" data-tabs-target="#flag" type="button" role="tab" aria-controls="flag" aria-selected="false">Bandera</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="history" role="tabpanel" aria-labelledby="history-tab">
            <x-info.history/>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="hymn" role="tabpanel" aria-labelledby="hymn-tab">
            <x-info.hymn/>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="shield" role="tabpanel" aria-labelledby="shield-tab">
            <x-info.shield/>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="flag" role="tabpanel" aria-labelledby="flag-tab">
            <x-info.flag/>
        </div>
    </div>
</x-main-layout>
