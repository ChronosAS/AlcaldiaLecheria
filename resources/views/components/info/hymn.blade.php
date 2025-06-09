<div class="my-10 space-y-6 px-4 mx-auto max-w-4xl">
    <x-full-card>
        <x-slot name="title">
            <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                Himno Municipal
            </div>
        </x-slot>
        <x-slot name="subTitle">
            <div class="text-xl font-medium text-blue-700 flex flex-col items-center gap-2">
                <h1 class="mb-2 flex items-center gap-2">
                    <i class="fas fa-music text-blue-400"></i>
                    Letra y música: <span class="font-bold text-blue-900">José Enrique (Chelique) Sarabia</span>
                </h1>
                <h2 class="mb-2 flex items-center gap-2">
                    <i class="fas fa-users text-blue-400"></i>
                    Arreglos corales: <span class="font-bold text-blue-900">Ali Agüero</span>
                </h2>
                <div class="flex items-center justify-center">
                    <audio controls class="rounded-lg shadow-md border-2 border-blue-200 bg-white transition-all duration-300 hover:shadow-xl focus:outline-none">
                        <source src="{{ asset('assets/audio/03 Himno Municipal completa.mp3') }}" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
                <hr class="border-2 border-blue-400 w-2/3 my-2 rounded-full">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="font-serif m-5 space-y-8 text-justify tracking-wide text-lg text-gray-800 leading-relaxed">
                <div>
                    <p class="mb-4">
                        El Himno del Municipio Urbaneja, denominado <span class="font-bold text-blue-900">“Himno de Lechería”</span>, letra y música de José Enrique (Chelique) Sarabia y arreglos corales de Ali Agüero, fue establecido mediante Resolución Nº 018/2003 del 05 de Septiembre de 2003 y su letra es la siguiente:
                    </p>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner text-center leading-loose space-y-6 text-lg text-gray-800">
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">I</span>
                            El clarín de los vientos<br>
                            nacido de dos mares<br>
                            anunció la llegada<br>
                            de un galeón español.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">II</span>
                            Buscaban el camino<br>
                            del mito del Dorado<br>
                            y el tropel aborigen<br>
                            en la lucha murió.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">Coro</span>
                            Morro de la Magdalena<br>
                            vigía del Mar Caribe<br>
                            guardián de La Lechería<br>
                            de Maguey, arena y sal
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">III</span>
                            Hacedores de patria<br>
                            de historia, de futuro<br>
                            sembraron esta tierra<br>
                            de paz y libertad.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">IV</span>
                            Ese rincón de Oriente<br>
                            sedal de pescadores<br>
                            y altar de compromiso<br>
                            hoy es nuestra ciudad.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">Coro</span>
                            Morro de la Magdalena<br>
                            vigía del Mar Caribe<br>
                            guardián de La Lechería<br>
                            de Maguey, arena y sal
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">V</span>
                            Los hijos de Urbaneja<br>
                            hoy somos pastores<br>
                            de un rebaño de sueños<br>
                            de esperanza y amor.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">VI</span>
                            Y por la gracia divina<br>
                            de la Virgen del Valle<br>
                            es Diego Bautista<br>
                            el blasón de honor.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl mb-2">Coro</span>
                            Morro de la Magdalena<br>
                            vigía del Mar Caribe<br>
                            guardián de La Lechería<br>
                            de Maguey, arena y sal
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-full-card>
</div>
