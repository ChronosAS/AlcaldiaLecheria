<x-main-layout class="dark:bg-slate-300">
    <div x-data="{ title: '' }">
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl" x-text='title' ></h1>
        </x-main-header>
        <div x-data="{ tab: ''}" class="mt-4 px-4 mx-auto max-w-7xl border-b border-gray-700 bg-blue-900 sm:rounded-xl">
            <ul
                class="flex flex-wrap -mb-px text-lg font-medium text-center items-center justify-evenly text-white"
                id="default-tab"
                data-tabs-toggle="#default-tab-content"
                role="tablist"
                data-tabs-active-classes="text-white hover:text-orange-500 dark:text-white dark:hover:text-orange-400 border-orange-500 dark:border-orange-400"
                data-tabs-inactive-classes="border-transparent text-white hover:text-orange-500 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">
                <li class="me-2" role="presentation">
                    <button @click="title = ''"  class="inline-block p-4 border-b-2 rounded-t-lg dark:text-white" id="-tab" data-tabs-target="#" type="button" role="tab" aria-controls="" aria-selected="false"></button>
                </li>
                <li class="me-2" role="presentation">
                    <button @click="title = ''" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-300 hover:border-gray-300 dark:hover:text-gray-300 dark:text-white" id="-tab" data-tabs-target="#" type="button" role="tab" aria-controls="" aria-selected="false"></button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="" role="tabpanel" aria-labelledby="-tab">
                </>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-300" id="" role="tabpanel" aria-labelledby="-tab">
                </>
            </div>
        </div>
    </div>
</x-main-layout>