@props(['id' => null, 'maxWidth' => null,'transparent' => false])

<x-modal :id="$id" :maxWidth="$maxWidth" :transparent="$transparent" {{ $attributes }}>
    <div class="px-6 py-4 ">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-white">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 text-end">
        {{ $footer }}
    </div>
</x-modal>
