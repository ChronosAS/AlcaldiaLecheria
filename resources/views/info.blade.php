<x-main-layout class="bg-blue-700">
    <div 
        x-data="{
            selectedTab: 'historia',
            underlineX: 0,
            underlineW: 0,
            headers: {
                historia: 'Historia y Símbolos',
                Himno: 'Himno Municipal',
                Escudo: 'Escudo Municipal',
                Bandera: 'Bandera Municipal'
            }
        }"
    >
        <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 
                class="text-7xl font-extrabold text-white drop-shadow-lg tracking-wide"
                x-text="headers[selectedTab]"
            >Historia y Símbolos</h1>
        </x-main-header>
        <div>
            <div 
                x-init="$nextTick(() => { 
                    let btn = $refs.historiaBtn; 
                    underlineX = btn.offsetLeft; 
                    underlineW = btn.offsetWidth; 
                })"
                class="relative flex flex-col items-center max-w-7xl mx-auto mt-8"
            >
                <!-- Tab Buttons -->
                <div class="flex flex-wrap justify-center gap-8 bg-blue-900/95 rounded-xl shadow-2xl px-6 py-4 relative">
                    <template x-for="tab in [
                        { key: 'historia', label: 'Historia' },
                        { key: 'Himno', label: 'Himno' },
                        { key: 'Escudo', label: 'Escudo' },
                        { key: 'Bandera', label: 'Bandera' }
                    ]" :key="tab.key">
                        <button
                            :ref="tab.key === 'historia' ? 'historiaBtn' : null"
                            @click="
                                selectedTab = tab.key;
                                let btn = $event.target;
                                underlineX = btn.offsetLeft;
                                underlineW = btn.offsetWidth;
                            "
                            :class="selectedTab === tab.key 
                                ? 'text-blue-400 font-extrabold' 
                                : 'text-white font-medium hover:text-blue-300 transition-colors'"
                            class="relative px-6 py-2 text-2xl sm:text-3xl focus:outline-none transition-all duration-300"
                            :aria-selected="selectedTab === tab.key"
                            :tabindex="selectedTab === tab.key ? '0' : '-1'"
                            role="tab"
                            x-text="tab.label"
                        ></button>
                    </template>
                    <!-- Animated Underline -->
                    <span 
                        class="absolute bottom-0 h-1 bg-blue-400 rounded transition-all duration-300"
                        :style="`left: ${underlineX}px; width: ${underlineW}px;`"
                    ></span>
                </div>

                <!-- Tab Panels with Fade/Slide Animation -->
                <div class="w-full  min-h-[300px] relative overflow-hidden">
                    <div x-show="selectedTab === 'historia'" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                        id="tabpanelHistoria" role="tabpanel" aria-label="historia">
                        <x-info.history/>
                    </div>
                    <div x-show="selectedTab === 'Himno'" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                        id="tabpanelHimno" role="tabpanel" aria-label="Himno">
                        <x-info.hymn/>
                    </div>
                    <div x-show="selectedTab === 'Escudo'" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                        id="tabpanelEscudo" role="tabpanel" aria-label="Escudo">
                        <x-info.shield/>
                    </div>
                    <div x-show="selectedTab === 'Bandera'" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                        id="tabpanelBandera" role="tabpanel" aria-label="Bandera">
                        <x-info.flag/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
