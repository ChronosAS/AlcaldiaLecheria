<x-main-layout class="bg-white">
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">Directorio</h1>
    </x-main-header>

    <section class="bg-blue-700">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center  lg:px-6">

            <!-- Alpine root for modal and helper methods -->
            <div x-data='{
                    showModal: false,
                    modalMember: null,
                    openModal(member) { this.modalMember = member; this.showModal = true; },
                    closeModal() { this.showModal = false; this.modalMember = null; }
                }'
                class="grid gap-8 gap-x-2  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
            >

                <!-- Card 1 -->
                <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            links: [
                                { name: "", url: "https://twitter.com/usuario", icon: "<i class=\"fab fa-x-twitter\"></i>" },
                                { name: "", url: "https://instagram.com/usuario", icon: "<i class=\"fab fa-instagram\"></i>" }
                            ],
                            bio: @json(" 0281-2813683, lecheria.com."),
                            local: @json("Av Diego Bautista Urbaneja, Lechería 6016, calle Anzoátegui."),
                            img: @json(asset("assets/img/directive-team/dir2.webp")),
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 5 -->
                <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 6 (fixed h/full typo) -->
            <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>
                <!-- Card 7 -->
            <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Card 8 -->
            <div class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full" x-data="{ hover: false }">
                    <a href="#" class="flex flex-col h-full" @click.prevent='openModal({
                            name: @json(__('director de tecnologia y sistemas')),
                            role: @json("Gabriel Gomez"),
                            bio: @json("Redes sociales, numero de contacto, correo electronico."),
                            img: @json(asset("assets/img/directive-team/dir2.webp"))
                        })'
                    >
                        <div class="relative shadow-xl w-full aspect-[5/4] h-full" @mouseenter="hover = true" @mouseleave="hover = false">
                            <img class="w-full h-full object-cover object-center transition-transform duration-300  mx-auto" src="{{ asset('assets/img/directive-team/dir2.webp') }}" alt="">
                            <div x-show="hover" x-transition class="absolute inset-0 flex items-center justify-center bg-blue-700/30 text-white text-sm font-bold">
                                <div class="text-center">
                                    <p class="text-sm">Dirección de tecnologia y sistemas</p>
                                    <p class="text-sm"></p>
                                </div>
                            </div>
                            <div class="relative bg-blue-900 text-white text-xs font-semibold px-2 py-1">Director de Tecnologia y Sistemas</div>
                        </div>
                    </a>
                </div>

                <!-- Modal: image + info card -->
                <div
                    x-show="showModal"
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 p-4"
                    @click.self="closeModal()"
                    style="display: none;"
                >
                    <div class="max-w-4xl w-full bg-white rounded-xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
                        <!-- Image -->
                        <div class="p-4 flex items-center justify-center bg-gray-50">
                            <img :src="modalMember && modalMember.img" alt="" class="max-w-full max-h-[60vh] object-cover rounded-lg shadow" />
                        </div>

                        <!-- Info card -->
                        <div class="p-8 relative">
                            <!-- botón de cerrar en la esquina superior derecha -->
                            <button @click="closeModal()" class="absolute top-4 right-4 text-slate-500 hover:text-slate-800" aria-label="Cerrar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                            <!-- contenido centrado -->
                            <div class="flex flex-col items-center text-center">
                                <h2 class="text-2xl font-extrabold text-slate-900 " x-text="modalMember && modalMember.name"></h2>
                                <p class="text-sm text-blue-600 font-semibold mt-1" x-text="modalMember && modalMember.role"></p>

                                <div class="mt-3 flex items-center gap-3 justify-center" x-show="modalMember && modalMember.links">
                                    <template x-for="link in (modalMember && modalMember.links) || []" :key="link.url">
                                        <a :href="link.url" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-blue-600 hover:underline">
                                            <span class="w-4 h-4" x-html="link.icon"></span>
                                            <span x-text="link.name"></span>
                                        </a>
                                    </template>
                                </div>
                                <div class="mt-4 text-sm text-slate-700 leading-relaxed" x-text="modalMember && modalMember.bio"></div>
                                <div class="mt-4 text-sm text-slate-700 leading-relaxed" x-text="modalMember && modalMember.local"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>  <!-- end Alpine root grid -->

        </div>
    </section>
</x-main-layout>