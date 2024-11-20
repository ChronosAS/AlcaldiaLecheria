@props(['disabled' => false,'id'])

<input wire:model.debounce='{{ $id }}' {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm']) !!}>
