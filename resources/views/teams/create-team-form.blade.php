<x-form-section submit="createTeam">
    <x-slot name="title">
        {{ __('Team Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new team to collaborate with others on projects.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <x-label value="{{ __('Team Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="w-12 h-12 rounded-full object-cover" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="ms-4 leading-tight">
                    <div class="text-white">{{ $this->user->name }}</div>
                    <div class="text-gray-300 text-sm">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Team Name') }}" />
            <x-input id="name" type="text" style="color: black" class="mt-1 block w-full text-black bg-white  focus:border-blue-600 focus:ring-2 focus:ring-blue-600" wire:model="state.name" autofocus />
            <x-input-error for="name" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button class="bg-green-600 hover:bg-green-500 focus:bg-green-700 focus:ring-green-800 text-white">
            {{ __('Create') }}
        </x-button>
    </x-slot>
</x-form-section>
