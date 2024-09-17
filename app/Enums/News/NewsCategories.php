<?php

namespace App\Enums\News;

use App\Attributes\Description;
use App\Attributes\Label;
use App\Attributes\SubCategories;
use App\Traits\EnumOptions;
use App\Traits\AttributableEnum;

enum NewsCategories: string
{
    use AttributableEnum,EnumOptions;

    #[Label('Desarrollo urbano')]
    #[Description('Planificación urbana, zonificación, permisos de construcción,
infraestructura.')]
    #[SubCategories([
                0 => [
                    'name' => 'planificacion_urbana',
                    'label' => 'Planificación urbana'
                ],
                1 => [
                    'name' => 'zonificacion',
                    'label' => 'Zonificación'
                ],
                2 => [
                    'name' => 'permisos_de_construccion',
                    'label' => 'Permisos de Construcción'
                ],
                3 => [
                    'name' => 'infraestructura',
                    'label' => 'Infraestructura'
                ],
            ]
        )]
    case DESARROLLO_URBANO = 'desarrollo_urbano';

    #[Label('Medio ambiente')]
    #[Description('Sostenibilidad, reciclaje, parques, conservación.')]
    #[SubCategories([
                0 => [
                    'name' => 'sostenibilidad',
                    'label' => 'Sostenibilidad'
                ],
                1 => [
                    'name' => 'reciclaje',
                    'label' => 'Reciclaje'
                ],
                2 => [
                    'name' => 'parques',
                    'label' => 'Parques'
                ],
                3 => [
                    'name' => 'conservacion',
                    'label' => 'Conservación'
                ],
            ]
        )]
    case MEDIO_AMBIENTE = 'medio_ambiente';

    #[Label('Seguridad pública')]
    #[Description('Policía, bomberos, emergencias, Protección Civil.')]
    #[SubCategories([
                0 => [
                    'name' => 'policia',
                    'label' => 'Policía'
                ],
                1 => [
                    'name' => 'bomberos',
                    'label' => 'Bomberos'
                ],
                2 => [
                    'name' => 'emergencias',
                    'label' => 'Emergencias'
                ],
                3 => [
                    'name' => 'proteccion_civil',
                    'label' => 'Protección Civil'
                ],
            ]
        )]
    case SEGURIDAD_PUBLICA = 'seguridad_publica';

    #[Label('Salud')]
    #[Description('Clínicas, hospitales, servicios de salud pública.')]
    #[SubCategories([
                0 => [
                    'name' => 'clinicas',
                    'label' => 'Clínicas'
                ],
                1 => [
                    'name' => 'hospitales',
                    'label' => 'Hospitales'
                ],
                2 => [
                    'name' => 'servicios_salud_pública',
                    'label' => 'servicios de salud pública'
                ],
            ]
        )]
    case SALUD = 'salud';

    #[Label('Transporte')]
    #[Description('Autobuses, trenes, calles, ciclismo.')]
    #[SubCategories([
                0 => [
                    'name' => 'autobuses',
                    'label' => 'Autobuses'
                ],
                1 => [
                    'name' => 'trenes',
                    'label' => 'Trenes'
                ],
                2 => [
                    'name' => 'calles',
                    'label' => 'Calles'
                ],
                3 => [
                    'name' => 'ciclismo',
                    'label' => 'Ciclismo'
                ],
            ]
        )]
    case TRANSPORTE = 'transporte';

    #[Label('Economía')]
    #[Description('Desarrollo empresarial, empleo, oportunidades de trabajo.')]
    #[SubCategories([
                0 => [
                    'name' => 'desarrollo_empresarial',
                    'label' => 'Desarrollo empresarial'
                ],
                1 => [
                    'name' => 'empleo',
                    'label' => 'Empleo'
                ],
                2 => [
                    'name' => 'oportunidades_de_trabajo',
                    'label' => 'Oportunidades de trabajo'
                ],
            ]
        )]
    case ECONOMIA = 'economia';

    #[Label('Elecciones')]
    #[Description('Votaciones, candidatos, resultados electorales.')]
    #[SubCategories([
                0 => [
                    'name' => 'votaciones',
                    'label' => 'Votaciones'
                ],
                1 => [
                    'name' => 'candidatos',
                    'label' => 'Candidatos'
                ],
                2 => [
                    'name' => 'resultados_electorales',
                    'label' => 'Resultados electorales'
                ],
            ]
        )]
    case ELECCIONES = 'elecciones';

    #[Label('Impuestos')]
    #[Description('Tasas municipales, presupuestos, gastos.')]
    #[SubCategories([
                0 => [
                    'name' => 'tasas_municipales',
                    'label' => 'Tasas municipales'
                ],
                1 => [
                    'name' => 'presupuestos',
                    'label' => 'Presupuestos'
                ],
                2 => [
                    'name' => 'gastos',
                    'label' => 'Gastos'
                ],
                3 => [
                    'name' => 'ciclismo',
                    'label' => 'Ciclismo'
                ],
            ]
        )]
    case IMPUESTOS = 'impuestos';

    #[Label('Deportes')]
    #[Description('Eventos deportivos, noticias del Instituto de Deportes Urbaneja, noticias
de los atletas y clubs deportivos de la ciudad.')]
    #[SubCategories([
            0 => [
                'name' => 'eventos_deportivos',
                'label' => 'Eventos deportivos'
            ],
            1 => [
                'name' => 'instituto_de_deportes_urbaneja',
                'label' => 'Instituto de Deportes Urbaneja'
            ],
            2 => [
                'name' => 'atletas_y_clubs_deportivos',
                'label' => 'Atletas y clubs deportivos'
            ],
        ]
    )]
    case DEPORTES = 'deportes';

    #[Label('Gestión Social')]
    #[Description('Todo lo relacionado a los programas educativos y culturales de
gestión social.')]
    #[SubCategories([])]
    case GESTION_SOCIAL = 'gestion_social';

}
