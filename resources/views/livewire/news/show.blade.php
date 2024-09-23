<div class="">
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">Noticias</h1>
    </x-main-header>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 max-w-7xl my-8 mt-0 space-y-4 px-4 mx-auto ">
        <x-full-card>
            <div class="justify-between px-4  rounded-xl ">
                <div>
                    <x-slot name="content">
                        <article class="mx-auto mb-10 max-w-[45rem] format format-sm sm:format-base lg:format-lg format-blue ">
                            <header class="mb-4 lg:mb-6 not-format">
                                <div x-data="{
                                    // Sets the time between each slides in milliseconds
                                    autoplayIntervalTime: 8500,
                                    slides: {{ collect($images) }},
                                    currentSlideIndex: 1,
                                    touchStartX: null,
                                    touchEndX: null,
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
                                }" x-init="autoplay" class="relative w-full bg-white overflow-hidden">
                                    <!-- Next Button -->
                                    <div class="relative min-h-[50svh] w-full grid grid-cols-5 grid-rows-5 gap-4" x-on:touchstart="handleTouchStart($event)" x-on:touchmove="handleTouchMove($event)" x-on:touchend="handleTouchEnd()">
                                        <template x-for="(slide, index) in slides">
                                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                                                <img class="relative w-full h-full inset-0 object-contain text-slate-700 dark:text-slate-300" x-bind:src="slide.url" x-bind:alt="slide.alt" />
                                            </div>
                                        </template>
                                        <button type="button" class="absolute row-span-5 left-5 top-1/2 z-0 rounded-full -translate-y-2/4 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600" aria-label="previous slide" x-on:click="previous()">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                            </svg>
                                        </button>
                                        <button type="button" class="absolute row-span-5 col-start-5 right-5 top-1/2 z-0 rounded-full -translate-y-2/4 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600" aria-label="next slide" x-on:click="next()">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Previous Button -->
                                    <!-- slides -->
                                    <!-- Change min-h-[50svh] to your preferred height size -->
                                    <!-- Pause/Play Button -->
                                    <button type="button" class="absolute hidden bottom-5 right-5 z-20 rounded-full text-slate-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
                                        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                                            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
                                        </svg>
                                        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                                            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
                                        </svg>
                                    </button>
                                    <!-- indicators -->
                                    <div class="absolute  rounded-xl bottom-3 md:bottom-5 left-1/2 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
                                        <template x-for="(slide, index) in slides">
                                            <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
                                        </template>
                                    </div>
                                </div>
                                <address class="flex items-center mb-6 not-italic">
                                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                                        <div>
                                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 "></a>
                                            <p class="text-base text-gray-600 ">Autor: {{ $post->author ?? $post->user->name }}</p>
                                            <p class="text-base text-gray-600 ">{{ $post->iso_date }}</p>
                                        </div>
                                    </div>
                                </address>
                                <h1 class="mb-1 text-3xl text-center font-extrabold leading-tight text-gray-900 lg:mb-2 lg:text-4xl ">{{ ucfirst($post->title) }}</h1>
                                <h3 class="mb-4 text-md text-center font-bold leading-tight text-gray-900 lg:mb-6 lg:text-xl ">{{ $post->subtitle }}</h3>
                                @if ($post->category)
                                    <span class="bg-blue-600 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $post->category->label() }}</span>
                                @endif

                            </header>
                            <div class=" break-all ">
                                {!! $post->content !!}
                            </div>
                            <div class="flex justify-self-center sm:text-center">
                                <div class="pt-10 ">
                                <a type="button" href="{{ route('app.news') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none mt-20 dark:focus:ring-blue-800">Regresar</a>
                                </div>
                                {{-- <div class="pt-10">
                                <a type="button" href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none mt-20 dark:focus:ring-blue-800">Otras Noticias</a>
                                </div> --}}
                            </div>
                        </article>

                        <div class="mt-10 text-center">
                            <h1 class="text-2xl font-extrabold"> OTRAS NOTICIAS<h1>
                        </div>
                        <ul class="grid grid-cols-1 sm:grid-cols-5 gap-y-10 gap-x-6 items-start p-8">
                            @forelse ($navPosts as $post)
                                <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                    <div class="order-1 sm:ml-6 xl:ml-0">
                                        <h3 class="mb-1 text-slate-900 font-semibold ">
                                            <span class="mb-1 block text-sm leading-6 text-indigo-500">{{ $post->postedAt }}</span>{{ ucfirst($post->title) }}
                                        </h3>
                                        <div class="prose prose-slate prose-sm text-slate-600">
                                            <p>{{ $post->subtitle }}</p>
                                        </div>
                                        <a
                                            class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 mt-6"
                                            href="{{ route('app.news.show',$post->id) }}">Ver...
                                            <svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400"
                                                width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M0 0L3 3L0 6"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <img src="{{ $post->getFirstMediaUrl('post-image') }}" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                                </li>
                            @empty

                            @endforelse
                        </ul>
                    </x-slot>
                </div>
            </div>
        </x-full-card>
    </main>
</div>
