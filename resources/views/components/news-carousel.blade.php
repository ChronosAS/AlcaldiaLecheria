<div
    x-data="{
        images: {{ Js::from($images) }},
        selected: 0,
        nextImage(){
            this.selected++
            if(this.selected == this.images.length) {
                this.selected=0
            }
        },
        previousImage(){
            this.selected--
            if(this.selected < 0){
                this.selected = this.images.length - 1
            }
        }
    }"
    class="flex flex-col h-full min-h-72 md:min-h-96 rounded-xl bg-black shadow-sm">
    <!-- Crousel -->
    <div class="flex flex-col flex-1 justify-center items-center relative">
        <div class="h-full w-full bg-white rounded-t-xl border border-gray-200">
            <div class="flex justify-center h-full bg-gray-100 rounded-t-xl">
                <div class="bg-cover bg-center bg-no-repeat h-full w-full p-0 min-h-52 md:min-h-80 rounded-t-xl" x-bind:style="'background-image: url('${images[selected]}')'"></div>
            </div>
        </div>

        <!-- Change Buttons --->
        <button x-on:click="previousImage()" type="button" class="absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-600 hover:bg-gray-900/[.1] rounded-tl-xl">
            <span class="text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button x-on:click="nextImage()" type="button" class="absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-600 hover:bg-gray-900/[.1] rounded-tr-xl">
            <span class="sr-only">Next</span>
            <span class="text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        </button>

        <div class="flex justify-center absolute -bottom-5 start-0 end-0 space-x-2">
            <span class="w-3 h-3 border border-blue-600 rounded-full cursor-pointer"></span>
            <span class="w-3 h-3 border border-blue-600 rounded-full cursor-pointer"></span>
            <span class="w-3 h-3 border border-blue-600 rounded-full cursor-pointer"></span>
        </div>
    </div>
    <!-- End Carousel --->
    <div class="p-4 md:p-6 border-x border-b border-gay-200 rounded-b-xl">
        <span class="block mb-1 text-xs font-semibold text-white">
            Title
        </span>
        <h3 class="text-lg font-semibold text-white">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, repudiandae?
        </h3>
    </div>
</div>
