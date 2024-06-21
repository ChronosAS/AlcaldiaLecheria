@props([
    'name',
    'value',
    'title' => null,
    'wire' => 'live',
    'id' => null
])

<div class="flex items-center">
    <input
        type="checkbox"
        id="{{ $id ?? $title }}"
        name="{{ $name }}"
        value="{{ $value }}"
        wire:model.{{ $wire }}="{{ $name }}"
        @class([
            'rounded border-gray-300  text-blue-600 shadow-sm focus:ring-blue-500' => !$errors->has($name),
            'rounded border-gray-300  text-red-600 shadow-sm focus:ring-red-500' => $errors->has($name),
        ])
    >
    <label
        for="{{ $id ?? $title }}"
        @class([
            'ml-3 block text-sm font-medium text-white-700' => !$errors->has($name),
            'ml-3 block text-sm font-medium text-red-600' => $errors->has($name),
        ])
    >
        {{ $title }}
    </label>
</div>
