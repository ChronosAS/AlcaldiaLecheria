<div>
    @if(count($this->posts)>0)
        <div x-data="{
            autoplayIntervalTime: 5000,
            slides: {{ $this->posts->take(5) }},
            isPaused: false,
            autoplayInterval: null,
            currentSlideIndex: 1,
            touchStartX: null,
            touchEndX: null,
            swipeThreshold: 50,
            previous() {
                this.currentSlideIndex = this.currentSlideIndex > 1 ? this.currentSlideIndex - 1 : this.slides.length;
            },
            next() {
                this.currentSlideIndex = this.currentSlideIndex < this.slides.length ? this.currentSlideIndex + 1 : 1;
            },
            handleTouchStart(event) { this.touchStartX = event.touches[0].clientX },
            handleTouchMove(event) { this.touchEndX = event.touches[0].clientX },
            handleTouchEnd() {
                if(this.touchEndX){
                    if (this.touchStartX - this.touchEndX > this.swipeThreshold) this.next();
                    if (this.touchStartX - this.touchEndX < -this.swipeThreshold) this.previous();
                    this.touchStartX = null; this.touchEndX = null;
                }
            },
            autoplay() {
                this.autoplayInterval = setInterval(() => { if (!this.isPaused) this.next() }, this.autoplayIntervalTime)
            },
            setAutoplayInterval(newIntervalTime) {
                clearInterval(this.autoplayInterval)
                this.autoplayIntervalTime = newIntervalTime
                this.autoplay()
            },
        }" x-init="autoplay" class="relative w-full rounded-2xl shadow-xl bg-gradient-to-br from-blue-50 via-white to-blue-100 overflow-hidden">

            <!-- Slides -->
            <div class="min-h-[44svh] sm:min-h-[60svh] w-full relative" 
                x-on:touchstart="handleTouchStart($event)" 
                x-on:touchmove="handleTouchMove($event)" 
                x-on:touchend="handleTouchEnd()">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-cloak x-show="currentSlideIndex == index + 1"
                        class="absolute inset-0 flex flex-col justify-end items-center transition-all duration-700"
                        x-transition:enter="transition-all ease-out duration-700"
                        x-transition:enter-start="opacity-0 scale-95 translate-x-10"
                        x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                        x-transition:leave="transition-all ease-in duration-500"
                        x-transition:leave-start="opacity-100 scale-100 translate-x-0"
                        x-transition:leave-end="opacity-0 scale-95 -translate-x-10"
                    >
                        <img class="w-full h-full object-cover object-center rounded-2xl brightness-95 transition-transform duration-700 group-hover:scale-105"
                             x-bind:src="slide.image" x-bind:alt="slide.imageAlt" />
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-blue-900/20 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-0 left-0 right-0 px-6 py-8 flex flex-col items-center">
                            <div class="bg-white/80 backdrop-blur-md rounded-xl px-6 py-4 shadow-lg max-w-2xl w-full transition-all duration-500 hover:scale-105">
                                <h3 @click="$wire.show(slide.id)" class="cursor-pointer text-base md:text-lg font-bold text-blue-900 text-center truncate" x-text="slide.title"></h3>
                                <p class="mt-1 text-xs md:text-sm text-gray-700 text-center" x-text="slide.subtitle"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Navigation Arrows -->
            <button type="button"
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-blue-400"
                aria-label="Anterior"
                x-on:click="previous()"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button type="button"
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-blue-400"
                aria-label="Siguiente"
                x-on:click="next()"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Pause/Play Button -->
            <button type="button"
                class="absolute bottom-6 right-6 bg-white/80 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition focus:outline-none focus:ring-2 focus:ring-blue-400"
                aria-label="Pausar carrusel"
                x-on:click="isPaused = !isPaused"
                x-bind:aria-pressed="isPaused"
            >
                <svg x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                    <rect x="6" y="4" width="2.5" height="12" rx="1"/>
                    <rect x="11.5" y="4" width="2.5" height="12" rx="1"/>
                </svg>
                <svg x-show="isPaused" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                    <polygon points="5,4 15,10 5,16"/>
                </svg>
            </button>

            <!-- Indicators -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                        class="w-3 h-3 rounded-full border border-blue-300 transition-all duration-300"
                        :class="currentSlideIndex === index + 1 ? 'bg-blue-600 scale-125 shadow-lg' : 'bg-blue-200 hover:bg-blue-400'"
                        x-on:click="currentSlideIndex = index + 1"
                        :aria-label="'Ir a la diapositiva ' + (index + 1)"
                    ></button>
                </template>
            </div>
        </div>
    @endif
</div>
