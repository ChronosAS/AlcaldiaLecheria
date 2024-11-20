<div class="">
    <div class="max-w-7xl mx-auto py-10  mt-5 lg:px-8 rounded-xl bg-blue-800 ">
        <div class="pb-5">
            <h1 class="section-heading text-uppercase text-[3rem] text-white text-left ">Atención al Ciudadano</h1>
            <h1 class="section-subheading text-uppercase text-xl text-white text-left">Oficina de Atención al Ciudadano</h1>
        </div>
        <hr class="border border-blue-400 mx-auto mb-5">
        <div class="">
            <x-label for="title" value="Nombre y Apellido" required="true" class="text-xl text-left px-5"/>
            <x-input id="title" placeholder="Tu respuesta"  type="text" style="color: black" class="mt-1  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="title" />
            <x-input-error for="title" class="mt-2" />
        </div>

        <div class="">
            <x-label for="subtitle" value="Cédula " required="true" class="text-white text-xl text-left px-5"/>
            <x-input id="subtitle" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-1  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="subtitle" />
            <x-input-error for="subtitle" class="mt-2" />
        </div>
        <div class="">
            <x-label for="subtitle" value="Correo electrónico" required="true" class="text-white text-xl text-left px-5"/>
            <x-input id="subtitle" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-1  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="subtitle" />
            <x-input-error for="subtitle" class="mt-2" />
        </div>
        <div class="">
            <x-label for="subtitle" value="Número Teléfonico" required="true" class="text-white text-xl text-left px-5"/>
            <x-input id="subtitle" min="0" placeholder="Tu respuesta" type="text" style="color: black" class="mt-1  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="subtitle" />
            <x-input-error for="subtitle" class="mt-2" />
        </div>
        <div class="">
            <x-label for="subtitle" value="Dirección o Dpto" required="true" class="text-white text-xl text-left px-5"/>
            <select id="subtitle" min="0" type="text" style="color: black" class="mt-1  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500 cursor-pointer" wire:model="subtitle">
            <option selected value=''>Elige</option>
            <option  value='' >Administración y Finanzas </option>
            <option  value='' >Administración Tributaria</option>
            <option  value='' >Asuntos Públicos</option>
            <option  value='' >Bienestar Social</option>
            <option  value='' >Clínica Municipal</option>
            <option  value='' >Consultoría jurídica</option>
            <option  value='' >Despacho del Alcalde</option>
            <option  value='' >Dirección de Catastro</option>
            <option  value='' >Dirección de Cultura</option>
            <option  value='' >Dirección de Obras</option>
            <option  value='' >Dirección de Presupuesto</option>
            <option  value='' >Fundación Gestión Social</option>
            <option  value='' >Gerencia de Gestión Urbana</option>
            <option  value='' >Inquilinato</option>
            <option  value='' >Instituto de Deporte</option>
            <option  value='' >Planeamiento Urbano</option>
            <option  value='' >Prensa y Comunicaciones</option>
            <option  value='' >Protección Civil</option>
            <option  value='' >Registro Civil</option>
            <option  value='' >Servicios Generales</option>
            <option  value='' >Tecnología y Sistemas</option>
            <option  value='' >Otro...</option>
            </select>
            <x-input-error for="subtitle" class="mt-2" />
        </div>
        <div class="">
            <x-label for="subtitle" value="Solicitud" required="true" class="text-white text-xl text-left px-5"/>
            <textarea id="subtitle" min="0 " placeholder="Tu respuesta" type="text" style="color: black" class="mt-1 h-20  w-[30rem] text-black bg-white dark:bg-white dark:text-black focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-500" wire:model="subtitle"></textarea>
            <x-input-error for="subtitle" class="mt-2" />
        </div>
        <div class="pt-5">
            <x-button>
                Enviar
            </x-button>
        </div>
    </div>
</div>
