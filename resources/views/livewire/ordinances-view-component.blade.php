<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">ORDENANZAS</h1>
    </x-main-header>
    <div class="my-8 space-y-4 px-4 mx-auto max-w-7xl">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 ">
          <div class="mt-5 space-y-4 md:space-y-6">
            <section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center">

                <!--    Product card  -->
                <div class="w-72 scale-75 bg-blue-800 shadow-md rounded-xl duration-500 hover:scale-90 hover:shadow-xl">
                    <a href="#" wire:click="$toggle('ordinance006Modal')">
                        <img src="{{ asset('assets/img/ordinances/N006-2024/frontpage.jpg') }}"
                                alt="N006-2024" class="scale-80 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-200 mr-3 uppercase text-xs">Brand</span>
                            <p class="text-lg font-bold text-white truncate block capitalize">Product Name</p>

                        </div>
                    </a>
                </div>
                  <div class="w-72 scale-75 bg-blue-800 shadow-md rounded-xl duration-500 hover:scale-90 hover:shadow-xl">
                    <a href="#" wire:click="$toggle('ordinance006Modal')">
                        <img src="{{ asset('assets/img/ordinances/N006-2024/frontpage.jpg') }}"
                                alt="N006-2024" class="scale-80 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-200 mr-3 uppercase text-xs">Brand</span>
                            <p class="text-lg font-bold text-white truncate block capitalize">Product Name</p>

                        </div>
                    </a>
                </div>
                  <div class="w-72 scale-75 bg-blue-800 shadow-md rounded-xl duration-500 hover:scale-90 hover:shadow-xl">
                    <a href="#" wire:click="$toggle('ordinance006Modal')">
                        <img src="{{ asset('assets/img/ordinances/N006-2024/frontpage.jpg') }}"
                                alt="N006-2024" class="scale-80 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-200 mr-3 uppercase text-xs">Brand</span>
                            <p class="text-lg font-bold text-white truncate block capitalize">Product Name</p>

                        </div>
                    </a>
                </div>
                  <div class="w-72 scale-75 bg-blue-800 shadow-md rounded-xl duration-500 hover:scale-90 hover:shadow-xl">
                    <a href="#" wire:click="$toggle('ordinance006Modal')">
                        <img src="{{ asset('assets/img/ordinances/N006-2024/frontpage.jpg') }}"
                                alt="N006-2024" class="scale-80 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-200 mr-3 uppercase text-xs">Brand</span>
                            <p class="text-lg font-bold text-white truncate block capitalize">Product Name</p>

                        </div>
                    </a>
                </div>
                <!--   Product card Ends -->
            </section>
          </div>
        </div>
    </div>
    @push('modals')
        <x-dialog-modal wire:model.live="ordinance006Modal">
            <x-slot name="title">

            </x-slot>

            <x-slot name="content">
               <x-carousel>
                    <x-slot name="items">
                        @foreach ($images as $image)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset($image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        @endforeach
                    </x-slot>
                    <x-slot name="indicators">
                        {{-- @foreach ($images as $index => $image)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{ $index }}" data-carousel-slide-to="{{ $index }}"></button>
                        @endforeach--}}
                    </x-slot>
               </x-carousel>
            </x-slot>

            <x-slot name="footer">

            </x-slot>
        </x-dialog-modal>
    @endpush
</div>
