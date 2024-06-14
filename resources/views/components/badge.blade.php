@props([
    'title',
    'color',
])

<span {{ $attributes->merge(['class' => 'text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded '.$color]) }} class="">{{ $title }}</span>
