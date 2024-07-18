<div>
    <x-dialog-modal wire:model="ordinanceModal">
        <x-slot name="title">
            <h1 class="text-center">
                Ver Ordenanza
            </h1>
        </x-slot>
        <x-slot name="content">
            <a href="{{ url('/') }}/assets/ordenanzas/8-6-2024/ordenanza.pdf" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('assets/Ordenanzas/8-6-2024/ordenanza_portada.webp') }}" alt="ordenanza-8-6-2024">
            </a>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>
</div>
