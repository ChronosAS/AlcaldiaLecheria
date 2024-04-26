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
    <header id="header1" class="pt-40 pb-56 xl:bg-cover">
        @livewire('main-nav')
        <div
            class="relative h-[350px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
            <div
            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="px-6  text-center text-white md:px-12 sm:absolute sm:bottom-0 sm:right-0 sm:m-6">
                    <h1 class="text-5xl font-bold ">LECHERÍA</h1>
                    <h1 class="text-2xl font-bold ">¡UN ESTILO DE VIDA!</h1>
                </div>
            </div>
            </div>
        </div>
    </header>
    <header class=" dark:bg-slate-400 max-h-150" id="header2" >
        <div class="sm:grid sm:grid-rows-2 sm:grid-flow-col grid-cols-1"> 
            <div class="sm:col-span-2 alig-middle text-center text-black pt-20">
                  <h1 class="text-2xl font-bold "> Nacer en Lechería es sinónimo de fe<br>mariana, de amar sus amaneceres y<br>atardeceres. Esta ciudad, me vio nacer<br>y me ha visto crecer trabajando por ella<br>¡Gracias vecino por la confianza<br>brindada, seguimos juntos!</h1>
            </div>
            <div class="sm:row-span-1 sm:object-center dark:text-black">
                <img src="{{asset('assets/img/firma-alcalde.png')}}" class="h-[15rem] w-max relative">
            </div>
            <div class="sm:row-span-3 sm:col-span-2">
                <img src="{{asset('assets/img/alcalde.png')}}" class="h-[400px] sm:min-h-[600px] px-12">
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
