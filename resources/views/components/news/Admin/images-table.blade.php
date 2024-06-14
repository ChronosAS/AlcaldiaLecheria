<div>
    <x-table.table>
        <x-slot name="thead">
            <x-th class="pb-3 col-4">
                Imagenes
            </x-th>
            <x-th class="pb-3">
                Pie de foto
            </x-th>
            <x-th class="col-2">

            </x-th>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($images as $index => $image)
                <tr>
                    <x-td>
                        {{ $image->name }}
                    </x-td>
                    <x-td>
                        {{ $image->getCustomProperty('description') }}
                    </x-td>
                    <x-td>
                        <div class="btn-group">
                            @if ($index != 0)
                            <a wire:click.live="moveImageUp({{ $image->order_column }})" class="btn btn-primary">
                                <i class="fas fa-arrow-up"></i>
                            </a>
                            @endif
                            @if($index != count($images)-1)
                            <a wire:click.live="moveImageDown({{ $image->order_column }})" class="btn btn-primary">
                                <i class="fas fa-arrow-down"></i>
                            </a>
                            @endif
                            <a wire:click.live="deleteImage({{ $index }})" class="btn btn-danger">
                                <i class="fas fa-window-close"></i>
                            </a>
                        </div>
                    </x-td>
                </tr>
            @empty
                <tr><h2>No hay imagenes en este post</h2></tr>
            @endforelse
        </x-slot>
    </x-table>
</div>
