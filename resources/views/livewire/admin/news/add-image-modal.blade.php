<div>
    <x-dialog-modal wire:model.live="addImage">
        <x-slot name="title">
            Agregar Imagen
        </x-slot>

        <x-slot name="content">
            <div class="">
                <x-label for="image" value="Imagen"/>
                <label for="image" class="text-white bg-black px-[6px] py-[6px] rounded-md shadow-sm inline-block sm:hidden cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                      </svg>
                </label>
                <input class="mt-1 hidden sm:block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-md shadow-sm" wire:model="image" type="file" id="image">
                <x-input-error for="image" class="mt-2" />
            </div>
            <div class="mt-5">
                <x-label for="description" value="Sub Titulo"/>
                <input class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-md shadow-sm" wire:model="description" type="text" id="description" name="description" placeholder="Ingresar...">
                <x-input-error for="description" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-buttons.primary @click="$wire.saveImage()" title="Agregar" type="button"/>
        </x-slot>
    </x-dialog-modal>
</div>
