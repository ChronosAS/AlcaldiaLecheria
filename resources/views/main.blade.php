<x-main-layout>
<header class="bg-white dark:bg-gray-800">
@livewire('main-nav')
    <div
        class="relative h-[350px] overflow-hidden bg-[url('https://tecdn.b-cdn.net/img/new/slides/041.webp')] bg-cover bg-[50%] bg-no-repeat">
        <div
        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
        <div class="flex h-full items-center justify-center">
            <div class="px-6 text-center text-white md:px-12">
            <h1 class="mb-6 text-5xl font-bold ">Heading</h1>
            </div>
        </div>
        </div>
    </div>
</header>
  <section class="bg-white dark:bg-gray-500">
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
