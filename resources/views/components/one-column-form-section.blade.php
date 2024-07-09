@props(['submit'])

<div {{ $attributes->merge(['class' => 'grid']) }}>

    <div class="mt-5 col-span-2 sm:">
        <form wire:submit="{{ $submit }}">
            <div class="px-4 py-5 bg-white dark:bg-blue-800 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-blue-900 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
