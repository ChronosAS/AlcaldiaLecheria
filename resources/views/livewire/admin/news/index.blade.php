<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-blue-800 dark:bg-gradient-to-bl from-blue-700/50 dark:via-transparent border-b border-blue-700">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <label for="table-search" class="sr-only">Buscar</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-black" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
                            </div>
                            <div class="grid w-full sm:w-auto sm:grid-cols-2 sm:grid-rows-1 sm:gap-4">
                                <x-select
                                    name="status"
                                    wire="live"
                                    placeholder="Estado"
                                    :values="App\Enums\News\PostStatus::options()"
                                />
                                <x-input id="date" type="date" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model.live="date" />
                            </div>
                        </div>
                        <x-table.table-rounded>
                            <x-slot name="thead" >
                                <tr class="bg-blue-900 text-white">
                                    <x-table.th>
                                        <x-table.th-sortable title="Titulo" field="title" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    <x-table.th>
                                        <x-table.th-sortable title="Creado por" field="user" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    <x-table.th>
                                        <x-table.th-sortable title="Fecha de Creacion" field="created_at" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    <x-table.th>
                                        <x-table.th-sortable title="Estado" field="status" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    <x-table.th>
                                        @if(auth()->user()->hasTeamPermission(auth()->user()->currentTeam,'create') || auth()->user()->isAdmin())
                                            <x-buttons.primary-href title="Crear" class="" href="{{ route('admin.news.create') }}" role="button"/>
                                        @endif
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @foreach ($this->posts as $post)
                                    <tr class=" border-b bg-blue-950 border-gray-700 break-all">
                                        <x-table.td class=" w-72 ">{{ $post->title }}</x-table.td>
                                        <x-table.td>{{ $post->user_name }}</x-table.td>
                                        {{-- <x-table.td>{{ $post->subtitle }}</x-table.td> --}}
                                        <x-table.td>{{ date('d-m-Y',strtotime($post->created_at)) }}</x-table.td>
                                        <x-table.td>
                                            <a class="cursor-pointer" @click="$wire.toggleStatus('{{ $post->id }}')">
                                                <x-badge :title="$post->status->label()" :color="$post->status->color()"/>
                                            </a>
                                        </x-table.td>
                                        <x-table.td>
                                            <x-buttons.group>
                                                <x-buttons.group-btn-href href="{{ route('admin.news.edit',$post->id) }}" class="border rounded-s-lg">
                                                    <i class="fas fa-pen text-yellow-300 w-6 h-6"></i>
                                                </x-buttons.group-btn-href>
                                                <x-buttons.group-btn-href wire:click="delete('{{ $post->id }}')" wire:confirm='Esta seguro que desea eliminar permanentemente este post?' wire:loading.attr='disabled' href="#" class="border rounded-e-lg">
                                                    <i class="fas fa-trash-alt text-red-500 w-6 h-6"></i>
                                                </x-buttons.group-btn-href>
                                            </x-buttons.group>
                                            <div class="">
                                            </div>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                            </x-slot>
                            <x-slot name="tfoot">
                            </x-slot>
                        </x-table.table-rounded>
                    </div>
                    <div class="m-4 text-white dark:text-white">
                        {{ $this->posts->links('vendor.livewire.tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
