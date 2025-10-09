@props(['disabled' => false,'id'])

<input wire:model.debounce='{{ $id }}' {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  focus:border-indigo-500  focus:ring-indigo-500  shadow-sm']) !!}>
