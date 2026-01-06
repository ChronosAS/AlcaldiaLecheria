<div>
    <form wire:submit='save'>
        <x-dialog-modal maxWidth="md" wire:model="createTagModal">
            <x-slot name="title">
                Crear Etiqueta
            </x-slot>
            <x-slot name="content">
                <x-input id="name"  type="text" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-orange-500  focus:ring-2 focus:ring-orange-500 " wire:model="name" />
                <x-input-error for="name" class="mt-2" />
            </x-slot>
            <x-slot name="footer">
                <x-button>
                    Agregar
                </x-button>
            </x-slot>
        </x-dialog-modal>
    </form>
</div>
