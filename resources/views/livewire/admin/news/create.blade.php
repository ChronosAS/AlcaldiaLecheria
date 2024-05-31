<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 mt-5 lg:px-8 dark:bg-blue-900 rounded-lg">
        <x-one-column-form-section submit="save">
            <x-slot name="title">
                Detalles
            </x-slot>

            <x-slot name="description">
                Agregue el número y fecha de la ordenanza
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
                    {{-- <div class="col">
                        <label for="images"><h5>Imagenes</h5></label>
                        <input class="form-control" wire:model="images" type="file" id="images" multiple />
                        @error('images.*')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div> --}}
                    <x-table.table>
                        <x-slot name="thead">
                            <tr class="bg-blue-900 text-white">
                                <x-table.th class="pb-3 col-4">
                                    Imagenes
                                </x-table.th>
                                <x-table.th class="pb-3">
                                    Pie de foto
                                </x-table.th>
                                <x-table.th class="col-2">
                                    <button type="button" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none" wire:click="addImage">Agregar</button>
                                </x-table.th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            @foreach ($images as $index => $image)
                                <tr class="bg-slate-300 shadow-md border border-gray-700">
                                    <x-table.td>
                                        <label for="images.{{ $index }}.image" class="text-white bg-black px-[6px] py-[6px] rounded-md shadow-sm inline-block sm:hidden cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                              </svg>
                                        </label>
                                        <input class="mt-1 hidden sm:block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-md shadow-sm" wire:model="images.{{ $index }}.image" type="file" id="images.{{ $index }}.image">
                                        @error('images.*.image')
                                            <span class="text-danger"><b>{{ $message }}</b></span>
                                        @enderror
                                    </x-table.td>
                                    <x-table.td>
                                        <input class="mt-1 block w-full text-black bg-white dark:bg-white dark:text-black focus:border-orange-500 dark:focus:border-orange-400 focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-md shadow-sm"
                                        wire:model="images.{{ $index }}.description" type="text" id="images.{{ $index }}.description" name="images.{{ $index }}.description" placeholder="Ingresar...">
                                        @error('images.*.description')
                                            <span class="text-danger"><b>{{ $message }}</b></span>
                                        @enderror
                                    </x-table.td>
                                    <x-table.td class="text-center">
                                        <button wire:click="removeImage({{ $index }})" type="button" class="text-white bg-red-600 border border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center " style="border-radius: 50%" >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                              </svg>
                                        </button>
                                    </x-table.td>
                                </tr>
                            @endforeach
                            @error('images')
                                <tr><x-table.td colspan="3"><span class="text-danger"><b>{{ $message }}</b></span></x-table.td></tr>
                            @enderror
                        </x-slot>
                    </x-table.table>
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
                <div class="">
                    <x-button data-twe-ripple-init data-twe-ripple-color="light">
                        Agregar
                    </x-button>
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:navigate href="{{ route('admin.news.index') }}">Regresar</a>
                </div>
            </x-slot>
        </x-one-column-form-section>
    </div>
    @push('styles')
        <style>
            .ck.ck-content:not(.ck-comment__input *) {
                min-height: 35em;
                height: 35em;
            }
        </style>
    @endpush
    @push('scripts')
        <script>

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
    @endpush
</div>
