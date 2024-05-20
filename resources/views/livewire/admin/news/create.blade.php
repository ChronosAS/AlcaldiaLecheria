<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
     <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 dark:bg-blue-900 rounded-lg">
        <x-form-section submit="create">
            <x-slot name="title">
                Detalles
            </x-slot>

            <x-slot name="description">
                Escriba la noticia y fecha de subida.
            </x-slot>

            <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                   
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="date" value="Fecha" required="true"/>
                    <x-input id="date" type="date" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-600 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600" wire:model="state.name" autofocus />
                    <x-input-error for="date" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-4">
                   
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button data-twe-ripple-init data-twe-ripple-color="light">
                    Agregar
                </x-button>
            </x-slot>
        </x-form-section>
    </div>
</div>
