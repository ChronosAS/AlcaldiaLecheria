<div class="flex items-center">
    {{ $title }}
    <a href="#" wire:click.prevent="sortBy('{{ $field }}')">
        <x-table.th-sort-icon :sortAsc="$sortAsc" :sortField="$sortField" field="{{ $field }}" />
    </a>
</div>
