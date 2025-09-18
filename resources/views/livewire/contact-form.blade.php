<div class="flex justify-center items-center min-h-screen ">
    <div class="w-full max-w-2xl mx-auto py-10 px-6 rounded-3xl shadow-2xl bg-blue-700 backdrop-blur-md ">
        <div class="pb-5 pl-2">
            <h1 class="font-extrabold text-4xl md:text-5xl text-white tracking-tight mb-2 drop-shadow-lg">Atención al Ciudadano</h1>
            <h2 class="font-semibold text-lg md:text-2xl text-white mb-4">Oficina de Atención al Ciudadano</h2>
        </div>
        <hr class="border-blue-300 mb-8">
        <form wire:submit='send' class="space-y-6">
            <div>
                <x-label for="fullName" value="Nombre y Apellido" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="fullName" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="fullName" />
                <x-input-error for="fullName" class="mt-2" />
            </div>
            <div>
                <x-label for="document" value="Cédula" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="document" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="document" />
                <x-input-error for="document" class="mt-2" />
            </div>
            <div>
                <x-label for="email" value="Correo electrónico" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="email" placeholder="Tu respuesta" type="email" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="email" />
                <x-input-error for="email" class="mt-2" />
            </div>
            <div>
                <x-label for="phone" value="Número Teléfonico" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <x-input id="phone" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-2 w-full text-black bg-white border-2 border-blue-200 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="phone" />
                <x-input-error for="phone" class="mt-2" />
            </div>
            <div>
                <x-label for="department" value="Dirección o Dpto" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <select id="department" class="mt-2 w-full rounded-lg text-black bg-white border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition cursor-pointer" wire:model="department">
                    <option selected value=''>Elige</option>
                    <option value='administracion_finanzas'>Administración y Finanzas</option>
                    <option value='administracion_tributaria'>Administración Tributaria</option>
                    <option value='asuntos_publicos'>Asuntos Públicos</option>
                    <option value='bienestar_social'>Bienestar Social</option>
                    <option value='clinica_municipal'>Clínica Municipal</option>
                    <option value='consultoria_juridica'>Consultoría jurídica</option>
                    <option value='despacho_alcalde'>Despacho del Alcalde</option>
                    <option value='direccion_catastro'>Dirección de Catastro</option>
                    <option value='direccion_cultura'>Dirección de Cultura</option>
                    <option value='direccion_obras'>Dirección de Obras</option>
                    <option value='direccion_presupuesto'>Dirección de Presupuesto</option>
                    <option value='fundacion_gestion_social'>Fundación Gestión Social</option>
                    <option value='gerencia_destion_urbana'>Gerencia de Gestión Urbana</option>
                    <option value='inquilinato'>Inquilinato</option>
                    <option value='instituto_deporte'>Instituto de Deporte</option>
                    <option value='planeamiento_urbano'>Planeamiento Urbano</option>
                    <option value='prensa_comunicaciones'>Prensa y Comunicaciones</option>
                    <option value='proteccion_civil'>Protección Civil</option>
                    <option value='registro_civil'>Registro Civil</option>
                    <option value='servicios_generales'>Servicios Generales</option>
                    <option value='tecnologia_sistemas'>Tecnología y Sistemas</option>
                    <option value='otro'>Otro...</option>
                </select>
                <x-input-error for="department" class="mt-2" />
            </div>
            <div>
                <x-label for="content" value="Solicitud" required="true" class="text-lg text-blue-900 font-semibold px-2"/>
                <textarea id="content" placeholder="Describe tu content" class="mt-2 w-full h-28 rounded-lg resize-none text-black bg-white border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-400 transition" wire:model="content"></textarea>
                <x-input-error for="content" class="mt-2" />
            </div>
            <div class="pt-4 flex justify-end">
                <x-button
                    wire:loading.attr='disabled'
                    wire:loading.class.remove='transition-all duration-200 ease-in-out '
                    class="bg-blue-800 hover:bg-blue-500 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition-all duration-200 ease-in-out text-lg disabled:bg-blue-400 disabled:cursor-progress"
                >
                    Enviar
                </x-button>
            </div>
        </form>
    </div>
</div>
