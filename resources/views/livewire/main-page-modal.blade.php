<div>
    <x-dialog-modal wire:model="ordinanceModal">
        <x-slot name="title">
            {{-- <h1 class="text-center">
                Ver Ordenanza
            </h1> --}}
        </x-slot>
        <x-slot name="content">
            <a href="{{ route('app.vdv') }}">
                <img src="{{ asset('assets/img/VDV/Popup-VDV2024.webp') }}" alt="ordenanza-8-6-2024">
            </a>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>
</div>
