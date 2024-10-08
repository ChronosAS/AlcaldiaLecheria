<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-blue-800 dark:bg-gradient-to-bl dark:from-blue-700/50 dark:via-transparent border-b border-gray-200 dark:border-blue-700">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-black" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input wire:model.live='search' type="text" name="search" id="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
                            </div>
                        </div>
                        <x-table.table-rounded>
                            <x-slot name="thead" >
                                <tr class="bg-blue-900 text-white">
                                    <x-table.th>
                                        <x-table.th-sortable title="Numero" field="number" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    {{-- <x-table.th>
                                        <x-table.th-sortable title="Sub-Titulo" field="subtitle" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th> --}}
                                    <x-table.th>
                                        <x-table.th-sortable title="Fecha" field="date" :sortAsc="$sortAsc" :sortField="$sortField" />
                                    </x-table.th>
                                    <x-table.th>
                                        @if(auth()->user()->hasTeamPermission(auth()->user()->currentTeam,'create') || auth()->user()->isAdmin())
                                            <x-buttons.primary-href title="Agregar" class="" wire:navigate.hover href="{{ route('admin.ordinance.create') }}" role="button"/>
                                        @endif
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @foreach ($ordinances as $ordinance)
                                    <tr class="bg-white border-b dark:bg-blue-950 dark:border-gray-700">
                                        <x-table.td>{{ $ordinance->number }}</x-table.td>
                                        {{-- <x-table.td>{{ $post->subtitle }}</x-table.td> --}}
                                        <x-table.td>{{ $ordinance->date }}</x-table.td>
                                        <x-table.td>
                                            <x-buttons.group>
                                                <x-buttons.group-btn-href href="#" class="border rounded-s-lg">
                                                    <i class="far fa-eye text-blue-500 w-6 h-6"></i>
                                                </x-buttons.group-btn-href>
                                                <x-buttons.group-btn-href href="#" class="border-t border-b">
                                                    <i class="fas fa-pen text-yellow-300 w-6 h-6"></i>
                                                </x-buttons.group-btn-href>
                                                {{-- <a href=" route('news.show',[ 'post' => $post->id, 'slug' => $post->slug ]) "></a>
                                                <a href=" route('admin.news.edit',[ 'post' => $post->id]) " ></a> --}}
                                                @if(!$ordinance->trashed())
                                                    <x-buttons.group-btn-href href="#" class="border rounded-e-lg">
                                                        <i class="fas fa-trash-alt text-red-500 w-6 h-6"></i>
                                                    </x-buttons.group-btn-href>
                                                    {{-- <a type="button" wire:click="delete( $post->id ) }})"><i class="fas fa-trash-alt text-red-500 w-6 h-6"></i></a> --}}
                                                @else
                                                    <x-buttons.group-btn-href href="#" class="border rounded-e-lg">
                                                        <i class="fas fa-trash-restore-alt text-green-500 w-6 h-6"></i>
                                                    </x-buttons.group-btn-href>
                                                @endif
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
                </div>
            </div>
            <div class="m-4 text-white dark:text-white">
                {{ $ordinances->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
