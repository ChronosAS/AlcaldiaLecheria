<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 bg-blue-900 rounded-lg">
        <x-form-section submit="create">
            <x-slot name="title">
                Detalles
            </x-slot>

            <x-slot name="description">
                Agregue el número y fecha de la ordenanza
            </x-slot>

            <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="Titulo" required="true"/>
                    <x-input id="name"  type="text" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-blue-500  focus:ring-2 focus:ring-blue-500 " wire:model="state.name" autofocus />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="number" value="Numero" required="true"/>
                    <x-input id="number" min="0" type="number" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-blue-500  focus:ring-2 focus:ring-blue-500 " wire:model="state.name" autofocus />
                    <x-input-error for="number" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="date" value="Fecha" required="true"/>
                    <x-input id="date" type="date" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-blue-500  focus:ring-2 focus:ring-blue-500 " wire:model="state.name" autofocus />
                    <x-input-error for="date" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="file" value="Archivo" required="true"/>
                    <x-input id="file" type="file" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-blue-500  focus:ring-2 focus:ring-blue-500 " wire:model="state.name" autofocus />
                    <x-input-error for="file" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <div class="">
                    <x-button data-twe-ripple-init data-twe-ripple-color="light" class="bg-green-600 hover:bg-green-500 focus:bg-green-700 focus:ring-green-800 text-white">
                        Agregar
                    </x-button>
                    <a class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-white focus:bg-white active:bg-gray-300 focus:outline-none focus:ring-2  focus:ring-offset-2focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:navigate href="{{ route('ordinance.index') }}">Regresar</a>
                </div>
            </x-slot>
        </x-form-section>
    </div>
</div>
