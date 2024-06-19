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
                    if (this.currentSlideIndex > 1) {
                        this.currentSlideIndex = this.currentSlideIndex - 1
                    } else {
                        // If it's the first slide, go to the last slide
                        this.currentSlideIndex = this.slides.length
                    }
                },
                next() {
                    if (this.currentSlideIndex < this.slides.length) {
                        this.currentSlideIndex = this.currentSlideIndex + 1
                    } else {
                        // If it's the last slide, go to the first slide
                        this.currentSlideIndex = 1
                    }
                },
                handleTouchStart(event) {
                    this.touchStartX = event.touches[0].clientX
                },
                handleTouchMove(event) {
                    this.touchEndX = event.touches[0].clientX
                },
                handleTouchEnd() {
                    if(this.touchEndX){
                        if (this.touchStartX - this.touchEndX > this.swipeThreshold) {
                            this.next()
                        }
                        if (this.touchStartX - this.touchEndX < -this.swipeThreshold) {
                            this.previous()
                        }
                        this.touchStartX = null
                        this.touchEndX = null
                    }
                },
                 autoplay() {
                    this.autoplayInterval = setInterval(() => {
                        if (! this.isPaused) {
                            this.next()
                        }
                    }, this.autoplayIntervalTime)
                },
                // Updates interval time
                setAutoplayInterval(newIntervalTime) {
                    clearInterval(this.autoplayInterval)
                    this.autoplayIntervalTime = newIntervalTime
                    this.autoplay()
                },
            }" x-init="autoplay" class="relative w-full rounded-xl ">

            <!-- slides -->
            <!-- Change min-h-[50svh] to your preferred height size -->
            <div class=" min-h-[65svh] w-full rounded-xl" x-on:touchstart="handleTouchStart($event)" x-on:touchmove="handleTouchMove($event)" x-on:touchend="handleTouchEnd()">
                <template x-for="(slide, index) in slides">
                    <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0 rounded-xl" x-transition.opacity.duration.1000ms>
                        <!-- Title and description -->
                        <div class="rounded-xl absolute inset-0 flex flex-col items-center justify-end gap-2  px-16 py-12 text-center">
                            <div class="bg-slate-500/50 px-14">
                                <h3 @click="$wire.show(slide.id)" class="w-full cursor-pointer lg:w-[80%]  text-sm lg:text-lg font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                <p class=" w-full text-pretty text-sm text-slate-300" x-text="slide.subtitle" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                            </div>
                        </div>

                        <img class="static w-full h-full rounded-xl inset-0  text-slate-300 " x-bind:src="slide.image" x-bind:alt="slide.imageAlt" />
                    </div>
                </template>
            </div>

            <!-- Pause/Play Button -->
            <div class="relative ">
                <button type="button" class="fixed hidden sm:hidden bottom-5 right-5 z-20 rounded-full text-slate-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
                    <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                        <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
                    </svg>
                    <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                        <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
                    </svg>
                </button>

                <!-- indicators -->
                <div class=" static justify-center rounded-xl bottom-3 md:bottom-5  z-20 flex  gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
                    <template x-for="(slide, index) in slides">
                        <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
                    </template>
                </div>
            </div>
        </div>
    @endif
</div>
