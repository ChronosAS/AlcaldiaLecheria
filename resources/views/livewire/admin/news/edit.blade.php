<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 dark:bg-blue-900 rounded-lg">
        <x-one-column-form-section submit="update">
            <x-slot name="title">
                Detalles
            </x-slot>

            <x-slot name="description">

            </x-slot>
            <x-slot name="form">
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="title" value="Titulo" required="true"/>
                    <x-input id="title"  type="text" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500" wire:model="title" />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="subtitle" value="Sub Titulo"/>
                    <x-input id="subtitle" min="0" type="text" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500" wire:model="subtitle" />
                    <x-input-error for="subtitle" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="date" value="Fecha" required="true"/>
                    <x-input id="date" type="date" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500" wire:model="date" />
                    <x-input-error for="date" class="mt-2" />
                    {{-- <div  class="inline-flex ml-1 mt-5 text-white items-center">
                        <x-checkbox id="is_draft" wire:model='is_draft' name="is_draft" class="text-orange-500 border-orange-300 focus:ring-orange-500"/>
                        <label for="is_draft" class="cursor-pointer ms-2 mt-[0.10rem] text-md">
                            Borrador
                        </label>
                   </div> --}}
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="user" value="Creado Por" required="true"/>
                    <select class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-md shadow-sm" wire:model='user' name="user" id="user">
                        <option value="" selected disabled>Elija uno...</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="user" class="mt-2" />
                </div>
                <div class="col-span-6">
                @livewire('admin.news.post-images-table',['post'=>$post])
                </div>
                <div class="col-span-6">
                    @if (session()->has('message'))
                        <p class='text-sm text-red-600 dark:text-red-400'>{{  session('message') }}</p>
                    @endif
                    <div wire:ignore class="pt-4">
                        <textarea
                            id="editor"
                            wire:model="content">
                            {{ $content }}
                        </textarea>
                    </div>
                    <x-input-error for="content" class="mt-2" />
                </div>
            </x-slot>
            <x-slot name="actions">
                <div class="flex mx-3 space-x-3 items-center text-white">
                    <x-custom-checkbox name="status" title="Borrador" value="true"/>
                    <x-button>
                        Actualizar
                    </x-button>
                    <x-button-href wire:navigate route="{{ route('admin.news.index') }}">Regresar</x-button-href>
                </div>
            </x-slot>
        </x-one-column-form-section>
        @livewire('admin.news.add-image-modal',['post' => $post])
    </div>
    @push('styles')
        <style>
            .ck.ck-content:not(.ck-comment__input *) {
                min-height: 35em;
                height: 35em;
            }
        </style>
    @endpush
    @script
        <script type="module">

            ClassicEditor
            .create( document.querySelector( '#editor' ), {
                mediaEmbed: {previewsInData: true}
            } )
            .then(function(editor) {
                editor.model.document.on('change:data', () => {
                    @this.set('content', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        </script>
    @endscript
</div>
