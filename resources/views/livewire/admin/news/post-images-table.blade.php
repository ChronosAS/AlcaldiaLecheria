<div>
    <x-table.table-rounded>
        <x-slot name="thead">
            <tr class="bg-blue-900 text-white">
                <x-table.th class="text-white">
                    Imagenes
                </x-table.th>
                <x-table.th class="text-white">
                    Pie de foto
                </x-table.th>
                <x-table.th>

                </x-table.th>
            </tr>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($images as $index => $image)
                <tr class="bg-slate-300 shadow-md border border-gray-700">
                    <x-table.td>
                        <div class="text-black">
                            <a wire:click='show-image' wire:loading.attr='disabled' class="text-black dark:text-black hover:text-blue-500 dark:hover:text-blue-500 dark:focus:text-blue-700 focus:text-blue-700 cursor-pointer">
                                {{ $image->name }}
                            </a>
                            @livewire('admin.news.show-image-modal',['media'=>$image])
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="text-black">
                            {{ $image->getCustomProperty('description') }}
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="btn-group">
                            @if ($index != 0)
                                <x-button-href route="#" class="bg-blue-500 text-white dark:bg-blue-500" wire:click.live="moveImageUp({{ $image->order_column }})" wire:loading.attr='disabled'>
                                    <i class="fas fa-arrow-up"></i>
                                </x-button-href>
                            @endif
                            @if($index != count($images)-1)
                                <x-button-href route="#" class="bg-blue-500 text-white dark:bg-blue-500" wire:click.live="moveImageDown({{ $image->order_column }})" wire:loading.attr='disabled'>
                                    <i class="fas fa-arrow-down"></i>
                                </x-button-href>
                            @endif
                            <x-button-href route="#" class="bg-red-600 text-white focus:bg-red-700 dark:focus:bg-red-700 hover:bg-red-500 dark:hover:bg-red-500 dark:bg-red-600 border-red-600 dark:border-red-600" wire:click.live="deleteImage({{ $index }})" wire:confirm='Seguro que desea borrar esta imagen?' wire:loading.attr='disabled'>
                                <i class="fas fa-window-close"></i>
                            </x-button-href>

                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr class="bg-slate-300  shadow-md border border-gray-700"><x-table.td><h2 class="text-black">No hay imagenes en este post</h2></x-table.td><td></td><td></td></tr>
            @endforelse
        </x-slot>
    </x-table.table-rounded>
</div>
