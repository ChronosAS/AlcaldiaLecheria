<div class="my-10 space-y-6 px-4 mx-auto max-w-7xl">
    <x-full-card >
        <x-slot name="title">
            <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                Bandera Municipal
            </div>
        </x-slot>
        <x-slot name="subTitle">
            <div class="text-xl font-medium text-blue-700 flex flex-col items-center gap-2">
                <h1 class=" flex items-center gap-2">
                    <i class="fas fa-paint-brush text-blue-400"></i>
                    Diseñado por: <span class="font-bold text-blue-900">Francia Zaurin</span>
                </h1>
                <hr class="border-2 border-blue-400 w-2/3 my-2 rounded-full">
            </div>
        </x-slot>
        <x-slot name="content">
            {{-- Bandera  --}}
            <div class="font-serif m-5 space-y-8 text-justify    grid grid-cols-3 grid-rows-2 gap-4">
                <div class="flex items-center justify-center">
                    <img src="{{asset('assets/img/bandera.jpg')}}" 
                         class="h-[8rem] m-4 rounded-xl shadow-lg border-4 border-blue-200 transition-transform duration-300 hover:scale-105 hover:shadow-2xl bg-white" 
                         alt="Bandera Municipal">
                </div>
                <div class="col-span-2">
                    <div class=" rounded-xl p-6 shadow-inner space-y-4 relative">
                        <h2 class="font-bold text-2xl text-blue-800  flex items-center gap-2">
                            <i class="fas fa-flag text-blue-400"></i>
                            Historia y Significado
                        </h2>
                        <p>
                            La Bandera del Municipio Urbaneja fue escogida mediante concurso en
                            cabildo abierto el 15 de Marzo de 2001. La ganadora fue Francia Zaurin
                            presentando un estandarte compuesto por tres franjas horizontales de
                            diferente tamaño. La superior e inferior son de color azul oscuro y
                            representan el cielo y el mar respectivamente; la franja central es de
                            color blanco para representar el desarrollo, la juventud, el progreso y la
                            pureza. En esta, destaca la composición de un sol amarillo en
                            semicírculo atravesado por la figura marrón del Cerro Morro, que
                            representan el potencial turístico y la esencia geográfica misma del
                            municipio
                        </p>
                        <div class="flex items-center justify-center">
                            <span class="inline-block w-16 h-1 bg-blue-300 rounded-full animate-pulse"></span>
                        </div>
                    </div>
                </div>
                <div class="col-start-2 row-start-2">
                    <div class="  p-6  space-y-4 relative">
                        <h2 class="font-bold text-2xl text-blue-800  flex items-center gap-2">
                            <i class="fas fa-award text-blue-400"></i>
                            Atributos
                        </h2>
                        <p>
                            Consta de un paño de proporción
                            vexilológica aproximada 2:3; esto es,
                            cuadrado y medio de largo dividido en tres
                            franjas horizontales de distinto tamaño:
                            azul oscuro la superior e inferior
                            equivalentes a una cuarta parte (¼) de la
                            anchura del paño cada una y blanca la
                            central, ocupando el espacio restante y
                            en cuyo centro aparece una colina marrón
                            simétrica y estilizada de la que surge un
                            semicírculo amarillo dorado
                        </p>
                    </div>
                </div>
                <div class="col-start-1 row-start-2">
                    <h2 class="font-bold text-2xl text-blue-800  flex items-center gap-2">
                        <i class="fas fa-award text-blue-400"></i>
                        Semiología
                    </h2>
                    <div class=" p-6  space-y-4 relative">
                        <p>
                            Las franjas azules aluden
                            respectivamente al cielo y el mar,
                            mientras que la blanca simboliza el
                            desarrollo, la juventud, el progreso y la
                            pureza. La colina representa al “Cerro El
                            Morro” y el semicírculo recuerda el sol:
                            figuras que en conjunto aluden al
                            potencial turístico, esencia existencial y
                            geográfica del Municipio.

                        </p>
                    </div>
                </div>
                <div class="row-start-2">

                </div>
            </div>
            {{-- Escudo --}}
            <div class="font-serif  text-justify  grid grid-cols-3 grid-rows-3 ">
                <div class="col-span-2 row-span-2">
                    <div class="   relative">
                        <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                            Escudo Municipal
                        </div>
                        <h2 class="font-bold text-2xl text-blue-800  flex items-center gap-2">
                            <i class="fas fa-flag text-blue-400"></i>
                            Atributos
                        </h2>
                        <div class="  p-8  space-y-4 relative">
                            <p>
                                Campo de contorno germánico medio partido y cortado (dividido en tres
                                cuarteles: dos superiores y uno inferior).
                            </p>
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                El Primer Cuartel de campo Celeste (variación del Azur o azul heráldico)
                                presenta la figura de Nuestra Señora del Valle del Espíritu Santo sobre un
                                peñero de madera puesto de frente.
                                </li>
                                <li>
                                El Segundo Cuartel de campo en Plata (blanco) muestra una cruz de madera
                                cargada con una guirnalda de flores en Oro (amarillo), Plata (blanco), Gules
                                (rojo), Azur (azul) y Sìnople (verde), acompañada por dos peces en Gules (rojo)
                                puestos en palo (verticalmente).
                                </li>
                                <li>
                                El Tercer Cuartel esmaltado en Azur (azul) presenta un paisaje donde aparece
                                en primer plano el mar del cual surge una colina con un sol naciente al fondo,
                                todo en sus colores.
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="row-span-2 col-start-3 relative">
                    <img src="{{asset('assets/img/Escudo.png')}}" 
                         class="overflow-hidden p-6 m-6 " 
                         alt="Escudo Municipal">
                </div>
                <div class="col-span-3 row-start-3">
                    <div class="  p-8 space-y-4 relative">
                        <p>
                            Como ornamentos exteriores, el blasón muestra un ancla en Plata acolada (puesta detrás) al Escudo y un anillo en Plata
                            (blanco) con borduras (bordes) en Azur (azul) que contiene las inscripciones: “MUNICIPIO TURÍSTICO EL MORRO
                            LICENCIADO DIEGO BAUTISTA URBANEJA” en la parte superior y “1953 – LECHERÍA – 1992” en la parte inferior, realizadas
                            en letras góticas capitales de Oro y separados entre sí mediante viñetas circulares del mismo metal
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="font-bold text-2xl text-blue-800  flex items-center gap-2">
                <i class="fas fa-award text-blue-400"></i>
                Semiología
            </h2>
            <div class="grid grid-cols-2 grid-rows-1 gap-4 font-serif">
                <div class="space-y-4">
                    <p>
                        El Primer Cuartel simboliza los ideales de la buena fe, la
                        esperanza y la protección que por siempre ha brindado a
                        los ciudadanos de Lechería su patrona sentimental, La
                        Virgen del Valle (la popular Vallita) quien en sus fiestas (8
                        de Septiembre) es seguida por sus feligreses en su ya
                        tradicional paseo en bote por el mar: la más colorida
                        procesión marina del oriente venezolano y que tanto
                        distingue a Lechería del resto de la región.
                    </p>
                    <br>
                    <p>
                        El Segundo Cuartel, en síntesis, es un tributo a la
                        naturaleza y de exaltación a los valores de coraje,
                        sacrificio y valor que caracterizan a los habitantes del
                        Municipio Urbaneja. El blanco representa la otrora salina
                        convertida en ciudad; la cruz florida es el símbolo unitario
                        de agradecimiento a la bonanza y las peticiones de
                        seguridad otorgados por la madre tierra y el mar a los
                        pioneros pescadores de Lechería. Por su parte los peces
                        aluden a la pesca artesanal como fuente originaria de
                        sustento para los moradores de la localidad.

                    </p>
                </div>
                <div class="space-y-4">
                    <p >
                        El Tercer Cuartel, representa los valores de Justicia,
                        Lealtad y Perseverancia cuyas virtudes deben seguir los
                        pobladores de Lechería. Todo ello se representa en un
                        paisaje marino presidido por El Morro de Lechería: íconos
                        geográficos por excelencia de la zona, identificándola con
                        su esencia económica, como lo es la actividad turística
                        sustentable. Por último, El sol y sus rayos recuerdan la
                        calidez del pueblo oriental e indican el sentido de
                        integración del Municipio Urbaneja al Estado Anzoátegui,
                        debido a que el Astro Rey aparece representado tal y
                        como timbra el Escudo Estatal.
                    </p>
                    <br>
                    <p>
                        El Ancla simboliza los deseos futuros de afirmación, paz y
                        progreso para el Municipio en tanto que el Anillo, con los
                        colores emblemáticos de la bandera municipal (blanco y
                        azul marino) enmarca la denominación del Municipio, el
                        nombre de su capital y las fechas de su elevación a la
                        categoría de Parroquia del Distrito Bolívar (1953) y a
                        Municipio (1992).
                    </p>
                </div> 
            </div>
            {{-- Himno --}}
            <div>
                <div class="font-serif m-5  text-justify">
                    <div>
                        
                        <div class=" text-blue-900 flex flex-col items-center justify-center">
                            <p class="text-2xl font-extrabold">
                                Himno Municipal
                            </p>
                            <p class="text-md">
                                Letra y música: José Enrique “Chelique” Sarabia
                            </p>
                            <p class="text-md">
                                Arreglos corales: Ali Agüero
                            </p>
                        </div>
                        <div class="flex items-center justify-center ">
                            <audio controls class="rounded-lg shadow-md border-2 border-blue-200 bg-white transition-all duration-300 hover:shadow-xl focus:outline-none">
                                <source src="{{ asset('assets/audio/03 Himno Municipal completa.mp3') }}" type="audio/mpeg">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                        </div>
                        <p class="">
                            El Himno del Municipio Urbaneja, denominado <span class="font-bold text-blue-900">“Himno de Lechería”</span>, letra y música de José Enrique (Chelique) Sarabia y arreglos corales de Ali Agüero, fue establecido mediante Resolución Nº 018/2003 del 05 de Septiembre de 2003 y su letra es la siguiente:
                        </p>
                        
                    </div>
                </div>
                <div class="grid grid-cols-6 grid-rows-1  font-serif ">
                    <div class="col-start-3">
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">I</span>
                            El clarín de los vientos<br>
                            nacido de dos mares<br>
                            anunció la llegada<br>
                            de un galeón español.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">II</span>
                            Buscaban el camino<br>
                            del mito del Dorado<br>
                            y el tropel aborigen<br>
                            en la lucha murió.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">Coro</span>
                            Morro de la Magdalena<br>
                            vigía del Mar Caribe<br>
                            guardián de La Lechería<br>
                            de Maguey, arena y sal
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">III</span>
                            Hacedores de patria<br>
                            de historia, de futuro<br>
                            sembraron esta tierra<br>
                            de paz y libertad.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">IV</span>
                            Ese rincón de Oriente<br>
                            sedal de pescadores<br>
                            y altar de compromiso<br>
                            hoy es nuestra ciudad.
                        </div>
                    </div>
                    <div class="col-start-4">
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">Coro</span>
                            Morro de la Magdalena<br>
                            vigía del Mar Caribe<br>
                            guardián de La Lechería<br>
                            de Maguey, arena y sal
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">V</span>
                            Los hijos de Urbaneja<br>
                            hoy somos pastores<br>
                            de un rebaño de sueños<br>
                            de esperanza y amor.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">VI</span>
                            Y por la gracia divina<br>
                            de la Virgen del Valle<br>
                            es Diego Bautista<br>
                            el blasón de honor.
                        </div>
                        <div>
                            <span class="block text-blue-700 font-bold text-xl ">Coro</span>
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
