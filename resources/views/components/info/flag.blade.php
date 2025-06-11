<div class="my-10 space-y-6 px-4 mx-auto max-w-4xl">
    <x-full-card class="shadow-none">
        <x-slot name="title">
            <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                Bandera Municipal
            </div>
        </x-slot>
        <x-slot name="subTitle">
            <div class="text-xl font-medium text-blue-700 flex flex-col items-center gap-2">
                <h1 class="mb-2 flex items-center gap-2">
                    <i class="fas fa-paint-brush text-blue-400"></i>
                    Diseñado por: <span class="font-bold text-blue-900">Francia Zaurin</span>
                </h1>
                <div class="flex items-center justify-center">
                    <img src="{{asset('assets/img/bandera.jpg')}}" 
                         class="h-[8rem] m-4 rounded-xl shadow-lg border-4 border-blue-200 transition-transform duration-300 hover:scale-105 hover:shadow-2xl bg-white" 
                         alt="Bandera Municipal">
                </div>
                <hr class="border-2 border-blue-400 w-2/3 my-2 rounded-full">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="font-serif m-5 space-y-8 text-justify tracking-wide text-lg text-gray-800 leading-relaxed">
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-flag text-blue-400"></i>
                        Historia y Significado
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner space-y-4">
                        <p>
                            La <span class="font-bold text-blue-900">Bandera del Municipio Urbaneja</span> fue escogida mediante concurso en cabildo abierto el <span class="text-blue-700 font-semibold">15 de Marzo de 2001</span>. 
                            La ganadora fue Francia Zaurin presentando un estandarte compuesto por tres franjas horizontales de diferente tamaño. 
                            La superior e inferior son de color azul oscuro y representan el cielo y el mar respectivamente; 
                            la franja central es de color blanco y representa el desarrollo, la juventud, el progreso y la pureza. En esta, 
                            destaca la composición de un sol amarillo en semicírculo atravesado por la figura marrón del Cerro Morro, que representan el potencial turístico y la esencia geográfica misma del municipio.
                        </p>
                        <div class="flex items-center justify-center">
                            <span class="inline-block w-16 h-1 bg-blue-300 rounded-full animate-pulse"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-award text-blue-400"></i>
                        Atributos y Semiología
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner space-y-4">
                        <p>
                            <b class="text-blue-800">Atributos:</b> Consta de un paño de proporción vexilológica aproximada <span class="font-semibold">2:3</span>;
                            esto es, cuadrado y medio de largo dividido en tres franjas horizontales de distinto tamaño: 
                            azul oscuro la superior e inferior equivalentes a una cuarta parte (¼) de la anchura del paño cada una y blanca la central, ocupando el espacio restante y en cuyo centro aparece una colina marrón simétrica y estilizada de la que surge un semicírculo amarillo dorado. 
                        </p>
                        <p>
                            <span class="font-semibold text-blue-700">Semiología:</span> Las franjas azules aluden respectivamente al cielo y el mar, mientras que la blanca simboliza el desarrollo, la juventud, el progreso y la pureza. 
                            La colina representa al “Cerro El Morro” y el semicírculo recuerda el sol: figuras que en conjunto aluden al potencial turístico, esencia existencial y geográfica del Municipio.
                        </p>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-full-card>
</div>
