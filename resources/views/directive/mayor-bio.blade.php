<x-main-layout class="dark:bg-slate-300">
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
            <h1 class="text-7xl">Alcalde</h1>
    </x-main-header>
    <div class="my-8 mt-0 space-y-4 px-4 mx-auto max-w-7xl">
        <x-full-card>
                <x-slot name="title">
                <div class=" text-3xl">
                    
                    </div>
                </x-slot>
                <x-slot name="subTitle">
                <div class="text-xl">
                    <h1></h1>
                    <div class="flex items-center justify-center">
                    <img src="{{asset('assets/img/bandera.jpg')}}" class="h-[7rem] m-4 transition duration-300 ease-in-out hover:shadow-lg ">
                    </div>
                    <hr class="border border-orange-400 px-10">
                </div>
                </x-slot>
                <x-slot name="content">
                    <div class="font-serif m-5 text-justify tracking-wide space-y-2">
                    <p>
                    </p>
                    </div>
                </x-slot>
        
        </x-full-card>
    </div>
</x-main-layout>