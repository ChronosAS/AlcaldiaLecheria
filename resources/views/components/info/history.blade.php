<div class="my-10 space-y-6 px-4 mx-auto max-w-5xl">
    <x-full-card>
        <x-slot name="title">
            <div class="text-4xl font-extrabold text-blue-900 flex items-center gap-3">
                <span class="inline-block w-2 h-8 bg-blue-400 rounded-full animate-pulse"></span>
                Lechería: Historia de una ciudad modelo
            </div>
        </x-slot>
        <x-slot name="subTitle">
            <div class="text-xl font-medium text-blue-700 flex flex-col items-center gap-2">
                <h1>Escrito por: <span class="font-bold text-blue-900">Maximilian Kopp M.</span></h1>
                <hr class="border-2 border-blue-400 w-2/3 my-2 rounded-full">
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="font-serif m-5 space-y-8">
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-landmark text-blue-400"></i>
                        Sinopsis Histórica
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner text-justify leading-loose space-y-4 text-lg text-gray-800 relative" x-data="{ copied: false }" >
                        <button
                            @click="
                                        let text = $refs.sinopsisText.innerText;
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
                                            } catch (err) {}
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
                            class="absolute top-10 right-2 bg-blue-700 bg-opacity-60 text-white px-4 py-2 rounded shadow-lg text-sm font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle text-green-300"></i>
                            Texto copiado
                        </div>
                        <p x-ref="sinopsisText">
                            Desde los tiempos prehispánicos hasta la actualidad, el territorio de 18 Km2 que hoy ocupa la Ciudad de Lechería siempre ha sido un lugar de encuentros y oportunidades.<br>
                            Así lo fue para la Cacica la Magdalena y los Cumanagotos que en armonía vivieron con la naturaleza en El Morro; también lo fue para los conquistadores Jerónimo de Ortal y Antonio Sedeño quienes en busca del camino al Dorado se establecieron brevemente en 1535 en las Bocas del Río Neverí cuyo prospero Puerto de Barcelona atrajo a corsarios holandeses especializados en el contrabando y en especial del aprovechamiento ilícito del riquezas del “Oro Blanco” es decir la sal lo cual obligo a la corona a española a levantar a fines del Siglo XVIII a el Fortín de La Magdalena el cual fue visitado por Alejandro Von Humboltd “El Primer Turista de El Morro” cuya vista al igual que los numerosos visitantes que le precedieron los han dejado encantados. Otros que se encontraron en estas tierras fueron los patriotas y realistas quedando para la historia los pasos de El Libertador en 1817 y la toma efectuada por el General Rafael Urdaneta en 1819.<br>
                            El siglo XX se inició con la llegada de los margariteños.<br>
                            Estos pioneros que hacían vida entre las rancherías de El Morro y La Lechería vivieron de la venta de leche de las chivas ordeñadas en los corrales de Zoila Rodríguez y Carmen Bustillos, pero también recibian ingresos del comercio del pescado fresco y salado regalados por las bondades del mar y la salina que tras su modesta explotación artesanal convirtió este gran territorio en el Complejo Turístico de El Morro, gracias a la visión de Diego Bautista, cuyo desarrollo motivó a que el 22 de enero de 1992 fuese creado El Municipio Turístico El Morro Licenciado Diego Bautista Urbaneja teniendo como sede a la Ciudad de Lechería, la cual en los últimos años, por su creciente población, expansión comercial y urbanística – pese a los muchos contratiempos- es indiscutiblemente la Capital Turística del Estado Anzoátegui, una encrucijada cultural y asidero del futuro colmado por las bendiciones de Santo Domingo de Guzmán, María Auxiliadora y especialmente por Nuestra Virgen del Valle
                        </p>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-signature text-blue-400"></i>
                        Origen del nombre Lechería
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner text-justify leading-loose space-y-4 text-lg text-gray-800 relative" x-data="{ copied: false }" x-ref="copyOrigenLecheria">
                        <button
                            @click="
                                let text = $refs.copyOrigenLecheria.innerText;
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
                                    } catch (err) {}
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
                            class="absolute top-10 right-2 bg-blue-700 text-white px-4 py-2 rounded shadow-lg text-xs font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle text-green-300"></i>
                            ¡Texto copiado!
                        </div>
                        <p>
                            Según datos del cronista Rafael Armas Alfonzo el nombre de la capital municipal surgió a fines del siglo XIX del hablar diario de los pobladores de Barcelona para denominar el lugar donde Nicomedes Iriza, y Carmen Bustillos tenían corrales y puestos de ventas de leche de chiva. Los mismos se ubicaban por los actuales lados del Cerro Venezuela (La Pedrera) a la altura de los sectores Madre Vieja y Venezuela. Sin embargo, varios de los primeros pobladores de El Morro, afirman que por los lados de la actual Plaza Bolívar, Zoila Rodríguez también tuvo su lechera.<br>
                            Es importante señalar que, previa consulta al Instituto Geográfico de Venezuela Simón Bolívar, éste contestó y recomendó mediante oficio Nº 780 de fecha 29 de mayo del 2001, que se corrigieron las distorsiones sobre la denominación oficial e histórica de la capital municipal que es Lechería y no Lecherías. Tal posición está debidamente confirmada por los testimonios aportados por los primeros pobladores de la zona, por los libros parroquiales, y por los mapas oficiales de Cartografía Nacional, donde aparece en las ediciones de 1940, 1945 y 1953 el nombre de “La Lechería” y en las ediciones de 1960, 1972 y 1995 se señala simplemente Lechería.
                        </p>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-blue-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-map-marked-alt text-blue-400"></i>
                        Origen del Nombre del Municipio
                    </h2>
                    <div class="bg-blue-50/70 rounded-xl p-6 shadow-inner text-justify leading-loose space-y-4 text-lg text-gray-800 relative" x-data="{ copied: false }" x-ref="copyOrigenMunicipio">
                        <button
                            @click="
                                let text = $refs.copyOrigenMunicipio.innerText;
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
                                    } catch (err) {}
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
                            class="absolute top-10 right-2 bg-blue-700 text-white px-4 py-2 rounded shadow-lg text-xs font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle text-green-300"></i>
                            ¡Texto copiado!
                        </div>
                        <p>
                            En Gaceta Oficial del Estado Anzoátegui de fecha 9 de julio de 1953 fue creada la Parroquia Lic. Diego Bautista Urbaneja del Distrito (actual Municipio) Bolívar. Luego de un estudio de factibilidad económica y de acuerdo a la tasa poblacional mínima exigida por la Ley Orgánica de Régimen Municipal de 1989, La Asamblea Legislativa del Estado Anzoátegui aprobó la creación de la nueva municipalidad con el nombre oficial de Municipio Turístico El Morro Lic. Diego Bautista Urbaneja, publicado en la Gaceta Oficial Nº (91) extraordinario de fecha 22 de enero de 1992.
                        </p>
                    </div>
                </div>
                <div>
                    
                    <h2 class="font-bold text-2xl text-blue-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-calendar-alt text-blue-400"></i>
                        Linea de Tiempo de Lechería
                    </h2>
                    <div x-data="{ copied: false }" x-ref="copyTimeline" class="relative">
                        <button
                            @click="
                                let text = $refs.timelineList.innerText;
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
                            aria-label="Copiar línea de tiempo"
                        >
                            <i class="fas fa-copy"></i>
                        </button>
                        <div
                            x-show="copied"
                            x-transition
                            class="absolute top-12 right-2 bg-blue-700 text-white px-4 py-2 rounded shadow-lg text-sm font-semibold flex items-center gap-2"
                            style="z-index:100;"
                        >
                            <i class="fas fa-check-circle"></i>
                            Texto copiado
                        </div>
                        <ul class="list-inside list-disc p-6 bg-blue-50/70 rounded-xl shadow-inner tracking-wide leading-relaxed space-y-4 text-justify text-lg" x-ref="timelineList">
                            <li>
                                <b class="text-blue-700"><u>04 de Marzo de 1734:</u></b> En Soria (España) nace el ingeniero militar Casimiro Isava Olivier. Fue quien elaboró los planos del Fortín de la Magdalena de El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>17 de Noviembre 1800:</u></b> El padre de la geografía moderna, Alejandro de Humboltd y el botánico Aime Bompland visita el Fortín de la Magdalena de El Morro. En su libro Viaje a las Regiones Equinocciales del Nuevo Continente Afirmaron: “La Perspectiva que se goza de lo alto de El Morro es bastante hermosa”.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>08 de Diciembre de 1802:</u></b> En Cumaná (Edo. Sucre) muere el ingeniero militar español Casimiro Isava Olivier. Fue quien levantó los planos del Fortín de la Magdalena de El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>17 de Febrero de 1817:</u></b> Las tropas realistas y patriotas se enfrentan en El Morro por el control del Fortín de la Magdalena. En dicha oportunidad el Libertador Simón Bolívar tomó parte en el combate el cual culminó con el triunfo patriota.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>22 de Febrero de 1817:</u></b> Con refuerzos de Cumaná, el jefe realista José Guerrero toma El Fortín de La Magdalena de El Morro. De esa manera los españoles lograron bloquear temporalmente a Barcelona.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>04 de Marzo de 1817:</u></b> Simón Bolívar ataca por tierra y mar al Fortín de la Magdalena de El Morro. En esta ocasión El Libertador y las tropas patriotas lograron recuperar temporalmente la guarnición.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>15 de Febrero de 1819:</u></b> Es instalado el Congreso Constituyente de Angostura el cual posteriormente creó a la Gran Colombia. Entre los diputados se encontraban Diego Bautista Urbaneja por la Provincia de Barcelona.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>27 de Febrero de 1819:</u></b> Simón Bolívar nombra al jurista Diego Bautista Urbaneja, Ministro del Interior y Justicia. Urbaneja fue el primer titular de dicho ministerio en Gran Colombia.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>17 de Julio 1819:</u></b> El General en Jefe Rafael Urdaneta y miembro de la Legión Británica asaltan el Fortín de la Magdalena de El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>06 de Mayo de 1821:</u></b> En Cúcuta (Colombia), bajo la presidencia de José Félix de Restrepo es instalado el Congreso Constituyen­te de Colombia. Entre los diputados asistentes destacó la participación de Diego Bautista Urbaneja.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>24 de Junio de 1824:</u></b> En Caracas es oficialmente instalada la Gran Logia de Colombia. Su Primer gran maestre fue Diego Bautista Urbaneja.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>27 de Febrero de 1830:</u></b> Diego Bautista Urbaneja informa en Santa Fe de Bogotá a las autoridades de la Gran Colombia la definitiva separación del Departamento de Venezuela de la Gran Colombia.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>19 de Abril de 1831:</u></b> El barcelonés Diego Bautista Urbaneja asume la Presidencia de la República en calidad de encargado. De esa manera Urbaneja se convirtió en el primer Presidente de Venezuela nacido en el Estado Anzoátegui.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>07 de Septiembre de 1831:</u></b> Diego Bautista Urbaneja hace entrega de la presidencia de la república a José Antonio Páez. De esta manera Urbaneja culminó sus funciones ejecutivas que le permitieron ser el primer presidente encargado y primero nativo del Anzoátegui.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>21 de Abril de 1842:</u></b> El Sec. del Interior, Diego Bautista Urbaneja ordenó al Director de Instrucción Pública, Dr. José Ma. Vargas elaborar el proyecto de creación del Colegio Nacional de Barcelona. Esto permitió la fundación del Liceo Cajigal, el centro de estudios más antiguo de Anzoátegui.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>12 de Enero de 1856:</u></b> En Caracas muere el Licenciado barcelonés Diego Bautista Urbaneja Stuardy. prócer epónimo municipal.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>16 de Septiembre de 1909:</u></b> En Clarines, nace el comerciante productor agrícola, docente y cronista Rafael Armas Alfonzo. El “Maestro Felo”, se dedicó a la agricultura, y comercio la docencia en Barquisimeto, Sabana de Uchire, Barcelona y Lechería en donde fue maestro y director de la escuela Ignacio Potentini y Tomás Alfaro Calatrava y finalmente fue Cronista de Barcelona y primer Cronistas de Lechería de 1993 hasta el 11 de Mayo de 2000, día en el cual falleció.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>23 de Abril de 1914:</u></b> En Barquisimeto (Edo. Lara) nace el empresario, economista, ingeniero matemático y municipalista Daniel Camejo Octavio. Fue el creador de la Empresa CAZTOR y promotor principal del Complejo Turístico El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>07 de Octubre de 1920:</u></b> En Kumaria, (Grecia) nace el escultor Dimitrios Demu. Fue uno de los más afamados escultores de Rumania y Venezuela en donde se radicó en Lechería desde 1965 para crear las monumentales esculturas de La Mariposa, El Heptaedro del Cielo, Los Pájaros de Barcelona , y fundar el museo que lleva su nombre. Murió en Lechería el 30 de Octubre de 1997.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>12 de Agosto de 1954:</u></b> El Consejo del actual Municipio Bolívar del Estado Anzoátegui y Víctor Morino firma un contrato mediante el cual posteriormente se se inició la construcción de la Plaza Bolívar de Lechería y la Casa Municipal.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>19 de Mayo de 1956:</u></b> En Lechería nace el beisbolista Luis Salazar. Este deportista fue jugador y manager por largos años del equipo Los Tiburones de la Guaira en la liga Profesional de Béisbol de Venezuela y uno de los más destacados peloteros venezolanos de todos los tiempos en las Grandes Ligas.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>14 de Noviembre de 1960:</u></b> Es fundado el Coro de aguinaldos María Auxiliadora de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>08 de Diciembre de 1965:</u></b> El Presidente, Raúl Leoni inaugura la primera etapa de la Avenida Licenciado Diego Bautista Urbaneja (Principal de Lechería).
                            </li>
                            <li>
                                <b class="text-blue-700"><u>07 de Noviembre de 1966:</u></b> El Gobernador del Estado Anzoátegui, doctor Rafael Antonio Fernández Padilla da inicio a los trabajos de construcción de la última etapa de la Aveni­da Diego Bautista Urbaneja, la cual es mejor conocida como la Avenida Principal de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>12 de Septiembre de 1967:</u></b> Con el patrocinio de la Corporación Venezolana de Fomento y los concejos muni­cipales de Bolívar y Sotillo es constituida oficialmente la Compañía Anónima para el Desarrollo de la Zona Turística de Oriente (CAZTOR) cuyo primer presidente fue el doctor Daniel Camejo Octavio. Esta compañía y su presidente fueron los creadores del Complejo Turístico El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>29 de Mayo de 1971:</u></b> Es inaugurado el Centro Médico Anzoátegui de Lechería cuyo director fundador fue el doctor Francisco Godoy Jordán. Esta clínica privada fue diseñada por el arquitecto Gustavo Wills.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>19 de Abril de 1972:</u></b> Es inaugurado el Parque Domingo Guzmán Lander de Lechería. De esa manera se le rindió homenaje a quien fue uno de los más prestigiosos médicos anzoatiguense.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>27 de Julio de 1974:</u></b> Es pre inaugurado el Hotel Club de Playa de El Morro. Este fue uno de los primeros de la ciudad.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>18 de Mayo de 1979:</u></b> En el Centro de Profesionales de Lechería se lleva a cabo el primer acto académico de graduación de los 13 primeros médicos que egresaron de la Escuela de Medicina de la Universidad de Oriente.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>19 de Noviembre de 1980:</u></b> En Lechería se lleva a cabo el acto de imposición de anillos de los ocho primeros ingenieros civiles egresados de la Universidad de Oriente, extensión Anzoátegui.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>04 de Abril de 1981:</u></b> En Lechería muere el economista Hernán Centeno Lusinchi. Fue presidente fundador del Colegio de Economistas del Estado Anzoátegui y entre otros, Presidente del Rotary Club de Barcelona de 1978 a 1979.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>09 de Agosto de 1981:</u></b> Es inaugurado oficialmente el servicio telefónico de Discado Directo Internacional de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>03 de Mayo de 1982:</u></b> El presidente Luis Herrera Campins inaugura la sede del Cuartel General de la Policía Metropolitana (Anzoátegui) ubicado en el Crucero de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>22 de Noviembre de 1986:</u></b> El presidente del Fondo de Inversiones de Venezuela, Héctor Hurtado y el presidente de Corpoturismo, César Higueras, inauguran a la Hostería de El Morro
                            </li>
                            <li>
                                <b class="text-blue-700"><u>26 de Febrero de 1987:</u></b> El Gobernador del Estado Anzoátegui Otto Padrón Guevara y el Presidente de CAZTOR, Freddy Mogna Cruz inauguran el Sector C de las Casas Botes del Complejo Turístico de El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>18 de Septiembre de 1987:</u></b> El presidente Jaime Lusinchi inaugura la Central Digital de la CANTV de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>25 de Marzo de 1988:</u></b> Es inaugurado el Sector A de las Aquavillas del Complejo Turístico El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>30 de Septiembre de 1989:</u></b> En el sector las Casas Botes del Complejo Turístico El Morro de Lechería inicia sus operaciones la emisora de radio Super Suave 90.5 FM.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>23 de Septiembre de 1991:</u></b> Fundanzoategui entrega a la Asamblea Legislativa del Estado Anzoátegui el estudio de factibilidad que posteriormente permitió la creación del Municipio Turístico El Morro Lic. Diego Bautista Urbaneja.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>30 de Noviembre de 1991:</u></b> En el Complejo Turístico El Morro es inaugurado el Hotel Mare Mares cuya categoría es de 5 Estrellas.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>22 de Enero de 1992:</u></b> Es publicada en Gaceta Oficial del Estado Anzoátegui la creación del Municipio Turístico El Morro “Licenciado Diego Bautista Urbaneja”.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>04 de Enero de 1993</u></b>: El Ingeniero Gilberto Ron Tovar es juramentado Alcalde para el Período 1993-1996.
                            </li>
                            <li>Él fue el primer alcalde electo por voto directo y primero de la historia del Municipio Turístico El Morro “Lic. Diego Bautista Urbaneja”.</li>
                            <li>
                                <b class="text-blue-700"><u>19 de Junio de 1993:</u></b> Con un total de 55 funcionarios policiales egresa la primera promoción de policías del Instituto Autónomo de la Policía del Municipio Turístico El Morro “Licenciado Diego Bautista Urbaneja”.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>15 de Septiembre de 1993:</u></b> Con gran júbilo, en Lechería es recibido el velerista anzoatiguense Eduardo Cordero Jiménez. Días atrás Cordero obtuvo en las Islas Vírgenes norteamericanas el primero de los seis títulos de Campeón Mundial de Vela, la Clase Sunfish. Actualmente el Trofeo se conserva y exhibe en la sede de la Alcaldía de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>19 de Mayo de 1998:</u></b> Es fundado formalmente la Orquestas Típica de Lechería cuyo fundador fue el Profesor Julio Velásquez.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>15 de Septiembre 1998:</u></b> Bajo la dirección musical de Carlos González, inicia sus actividades académicas la Orquesta Típica de Lechería siendo su fundador el profesor Julio Velásquez.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>14 de Agosto de 2000:</u></b> El Señor Alexis Ortiz es juramentado oficialmente Alcalde del Municipio Turístico El Morro “Lic. Diego Bautista Urbaneja” para cumplir con el período 2000-2004.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>22 de Agosto de 2000:</u></b> Los miembros del Concejo Municipal aprueban por unanimidad la proposición del Alcalde Alexis Ortíz de nombrar al historiador Maximilian Kopp Marcano como Cronista de la Ciudad de Lechería. De esta Manera Kopp de tan solo 27 años se convirtió en el Cronista Oficial municipal más joven de Venezuela.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>15 de Diciembre de 2000:</u></b> En las Afueras del Centro Comercial Plaza Mayor de Lechería es inaugurado el mural “Lluvia” del Afamado artista plástico anzoatiguense Rafael Borarín. Este Fue el Primero del Museo a Cielo Abierto de Lechería el cual es único en su tipo en Venezuela.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>26 de Diciembre de 2000:</u></b> En la Ciudad de Miami (Florida – USA) es inaugurada la oficina de Promoción Comercial y Turística de la Ciudad de Lechería cuyo coordinador es Rómulo Fernández.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>12 de Mayo de 2001:</u></b> En el Sector Barrio Venezuela de Lechería es inaugurado el Centro Integral del Niño y Adolescente Virgen del Valle cuya fundadora es la licenciada Delvis Mouri de Ortiz.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>25 de Agosto de 2001:</u></b> En acto celebrado en la Plaza Bolívar – y por vez primera en un cabildo abierto-, el alcalde, Alexís Ortiz presenta el informe de la gestión de gobierno 2000-2001. La misma fue posteriormente aprobada por los miembros del Concejo 4 votos a 1.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>04 de Septiembre de 2001:</u></b> Es inaugurada la Plaza de los primeros pobladores de Lechería – El Morro.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>09 de Noviembre de 2001:</u></b> Se inician los trabajos de construcción de la II etapa de la Clínica Municipal Alí Montilla Carreyo de Lechería.
                            </li>
                            <li>
                                <b class="text-blue-700"><u>13 de Noviembre de 2001:</u></b> Luego de una jornada de amplias consultas a todos los miembros de las fuerzas vivas de la ciudad de Lechería, la cámara municipal recibe el anteproyecto de la ordenanza de Presupuesto para el año 2002 la cual esta cercana a los 9 mil millones de bolívares.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-full-card>
</div>
