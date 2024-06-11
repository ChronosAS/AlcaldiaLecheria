<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl" >Noticias</h1>
    </x-main-header>
    <div class="my-8 mt-0 space-y-4 p-4 mx-auto max-w-7xl">
        <x-full-card>
            <x-slot name="title">
                <div class=" text-3xl">
                    
                </div>
            </x-slot>
            <x-slot name="content" class="">
                <div class=" grid grid-cols-1 sm:grid-cols-5 sm:grid-rows-2 sm:gap-4">
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="" alt="">
                        <div class="grid justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "></h5>
                            <p class="mb-3 font-normal text-gray-900"></p>
                        </div>
                    </a>
                    <a href="#" class=" items-center bg-white border border-gray-200 rounded-lg shadow md:grid md:max-w-xl hover:bg-gray-100 ">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="" alt="">
                        <div class="grid justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "></h5>
                            <p class="mb-3 font-normal text-gray-900"></p>
                        </div>
                    </a>
                
                    <x-twitter-feed class="hidden sm:inline-block row-span-2 col-start-5 row-start-1"/>
                <div>
            </x-slot>
        </x-full-card>
    </div>
</div>
