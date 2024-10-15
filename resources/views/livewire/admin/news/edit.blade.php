<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 bg-blue-900 rounded-lg">
        <x-one-column-form-section submit="update">
            <x-slot name="title">
                Detalles
            </x-slot>

            <x-slot name="description">

            </x-slot>
            <x-slot name="form">
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="title" value="Titulo" required="true" class="text-white"/>
                    <x-input id="title"  type="text" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="title" />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="subtitle" value="Sub Titulo" class="text-white"/>
                    <x-input id="subtitle" min="0" type="text" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="subtitle" />
                    <x-input-error for="subtitle" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="date" value="Fecha" required="true" class="text-white"/>
                    <x-input id="date" type="date" style="color: black" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="date" />
                    <x-input-error for="date" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="author" value="Autor"  class="text-white"/>
                    <x-input style="color: black" wire:model='author' class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm" type="text" id="author" name="author" />
                    <x-input-error for="author" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    {{-- <div wire:key="tags-select-version-{{ $iteration }}">
                        <div wire:ignore>
                            <x-label for="tags" value="Etiquetas" class="text-white"/>
                            <select wire:model='postTags' multiple name="tags" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm" id="tagsSelect">
                                @forelse ($tags as $tag)
                                    <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                @empty
                                    <option disabled>No hay etiquetas disponibles</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <x-button class="mt-2" type="button" @click="$dispatch('create-tag')">
                        Crear Etiqueta
                    </x-button> --}}
                    <x-label for="category" value="Categoria" required="true" class="text-white"/>
                    <select wire:model.live='category' name="category" class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm" id="categorySelect">
                        <option selected value=''>Elija una categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->value }}">{{ $category->label() }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="col-span-6 sm:col-span-3">
                    <x-label for="user" value="Creado Por" required="true"/>
                    <select class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 rounded-md shadow-sm" wire:model='user' name="user" id="user">
                        <option value="" selected disabled>Elija uno...</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="user" class="mt-2" />
                </div> --}}
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
        {{-- @livewire('admin.news.tags.create') --}}
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

            // $wire.on('loadPage',function(){
            //     $(document).ready(function(){
            //         $('#tagsSelect').select2({
            //             placeholder: "Seleccione etiquetas",
            //             allowClear: true,
            //             language: {
            //                 noResults: function () {
            //                     return 'No se encontraron resultados';
            //                 },
            //             }
            //         });
            //         $('#tagsSelect').val($wire.postTags);
            //         $('#tagsSelect').on('change',function(){
            //             let data = $(this).val();
            //             $wire.postTags = data;
            //         });

            //     })
            // })

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
