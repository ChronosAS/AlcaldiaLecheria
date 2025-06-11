<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide">Noticias</h1>
    </x-main-header>

    <div class="flex flex-col min-h-svh bg-white">
        <div class="my-8 space-y-4 p-4 mx-auto  w-full">
            <x-full-card class="bg-white border-0 ">
                <x-slot name="title">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="relative w-full max-w-xs">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                                </svg>
                            </div>
                            <input wire:model.live='search' type="text" name="search" id="search"
                                class="block w-full pl-10 pr-4 py-2 rounded-lg border border-slate-300 bg-slate-50 text-slate-900 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition"
                                placeholder="Buscar...">
                        </div>
                        <div class="flex items-center gap-3">
                            <div wire:ignore class="relative">
                                <button id="tags" data-dropdown-toggle="tagsDropdown"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 transition"
                                    type="button">
                                    Categorías
                                    <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="tagsDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white rounded-xl border border-slate-200 shadow-lg p-4">
                                    <h6 class="mb-3 text-sm font-semibold text-slate-700">Categorías</h6>
                                    <ul class="space-y-2 text-sm">
                                        @foreach ($allCategories as $key => $category)
                                            <li class="flex items-center">
                                                <input wire:model.live='categories' type="checkbox" value="{{ $category->value }}"
                                                    class="w-4 h-4 border-slate-300 rounded text-blue-600 focus:ring-blue-500" />
                                                <label class="ml-2 text-sm font-medium text-slate-700">
                                                    {{ $category->label() }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <x-input id="date" type="date" style="color: black" class="mt-2  sm:mt-1 flex 2xl:col-start-6 xl:col-start-5 md:col-start-5 w-full sm:w-[10rem]  xl:w-[10rem]  lg:w-[10rem] md:w-[10rem] 2xl:w-[10rem]  text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model.live="date" />
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content">
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2">
                        @forelse ($this->posts as $post)
                            <li>
                                <article class="group overflow-hidden bg-white border border-slate-200 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col h-full w-full">
                                    <a href="{{ route('app.news.show',$post->id) }}" class="block relative aspect-video overflow-hidden">
                                        <img src="{{ $post->getFirstMediaUrl('post-image') }}"
                                            alt=""
                                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" />
                                        @if ($post->category)
                                            <span class="absolute top-3 left-3 bg-blue-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
                                                {{ $post->category->label() }}
                                            </span>
                                        @endif
                                    </a>
                                    <div class="flex flex-col flex-1 p-5">
                                        <span class="text-xs text-blue-500 font-semibold mb-1">{{ $post->iso_date }}</span>
                                        <h3 class="text-lg font-bold text-slate-900 mb-2 leading-tight line-clamp-2">{{ $post->title }}</h3>
                                        <p class="text-slate-600 text-sm mb-4 line-clamp-3">{{ $post->subtitle }}</p>
                                        <div class="mt-auto">
                                            <a href="{{ route('app.news.show',$post->id) }}"
                                                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-semibold text-sm hover:bg-blue-100 transition">
                                                Ver más
                                                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        @empty
                            <li class="col-span-full text-center text-slate-500 py-12 text-lg">No hay noticias que concuerden con su búsqueda.</li>
                        @endforelse
                    </ul>
                </x-slot>
            </x-full-card>
            <div class="flex justify-center mt-4">
                {{ $this->posts->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
