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
                    <div class="sm:grid sm:grid-cols-8 sm:grid-rows-2 sm:gap-6 sm:mx-10 mb-14 md:grid md:grid-cols-1 xl:grid-cols-8 xl:grid xl:grid-rows-2">
                        <!-- Carousel pushed to the left -->
                        <div class="md:col-span-1 xl:col-span-3 xl:row-span-2 xl:col-start-1 xl:row-start-1">
                            @livewire('news.news-carousel',['posts' => $this->carouselPosts])
                        </div>
                        @if($sidePosts)
                            <!-- Side cards: grid 4 columns x 2 rows, right of carousel (hidden on mobile) -->
                            <div class="hidden sm:grid col-span-5 row-span-2 xl:col-start-4 xl:row-start-1 grid-cols-4 grid-rows-2 gap-5">
                                @foreach ($sidePosts as $post)
                                    <div class="bg-white/95 rounded-2xl shadow-xl border-2 border-blue-200 transition-all hover:shadow-2xl hover:scale-105 flex flex-col w-56 min-h-[13rem] group">
                                        <a href="{{ route('app.news.show',$post->id) }}" class="flex flex-col h-full">
                                            <div class="relative w-full aspect-[4/3]">
                                                <img class="w-full h-full object-cover object-center transition-transform duration-300 group-hover:scale-105 rounded-t-2xl" src="{{ $post->image }}" alt="{{ $post->imageAlt }}">
                                            </div>
                                            <div class="flex flex-col flex-1 justify-center">
                                                <h5 class="px-3 mt-3 text-base font-bold text-blue-900 text-center w-full leading-tight group-hover:text-blue-700 transition-colors break-words whitespace-normal">
                                                    {{ ucfirst($post->title) }}
                                                </h5>
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
