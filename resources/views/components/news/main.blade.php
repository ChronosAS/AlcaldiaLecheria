<section id="news">
    <div class="text-center">
        <div class=" sm:justify-center">
            <div class="text-center py-8 space-y-3">
                <h1 class="section-heading text-uppercase text-[3rem] text-white ">Noticias</h1>
            </div>
            <div class="flex-c sm:grid sm:grid-cols-10 sm:grid-rows-6 sm:gap-4 sm:mx-10">
                <div class="col-span-8 row-span-4">
                    <div id="newsCarousel" posts="{{ json_encode($posts) }}"></div>
                </div>
                <div class="flex-wrap sm:flex-wrap sm:col-span-2 sm:row-span-4 sm:col-start-7 hidden sm:inline-block">
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl min-h-full lg:size-[340px] hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto min-h-full md:w-full md:rounded-b-none" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=6&f=jpg&x=277&y=454&u=t" alt="">
                        <div class="grid justify-around p-4 leading-normal ">
                            <h5 class="mb-2 text-2xl font-bold  mt-2 text-gray-900 ">Titulo</h5>
                            <p class="mb-3 mt-2 font-normal text-gray-900">subtitulo</p>
                        </div>
                    </a>
                </div>
                <div class="flex-wrap sm:flex-wrap sm:col-span-2 sm:row-span-2 sm:col-start-7 sm:row-start-5 lg:gap-2 hidden sm:inline-block">
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl lg:size-[340px] hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-full md:rounded-b-none" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=6&f=jpg&x=277&y=454&u=t" alt="">
                        <div class="grid justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Titulo</h5>
                            <p class="mb-3 font-normal text-gray-900">subtitulo</p>
                        </div>
                    </a>
                </div>
                <div class="flex-wrap sm:flex-wrap sm:col-span-2 sm:row-span-2 sm:col-start-5 sm:row-start-5 lg:gap-2 hidden sm:inline-block">
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl lg:size-[340px] hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-full md:rounded-b-none" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=6&f=jpg&x=277&y=454&u=t" alt="">
                        <div class="grid justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Titulo</h5>
                            <p class="mb-3 font-normal text-gray-900">subtitulo</p>
                        </div>
                    </a>
                </div>
                <div class="flex-wrap sm:flex-wrap sm:col-span-2 sm:row-span-2 sm:col-start-3 sm:row-start-5 lg:gap-2 hidden sm:inline-block">
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl lg:size-[340px] hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-full md:rounded-b-none" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1npmiU.img?w=300&h=225&q=90&m=6&f=jpg&x=277&y=454&u=t" alt="">
                        <div class="grid justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Titulo</h5>
                            <p class="mb-3 font-normal text-gray-900">subtitulo</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
