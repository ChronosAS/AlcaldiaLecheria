<section id="news">
    <div class="text-center">
        <div class=" sm:justify-center">
            <div class="text-center py-8 space-y-3">
                <h1 class="section-heading text-uppercase text-[3rem] text-white ">Noticias</h1>
            </div>
            <div class=" sm:grid sm:grid-cols-7 sm:grid-rows-4 sm:gap-1 sm:mx-10 mb-10 ">
                <div class="col-span-3 row-span-4 col-start-2">
                    <div class="w-auto h-auto text-md sm:text-md ">
                         @livewire('news.news-carousel',['posts' => $this->carouselPosts])
                    </div>
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
                <div class="container col-span-2 row-span-4 col-start-5 flex-wrap">
                    <div class="  h-auto hidden max-w-60 min-h-64 sm:inline-block">
                        <a href="#">
                            <div class="relative max-w-lg ">
                                <img class=" w-full object-cover" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=4&f=jpg&x=277&y=454&u=t" alt="Random image">
                            
                                <div class="absolute flex truncate bg-slate-200">
                                    <h5 class=" text-xs font-bold tracking-tight text-black  truncate flex flex-col text-wrap">Equipo de la Alcaldía de Lechería participó en el jurado de “Galería de Personajes” del colegio María Auxiliadora</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="   h-auto hidden max-w-60 min-h-64 sm:inline-block">
                        <a href="#" class="rounded-lg">
                            <div class="relative max-w-lg ">
                                <img class=" w-full object-cover" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=4&f=jpg&x=277&y=454&u=t" alt="Random image">
                                
                                <div class="absolute flex truncate bg-slate-200">
                                    <h5 class=" text-xs font-bold tracking-tight text-black  truncate flex flex-col text-wrap">Equipo de la Alcaldía de Lechería participó en el jurado de “Galería de Personajes” del colegio María Auxiliadora</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="   h-auto hidden max-w-60 min-h-64 sm:inline-block">
                        <a href="#" class="rounded-lg">
                            <div class="relative max-w-lg ">
                                <img class=" w-full object-cover" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=4&f=jpg&x=277&y=454&u=t" alt="Random image">
                                
                                <div class="absolute flex truncate bg-slate-200">
                                    <h5 class=" text-xs font-bold tracking-tight text-black  truncate flex flex-col text-wrap">Equipo de la Alcaldía de Lechería participó en el jurado de “Galería de Personajes” del colegio María Auxiliadora</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="  h-auto hidden max-w-60 min-h-64 sm:inline-block">
                        <a href="#" class="rounded-lg">
                            <div class="relative max-w-lg ">
                                <img class=" w-full object-cover" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=4&f=jpg&x=277&y=454&u=t" alt="Random image">
                                
                               <div class="absolute flex truncate bg-slate-200">
                                    <h5 class=" text-xs font-bold tracking-tight text-black  truncate flex flex-col text-wrap">Equipo de la Alcaldía de Lechería participó en el jurado de “Galería de Personajes” del colegio María Auxiliadora</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
