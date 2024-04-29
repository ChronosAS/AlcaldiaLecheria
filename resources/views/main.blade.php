@push('styles')
<style>
section#contact {
    background-color: gray;
    background-image: url("../assets/img/map-image.png") !important;
    background-repeat: no-repeat;
    background-position: center;
}

#header1 {
    background-image: url("../assets/img/lecheria-bg.jpg");
    height: 100%;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: center;
}
/**#header2 {
    background-color: white;
    background-image: url("../assets/img/alcalde.png");
    background-repeat: no-repeat;
    background-position: left;
    background-size: contain;

}**/
</style>
@endpush
<x-main-layout>
    <header id="header1" class="pt-40 pb-56 xl:bg-cover relative">
        @livewire('main-nav')
            <div class="flex">
                <div class=" text-white text-center sm:absolute  sm:bottom-0 sm:right-0 sm:m-6 px-6 md:px-12">
                    <h1 class="text-7xl font-bold  ">LECHERÍA</h1>
                    <h1 class="text-4xl font-bold ">¡UN ESTILO DE VIDA!</h1>
                </div>
            </div>
    </header>
    <header class=" dark:bg-white max-h-150" id="header2" >
        <div class="sm:grid place-items-center  sm:grid-rows-2 sm:grid-flow-col grid-cols-1"> 
            <div class="sm:col-span-2  text-center text-black pt-20">
                  <h1 class="text-4xl font-bold "> Nacer en Lechería es sinónimo de fe<br>mariana, de amar sus amaneceres y<br>atardeceres. Esta ciudad, me vio nacer<br>y me ha visto crecer trabajando por ella<br>¡Gracias vecino por la confianza<br>brindada, seguimos juntos!</h1>
            </div>
            <div class="sm:row-span-1 sm:object-center ">
                <img src="{{asset('assets/img/firma-alcalde-b.png')}}" class="h-[15rem] w-max ">
            </div>
            <div class="sm:row-span-3 sm:col-span-2 ">
                <img src="{{asset('assets/img/alcalde.png')}}" class="h-[400px] sm:min-h-[600px] px-12 ">
            </div>
        </div>
    </header>
    <section id="contact">
        <div class="text-center">
            <div class=" text-gray-500 sm:text-lg dark:text-gray-400 sm:justify-center">
                    <div class="text-center py-8 space-y-3">
                        <h1 class="section-heading text-uppercase text-[3rem] text-white ">Contactanos</h1>
                        <h2 class="section-subheading text-black text-xl">Nuestra directora de Atención al Ciudadano esta atenta a sus solicitudes.</h2>
                    </div>
                <div class="mx-auto">
                    <iframe class="  w-full h-[1500px] sm:h-[1300px] block" scrolling="no" src="https://docs.google.com/forms/d/e/1FAIpQLSf8D1hrbKl8u-q1yiWVlEKszUWWd8Wo7uY7fT6OLIxPIpE5sg/viewform?embedded=true" >Cargando…</iframe>
                </div>
            </div>
        </div>
    </section>
  {{--<x-carousel/>--}}
</x-main-layout>
