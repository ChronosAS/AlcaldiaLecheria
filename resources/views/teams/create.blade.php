<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-200 leading-tight">
            {{ __('Create Team') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 bg-blue-900 dark:bg-blue-900 rounded-lg">
            @livewire('teams.create-team-form')
        </div>
    </div>
</x-admin-layout>
