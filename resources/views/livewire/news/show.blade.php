<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">Noticias</h1>
    </x-main-header>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white ">
        <div class="flex justify-between px-4  rounded-xl  ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue">
                <header class="mb-4 lg:mb-6 not-format">
                    <div x-data="{
                        // Sets the time between each slides in milliseconds
                        autoplayIntervalTime: 8500,
                        slides: {{ collect($images) }},
                        currentSlideIndex: 1,
                        isPaused: false,
                        autoplayInterval: null,
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
                    }" x-init="autoplay" class="relative w-full bg-slate-400/50 overflow-hidden">


                         <!-- Previous Button -->
                        <button type="button" class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600" aria-label="previous slide" x-on:click="previous()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <!-- Next Button -->
                        <button type="button" class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600" aria-label="next slide" x-on:click="next()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                        <!-- slides -->
                        <!-- Change min-h-[50svh] to your preferred height size -->
                        <div class="relative min-h-[50svh] w-full">
                            <template x-for="(slide, index) in slides">
                                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>

                                    <!-- Title and description -->
                                    {{-- <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                                        <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                        <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                                    </div> --}}

                                    <img class="absolute w-full h-full inset-0 object-contain text-slate-700 dark:text-slate-300" x-bind:src="slide.url" x-bind:alt="slide.alt" />
                                </div>
                            </template>
                        </div>

                        <!-- Pause/Play Button -->
                        <button type="button" class="absolute bottom-5 right-5 z-20 rounded-full text-slate-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
                            <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
                            </svg>
                            <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
                            </svg>
                        </button>

                        <!-- indicators -->
                        <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
                            <template x-for="(slide, index) in slides">
                                <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
                            </template>
                        </div>
                    </div>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 "></a>
                                <p class="text-base text-gray-500 "></p>
                                <p class="text-base text-gray-500 "><time pubdate datetime="" title=""></time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-1 text-3xl text-center font-extrabold leading-tight text-gray-900 lg:mb-2 lg:text-4xl ">{{ $post->title }}</h1>
                    <h3 class="mb-4 text-md text-center font-bold leading-tight text-gray-900 lg:mb-6 lg:text-xl ">{{ $post->subtitle }}</h3>
                </header>
                {!! $post->content !!}
            </article>
        </div>
    </main>
</div>
