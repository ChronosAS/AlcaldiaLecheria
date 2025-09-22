<div>
    @if(count($carouselPosts) > 0)
        <section id="news">
            <div class="text-center ">
                <div class="sm:justify-center">
                    <div class="text-center py-10 space-y-4">
                        <h1 class="section-heading text-uppercase text-[3.5rem] font-extrabold tracking-wide text-white drop-shadow-lg">
                            Noticias
                        </h1>
                    </div>
                    <div class="sm:grid sm:grid-cols-8 sm:grid-rows-2 sm:gap-1 sm:mx-10 mb-14 md:grid md:grid-cols-1 xl:grid-cols-8 xl:grid xl:grid-rows-2">
                        <!-- Carousel pushed to the left -->
                        <div class="md:col-span-1 xl:col-span-3 xl:row-span-2 xl:col-start-1 xl:row-start-1  h-full">
                            @livewire('news.news-carousel',['posts' => $this->carouselPosts])
                        </div>
                        @if($sidePosts)
                            <!-- Side cards: grid 4 columns x 2 rows, right of carousel (hidden on mobile) -->
                            <div class="hidden sm:grid col-span-5 row-span-2 xl:col-start-4 xl:row-start-1 grid-cols-4 grid-rows-2 gap-1 h-full ">
                                @foreach ($sidePosts as $post)
                                    <div 
                                        class="shadow-xl transition-all hover:shadow-2xl flex flex-col h-full"
                                        x-data="{ hover: false }"
                                    >
                                        <a href="{{ route('app.news.show',$post->id) }}" class="flex flex-col h-full">
                                            <div 
                                                class="relative w-full aspect-[5/2] h-full"
                                                @mouseenter="hover = true"
                                                @mouseleave="hover = false"
                                            >
                                                <img class="w-full h-full object-cover object-center transition-transform duration-300" src="{{ $post->image }}" alt="{{ $post->imageAlt }}">
                                                <!-- Text shown only on hover -->
                                                <div 
                                                    x-show="hover"
                                                    x-transition
                                                    class="absolute inset-0 flex items-center justify-center bg-blue-700/70 text-white text-sm font-bold text-wrap"
                                                >
                                                    {{ ucfirst($post->title) }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
