@push('styles')
    <style>
        section#contact {
            background-size: cover;
             
            background-repeat: no-repeat;
            background-position: center;
        }

        /* #header1 {
            background-image: url("../assets/img/lecheria-bg.jpg");
            height: 100%;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center;
    } */
    </style>
@endpush
<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg" >
        <div class="sm:flex  sm:flex-row sm:items-center sm:gap-x-[65rem] lg:gap-x-[35rem] md:gap-x-1 xl:gap-x-[26rem] 2xl:gap-x-[65rem] ">
            <div class="    bg-gray-600/50    object-scale-down justify-items-start mb-6 sm:mb-0 ">
                {{-- <x-weather-widget/> --}}
            </div>
            
            <div class=" sm:mt-20 text-center">
                <h1 class="sm:text-7xl text-6xl">LECHERÍA</h1>
                <h1 class="sm:text-4xl text-3xl">¡UN ESTILO DE VIDA!</h1>
            </div>
           
        </div>
    </x-main-header>
    <header   class=" bg-white max-h-150" id="header2" >
        <div class="place-items-center sm:grid sm:grid-cols-5 sm:grid-rows-5 gap-4">
            <div class="sm:col-span-2 sm:row-span-5 sm:h-auto sm:w-auto h-0 w-0">
                <img src="{{asset('assets/img/alcalde.webp')}}" class="sm:h-[40rem]" alt="Alcalde Manuel Ferreira">
            </div>
            <div class="sm:col-span-3 sm:row-span-3 col-start-3 sm:object-center text-center text-black pt-20 font-sans">
                    <h1 class="sm:text-4xl text-xl font-bold "> Nacer en Lechería es sinónimo de fe<br>mariana, de amar sus amaneceres y<br>atardeceres. Esta ciudad, me vio nacer<br>y me ha visto crecer trabajando por ella<br>¡Gracias vecino por la confianza<br>brindada, seguimos juntos!</h1>
            </div>
            <div class="sm:col-span-3 sm:row-span-2 col-start-3 row-start-4 flex items-center justify-center">
                <img src="{{asset('assets/img/firma-alcalde-b.png')}}" class="h-[15rem] w-max " alt="Firma del Alcalde">
            </div>
        </div>
    </header>
    @livewire('news.main')
     <section id="contact">
        <div class="text-center ">
            <div class=" sm:text-lg text-gray-400 ">
                <div class="text-center py-8 space-y-3 sm:justify-center">
                    <h1 class="section-heading text-uppercase text-[3rem] text-white ">Contactanos</h1>
                    <h2 class="section-subheading text-white text-xl">Nuestra directora de Atención al Ciudadano esta atenta a sus solicitudes.</h2>
                </div>
                <div class="container  mx-auto 2xl:px-[30rem] xl:px-[22rem] md:px-[8rem] sm:px-[2rem] pb-10">
                    {{-- <iframe id="contact" class="  w-full h-[1500px] sm:h-[1300px] block" scrolling="no" src="https://docs.google.com/forms/d/e/1FAIpQLSf8D1hrbKl8u-q1yiWVlEKszUWWd8Wo7uY7fT6OLIxPIpE5sg/viewform?embedded=true" >Cargando…</iframe> --}}
                    <livewire:contact-form/> 
                </div>
            </div>
        </div>
    </section>
    @livewire('main-page-modal')
    <div x-data="{ showWeather: false }">
        <!-- Toggle Button -->
        <button 
            @click="showWeather = !showWeather"
            class="fixed xl:top-20 2xl:top-16 bottom-6 right-6 sm:top-6 sm:left-6 sm:bottom-auto sm:right-auto z-50 bg-blue-700 text-white rounded-full shadow-lg p-3 hover:bg-blue-800 transition"
            aria-label="Mostrar clima"
            x-show="!showWeather"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-75"
        >
            <i class="fas fa-cloud-sun text-xl"></i>
        </button>

        <!-- Weather Widget -->
        <div 
            x-show="showWeather"
            @click.away="showWeather = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-8 scale-90"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-8 scale-90"
            class="fixed xl:top-32 2xl:top-24 bottom-6 right-6 sm:top-6 sm:left-6 sm:bottom-auto sm:right-auto z-50 bg-transparent rounded-2xl shadow-2xl p-4 text-black w-80 max-w-full"
        >
            <button 
                @click="showWeather = false"
                class="absolute top-2 right-2 text-black hover:text-blue-700 z-10"
                aria-label="Cerrar clima"
            >
                <i class="fas fa-times"></i>
            </button>
            <x-weather-widget/>
        </div>
    </div>
</div>

