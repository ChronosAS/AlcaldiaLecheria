<div>
    <a wire:click='$toggle("showImage")' wire:loading.attr='disabled' class="text-black dark:text-black hover:text-blue-500 dark:hover:text-blue-500 dark:focus:text-blue-700 focus:text-blue-700">
        {{ $image->name }}
    </a>
    <x-dialog-modal wire:model.live="showImage">
        <x-slot name="title">
            {{ $image->name }}
        </x-slot>

        <x-slot name="content">
            {{ $image }}
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>
</div>
