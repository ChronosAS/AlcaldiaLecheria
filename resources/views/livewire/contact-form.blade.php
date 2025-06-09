<div class="flex justify-center items-center min-h-screen ">
    <div class="w-full max-w-2xl mx-auto py-10 px-6 rounded-3xl shadow-2xl bg-blue-700 backdrop-blur-md border border-blue-200">
        <div class="pb-5 pl-2">
            <h1 class="font-extrabold text-4xl md:text-5xl text-white tracking-tight mb-2 drop-shadow-lg">Atención al Ciudadano</h1>
            <h2 class="font-semibold text-lg md:text-2xl text-white mb-4">Oficina de Atención al Ciudadano</h2>
        </div>
        <hr class="border-blue-300 mb-8">
        <form class="space-y-6">
            <div>
                <x-label for="title" value="Nombre y Apellido" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="title" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="title" />
                <x-input-error for="title" class="mt-2" />
            </div>
            <div>
                <x-label for="cedula" value="Cédula" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="cedula" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="cedula" />
                <x-input-error for="cedula" class="mt-2" />
            </div>
            <div>
                <x-label for="email" value="Correo electrónico" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="email" placeholder="Tu respuesta" type="email" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="email" />
                <x-input-error for="email" class="mt-2" />
            </div>
            <div>
                <x-label for="telefono" value="Número Teléfonico" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="telefono" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="telefono" />
                <x-input-error for="telefono" class="mt-2" />
            </div>
            <div>
                <x-label for="departamento" value="Dirección o Dpto" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <select id="departamento" class="mt-2 w-full rounded-lg text-black bg-white border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition cursor-pointer" wire:model="departamento">
                    <option selected value=''>Elige</option>
                    <option value='Administración y Finanzas'>Administración y Finanzas</option>
                    <option value='Administración Tributaria'>Administración Tributaria</option>
                    <option value='Asuntos Públicos'>Asuntos Públicos</option>
                    <option value='Bienestar Social'>Bienestar Social</option>
                    <option value='Clínica Municipal'>Clínica Municipal</option>
                    <option value='Consultoría jurídica'>Consultoría jurídica</option>
                    <option value='Despacho del Alcalde'>Despacho del Alcalde</option>
                    <option value='Dirección de Catastro'>Dirección de Catastro</option>
                    <option value='Dirección de Cultura'>Dirección de Cultura</option>
                    <option value='Dirección de Obras'>Dirección de Obras</option>
                    <option value='Dirección de Presupuesto'>Dirección de Presupuesto</option>
                    <option value='Fundación Gestión Social'>Fundación Gestión Social</option>
                    <option value='Gerencia de Gestión Urbana'>Gerencia de Gestión Urbana</option>
                    <option value='Inquilinato'>Inquilinato</option>
                    <option value='Instituto de Deporte'>Instituto de Deporte</option>
                    <option value='Planeamiento Urbano'>Planeamiento Urbano</option>
                    <option value='Prensa y Comunicaciones'>Prensa y Comunicaciones</option>
                    <option value='Protección Civil'>Protección Civil</option>
                    <option value='Registro Civil'>Registro Civil</option>
                    <option value='Servicios Generales'>Servicios Generales</option>
                    <option value='Tecnología y Sistemas'>Tecnología y Sistemas</option>
                    <option value='Otro...'>Otro...</option>
                </select>
                <x-input-error for="departamento" class="mt-2" />
            </div>
            <div>
                <x-label for="solicitud" value="Solicitud" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <textarea id="solicitud" placeholder="Describe tu solicitud" class="mt-2 w-full h-28 rounded-lg resize-none text-black bg-white border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="solicitud"></textarea>
                <x-input-error for="solicitud" class="mt-2" />
            </div>
            <div class="pt-4 flex justify-end">
                <x-button class="bg-blue-800 hover:bg-blue-500 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition-all duration-200 ease-in-out text-lg">Enviar</x-button>
            </div>
        </form>
    </div>
</div>