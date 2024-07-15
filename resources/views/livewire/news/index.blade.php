<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl" >Noticias</h1>
    </x-main-header>

    <div class=" flex sm:grid sm:grid-cols-10 sm:grid-rows-6 gap-4">
        <div class="sm:col-span-8 sm:row-span-6 my-8 mt-0 space-y-4 p-4 mx-auto max-w-7xl">
            <x-full-card class="">
                <x-slot name="title">
                    <div class=" text-3xl grid sm:grid-cols-2 sm:grid-rows-1 sm:gap-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-black" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input wire:model.live='search' type="text" name="search" id="search" class=" flex p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
                        </div>
                        <x-input id="date" type="date" style="color: black" class="mt-1 flex  w-full sm:w-[10rem] sm:col-start-3 text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500" wire:model.live="date" />
                    </div>
                </x-slot>
                <x-slot name="content" class="">
                    <!-- inspired by tailwindcss.com -->
                    <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8">
                        @forelse ($this->posts as $post)
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-slate-900 font-semibold">
                                        <span class="mb-1 block text-sm leading-6 text-indigo-500">{{ $post->iso_date }}</span>{{ $post->title }}
                                    </h3>
                                    <div class="prose prose-slate prose-sm text-slate-600">
                                        <p>{{ $post->subtitle }}</p>
                                    </div><a
                                        class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 mt-6"
                                        href="{{ route('app.news.show',$post->id) }}">Ver...
                                        <svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg></a>
                                </div>
                                <img src="{{ $post->getFirstMediaUrl('post-image') }}" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                        @empty
                            No hay noticias que concuerden con su busqueda.
                        @endforelse
                    </ul>
                </x-slot>
            </x-full-card>
            {{ $this->posts->links('vendor.livewire.tailwind') }}
        </div>
        <div wire:ignore class="col-span-2 row-span-6 col-start-9    xl:-scale-50 2xl:scale-100 transform-none xl:transform-none  xl:w-[14rem]  2xl:w-[25rem] mb-6 overscroll-y-contain xl:my-9 right-10 justify-self-center fixed hidden sm:inline-block">
            <a class="twitter-timeline" href="https://twitter.com/Urbanejalcaldia?ref_src=twsrc%5Etfw">Tweets Urbanejalcaldia</a>
        </div>
    </div>
</div>
