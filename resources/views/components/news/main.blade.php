<section id="news">
    <div class="text-center">
        <div class=" sm:justify-center">
            <div class="text-center py-8 space-y-3">
                <h1 class="section-heading text-uppercase text-[3rem] text-white ">Noticias</h1>
            </div>
            <div class=" sm:grid sm:grid-cols-7 sm:grid-rows-4 sm:gap-4 sm:mx-10 mb-10 ">
                <div class="col-span-3 row-span-4 {{ ($sidePosts) ? 'col-start-2' : 'col-start-3' }} ">
                    @livewire('news.news-carousel',['posts' => $this->carouselPosts])
                </div>
               {{-- @foreach ($sidePosts as $key => $post)
                    <div class=" flex-row row-span-2 h-auto col-start-5 hidden max-w-60 min-h-64 sm:inline-block bg-white rounded-lg shadow-md
                        @switch($key)
                            @case(5)
                                row-span-2 col-start-6
                                @break
                            @case(6)
                                row-span-2 col-start-5 row-start-3
                                @break
                            @case(7)
                                row-span-2 col-start-6 row-start-3
                                @break
                            @default

                        @endswitch">
                        <div class="relative max-w-lg">
                            <a href="{{ route('app.news.show',$post->id) }}" class="relative">
                                <img class="w-full object-cover" src="{{ $post->image }}" alt="{{ $post->imageAlt }}">
                                <div class="absolute flex truncate bg-slate-300">
                                    <h5 class="text-xs font-bold tracking-tight text-black  truncate flex flex-col text-wrap  ">{{ $post->title }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach--}}
                @if($sidePosts)
                    <div class="container col-span-2 row-span-4 col-start-5 flex-wrap">
                        @foreach ( $sidePosts as $post)
                            <div class="hidden max-w-60 p-2 px-2 sm:inline-block">
                                <a href="{{ route('app.news.show',$post->id) }}">
                                    <div class="relative max-w-lg ">
                                        <img class=" h-60  w-72 object-cover" src="{{ $post->image }}" alt="{{ $post->imageAlt }}">
                                        <div class="static  truncate flex flex-col text-wrap  max-h-16  bg-slate-200">
                                            <h5 class=" text-xs font-bold tracking-tight text-black ">{{ $post->title }}</h5>
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
