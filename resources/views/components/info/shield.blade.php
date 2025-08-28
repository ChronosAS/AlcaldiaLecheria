<div class="my-10 space-y-6 px-4 mx-auto max-w-4xl">
    <x-full-card>
        <x-slot name="title">
            <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                Escudo Municipal
            </div>
        </x-slot>
        <x-slot name="subTitle">
            <div class="text-xl font-medium text-blue-700 flex flex-col items-center gap-2">
                <h1 class="mb-2 flex items-center gap-2">
                    <i class="fas fa-shield-alt text-blue-400"></i>
                    Creado por: <span class="font-bold text-blue-900">Raúl Jesús Orta Pardo y Maximilian Köpp Marcano</span>
                </h1>
                <div class="flex items-center justify-center">
                    <img src="{{asset('assets/img/Escudo.png')}}" 
                         class="h-[13rem] m-4 rounded-full shadow-lg border-4 border-blue-200 transition-transform duration-300 hover:scale-105 hover:shadow-2xl bg-white" 
                         alt="Escudo Municipal">
                </div>
                <hr class="border-2 border-blue-400 w-2/3 my-2 rounded-full">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="font-serif m-5 space-y-8 text-justify tracking-wide text-lg text-gray-800 leading-relaxed">
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-award text-blue-400"></i>
                        Atributos
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner space-y-4 relative" x-ref="copyAttributes" x-data="{ copied: false }">
                        <button
                            @click="
                                let text = $refs.copyAttributes.innerText;
                                if (navigator.clipboard) {
                                    navigator.clipboard.writeText(text).then(() => {
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    }, () => {
                                        fallbackCopy(text);
                                    });
                                } else {
                                    fallbackCopy(text);
                                }
                                function fallbackCopy(txt) {
                                    let textarea = document.createElement('textarea');
                                    textarea.value = txt;
                                    document.body.appendChild(textarea);
                                    textarea.select();
                                    try {
                                        document.execCommand('copy');
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    } catch (err) {
                                        // Puedes mostrar otro mensaje si lo deseas
                                    }
                                    document.body.removeChild(textarea);
                                }
                            "
                            class="absolute top-2 right-2 px-2 py-1 bg-blue-500 bg-opacity-60 text-white opacity-60 rounded shadow hover:bg-blue-800 hover:opacity-100 transition text-sm flex items-center gap-2"
                            aria-label="Copiar texto"
                        >
                            <i class="fas fa-copy"></i>
                        </button>
                        <div
                            x-show="copied"
                            x-transition
                            class="absolute top-10 right-2 bg-blue-700 text-white px-4 py-2 rounded shadow-lg text-sm font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle"></i>
                            Texto copiado
                        </div>
                        <p>
                            Campo de contorno germánico medio partido y cortado (dividido en tres cuarteles: dos superiores y uno inferior).
                            El Primer Cuartel de campo Celeste (variación del Azur o azul heráldico) presenta la figura de Nuestra Señora del Valle del Espíritu Santo sobre un peñero de madera puesto de frente.
                            El Segundo Cuartel de campo en Plata (blanco) muestra una cruz de madera cargada con una guirnalda de flores en Oro (amarillo), Plata (blanco), Gules (rojo), Azur (azul) y Sìnople (verde), acompañada por dos peces en Gules (rojo) puestos en palo (verticalmente).
                            El Tercer Cuartel esmaltado en Azur (azul) presenta un paisaje donde aparece en primer plano el mar del cual surge una colina con un sol naciente al fondo, todo en sus colores.
                        </p>
                        <p>
                            Como ornamentos exteriores, el blasón muestra un ancla en Plata acolada (puesta detrás) al Escudo y un anillo en Plata (blanco) con borduras (bordes) en Azur (azul) que contiene las inscripciones: 
                            <span class="font-semibold text-blue-900">“MUNICIPIO TURÍSTICO EL MORRO LICENCIADO DIEGO BAUTISTA URBANEJA”</span> en la parte superior y 
                            <span class="font-semibold text-blue-900">“1953 – LECHERÍA – 1992”</span> en la parte inferior, realizadas en letras góticas capitales de Oro y separados entre sí mediante viñetas circulares del mismo metal.
                        </p>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-lightbulb text-blue-400"></i>
                        Semiología
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner space-y-4 relative" x-data="{ copied: false }" x-ref="copyShield">
                        <button
                            @click="
                                let text = $refs.copyShield.innerText;
                                if (navigator.clipboard) {
                                    navigator.clipboard.writeText(text).then(() => {
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    }, () => {
                                        fallbackCopy(text);
                                    });
                                } else {
                                    fallbackCopy(text);
                                }
                                function fallbackCopy(txt) {
                                    let textarea = document.createElement('textarea');
                                    textarea.value = txt;
                                    document.body.appendChild(textarea);
                                    textarea.select();
                                    try {
                                        document.execCommand('copy');
                                        copied = true;
                                        setTimeout(() => copied = false, 2000);
                                    } catch (err) {
                                        // Puedes mostrar otro mensaje si lo deseas
                                    }
                                    document.body.removeChild(textarea);
                                }
                            "
                            class="absolute top-2 right-2 px-2 py-1 bg-blue-500 bg-opacity-60 text-white opacity-60 rounded shadow hover:bg-blue-800 hover:opacity-100 transition text-sm flex items-center gap-2"
                            aria-label="Copiar texto"
                        >
                            <i class="fas fa-copy"></i>
                        </button>
                        <div
                            x-show="copied"
                            x-transition
                            class="absolute top-10 right-2 bg-blue-700 text-white px-4 py-2 rounded shadow-lg text-sm font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle"></i>
                            Texto copiado
                        </div>
                        <p>
                            El Primer Cuartel simboliza los ideales de la buena fe, la esperanza y la protección que por siempre ha brindado a los ciudadanos de Lechería su patrona sentimental, La Virgen del Valle (la popular Vallita) quien en sus fiestas (8 de Septiembre) es seguida por sus feligreses en su ya tradicional paseo en bote por el mar: la más colorida procesión marina del oriente venezolano y que tanto distingue a Lechería del resto de la región.
                        </p>
                        <p>
                            El Segundo Cuartel, en síntesis, es un tributo a la naturaleza y de exaltación a los valores de coraje, sacrificio y valor que caracterizan a los habitantes del Municipio Urbaneja. El blanco representa la otrora salina convertida en ciudad; la cruz florida es el símbolo unitario de agradecimiento a la bonanza y las peticiones de seguridad otorgados por la madre tierra y el mar a los pioneros pescadores de Lechería. Por su parte los peces aluden a la pesca artesanal como fuente originaria de sustento para los moradores de la localidad.
                        </p>
                        <p>
                            El Tercer Cuartel, representa los valores de Justicia, Lealtad y Perseverancia cuyas virtudes deben seguir los pobladores de Lechería. Todo ello se representa en un paisaje marino presidido por El Morro de Lechería: íconos geográficos por excelencia de la zona, identificándola con su esencia económica, como lo es la actividad turística sustentable. Por último, El sol y sus rayos recuerdan la calidez del pueblo oriental e indican el sentido de integración del Municipio Urbaneja al Estado Anzoátegui, debido a que el Astro Rey aparece representado tal y como timbra el Escudo Estatal.
                        </p>
                        <p>
                            El Ancla simboliza los deseos futuros de afirmación, paz y progreso para el Municipio en tanto que el Anillo, con los colores emblemáticos de la bandera municipal (blanco y azul marino) enmarca la denominación del Municipio, el nombre de su capital y las fechas de su elevación a la categoría de Parroquia del Distrito Bolívar (1953) y a Municipio (1992).
                        </p>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-full-card>
</div>
