<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl" >Noticias</h1>
    </x-main-header>

    <div class=" flex sm:grid sm:grid-cols-10 sm:grid-rows-6 gap-4">
        <div class="sm:col-span-8 sm:row-span-6 my-8 mt-0 space-y-4 p-4 mx-auto max-w-7xl">
            <x-full-card class="">
                <x-slot name="title">
                    <div class=" text-3xl grid grid-cols-1 sm:grid-cols-2 sm:grid-rows-1 sm:gap-4">
                        <div class="relative sm:mt-1 mt-2">
                            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-black" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input wire:model.live='search' type="text" name="search" id="search" class=" flex p-2 ps-10 text-sm text-gray-900 border border-black rounded-lg  w-full sm:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700   " placeholder="Buscar...">
                        </div>
                       
                        <div wire:ignore class="flex mt-2 sm:mt-1 ">
                            <button id="tags" data-dropdown-toggle="tagsDropdown"
                              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full  text-sm mx-3 sm:mx-3 px-4 p-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                              type="button">
                               Etiquetas
                              <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                              </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="tagsDropdown" class=" hidden sm:w-[18rem] p-3 bg-white rounded-lg border border-gray-500 shadow z-[5]">
                                <h6 class="mb-3 text-sm font-medium text-gray-900">
                                    Etiquetas
                                </h6>
                                <ul class="space-y-2 text-sm" aria-labelledby="tags">
                                    @forelse ($allTags as $key => $tag)
                                        <li class="flex items-center">
                                            <input wire:model.live='tags' type="checkbox" value="{{ $tag->id }}"
                                                class="w-4 h-4 bg-white border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 " />

                                            <label class="ml-2 text-sm font-medium text-gray-900">
                                                {{ $tag->name }}
                                            </label>
                                        </li>
                                    @empty
                                        <li class="flex items-center text-white">
                                            No hay etiquetas.
                                        </li>
                                    @endforelse

                                </ul>
                            </div>
                            <x-input id="date" type="date" style="color: black" class="mt-2 sm:mt-1 flex  w-full sm:w-[10rem]  text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500" wire:model.live="date" />
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content" class="">
                    <!-- inspired by tailwindcss.com -->
                    <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8 ">
                        @forelse ($this->posts as $post)
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start border border-slate-200 rounded-xl shadow-md">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    @foreach ($post->tags as $tag)
                                        <span class=" mx-3 text-xs font-medium me-2  px-2.5 py-0.5 rounded bg-blue-900 text-blue-300">{{ $tag->name }}</span>
                                    @endforeach
                                    <h3 class="mb-1 text-slate-900 font-semibold mx-3">
                                        <span class="mb-1 block text-sm leading-6 text-indigo-500 mx-3">{{ $post->iso_date }}</span>{{ $post->title }}
                                    </h3>
                                    <div class="prose prose-slate prose-sm text-slate-600 ">
                                        <p class="mx-3">{{ $post->subtitle }}</p>
                                    </div>
                                    <a class="group mx-3 my-3 inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 "
                                        href="{{ route('app.news.show',$post->id) }}">Ver...
                                        <svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
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
        <div wire:ignore class="row-start-1 col-start-9   xl:scale-[.7] md:scale-[.7] lg:scale-[.7] scale-[.7] 2xl:scale-100  right-1  xl:w-[18rem]  2xl:w-[25rem] overscroll-y-contain 2xl:bottom-auto xl:bottom-25 xl:right-4 2xl:right-10 justify-self-center fixed hidden sm:inline-block">
            <a class="twitter-timeline" href="https://twitter.com/Urbanejalcaldia?ref_src=twsrc%5Etfw">Tweets Urbanejalcaldia</a>
        </div>
    </div>
</div>
