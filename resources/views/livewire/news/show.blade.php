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
                                <div 
                                    x-data="{
                                        autoplayIntervalTime: 6000,
                                        slides: {{ collect($images) }},
                                        currentSlideIndex: 1,
                                        touchStartX: null,
                                        touchEndX: null,
                                        isPaused: false,
                                        autoplayInterval: null,
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
                                                if (this.touchStartX - this.touchEndX > 40) this.next();
                                                if (this.touchStartX - this.touchEndX < -40) this.previous();
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
                                    }"
                                    x-init="autoplay"
                                    class="relative w-full rounded-2xl overflow-hidden shadow-lg bg-gradient-to-br from-blue-50 via-white to-blue-100"
                                >
                                    <!-- Slides -->
                                    <div class="relative min-h-[320px] md:min-h-[420px] w-full flex items-center justify-center"
                                        x-on:touchstart="handleTouchStart($event)"
                                        x-on:touchmove="handleTouchMove($event)"
                                        x-on:touchend="handleTouchEnd()"
                                    >
                                        <template x-for="(slide, index) in slides" :key="index">
                                            <div x-cloak x-show="currentSlideIndex === index + 1" class="absolute inset-0 flex items-center justify-center transition-all duration-700"
                                                x-transition:enter="opacity-0 scale-95"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:leave="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-95"
                                            >
                                                <img 
                                                    class="object-cover w-full h-full rounded-2xl shadow-md border border-blue-100"
                                                    :src="slide.url"
                                                    :alt="slide.alt"
                                                />
                                            </div>
                                        </template>
                                        <!-- Prev Button -->
                                        <button type="button"
                                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition focus:outline-none focus:ring-2 focus:ring-blue-400"
                                            aria-label="Anterior"
                                            x-on:click="previous()"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                        </button>
                                        <!-- Next Button -->
                                        <button type="button"
                                            class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition focus:outline-none focus:ring-2 focus:ring-blue-400"
                                            aria-label="Siguiente"
                                            x-on:click="next()"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </button>
                                        <!-- Pause/Play Button -->
                                        <button type="button"
                                            class="absolute bottom-4 right-4 bg-white/80 hover:bg-blue-100 text-blue-700 rounded-full p-2 shadow transition focus:outline-none focus:ring-2 focus:ring-blue-400"
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
                                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                                            <template x-for="(slide, index) in slides" :key="index">
                                                <button
                                                    class="w-3 h-3 rounded-full transition-all duration-300"
                                                    :class="currentSlideIndex === index + 1 ? 'bg-blue-600 scale-125 shadow' : 'bg-blue-200 hover:bg-blue-400'"
                                                    x-on:click="currentSlideIndex = index + 1"
                                                    :aria-label="'Ir a la diapositiva ' + (index + 1)"
                                                ></button>
                                            </template>
                                        </div>
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
                                <h1 class="mb-1 text-3xl text-center font-extrabold leading-tight text-gray-900 lg:mb-2 lg:text-4xl break-words">{{ $post->title }}</h1>
                                <h3 class="mb-4 text-md text-center font-bold leading-tight text-gray-900 lg:mb-6 lg:text-xl ">{{ $post->subtitle }}</h3>
                                @if ($post->category)
                                    <span class="bg-blue-600 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $post->category->label() }}</span>
                                @endif

                            </header>
                            <div class=" ">
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
                                        <h3 class="mb-1 text-slate-900 font-semibold break-all">
                                            <span class="mb-1 block text-sm leading-6  text-indigo-500">{{ $post->postedAt }}</span>{{ $post->title }}
                                        </h3>
                                        <div class="prose prose-slate prose-sm text-slate-600 break-all">
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
