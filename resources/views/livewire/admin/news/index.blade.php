<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg">
                <x-table.table-rounded>
                    <x-slot name="thead" >
                        <tr class="bg-blue-900 text-white">
                            <x-table.th>
                                <x-table.th-sortable title="Titulo" field="title" :sortAsc="$sortAsc" :sortField="$sortField" />
                            </x-table.th>
                            {{-- <x-table.th>
                                <x-table.th-sortable title="Sub-Titulo" field="subtitle" :sortAsc="$sortAsc" :sortField="$sortField" />
                            </x-table.th> --}}
                            <x-table.th>
                                <x-table.th-sortable title="Fecha de Creacion" field="created_at" :sortAsc="$sortAsc" :sortField="$sortField" />
                            </x-table.th>
                            <x-table.th>
                                <x-buttons.primary-href title="Crear" class="" href="" role="button"/>
                            </x-table.th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($posts as $post)
                            <tr class="bg-white border-b dark:bg-blue-950 dark:border-gray-700">
                                <x-table.td>{{ $post->title }}</x-table.td>
                                {{-- <x-table.td>{{ $post->subtitle }}</x-table.td> --}}
                                <x-table.td>{{ date('d-m-Y',strtotime($post->created_at)) }}</x-table.td>
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
                                        @if(!$post->trashed())
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
            <div class="m-4 text-white dark:text-white">
                {{ $posts->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
