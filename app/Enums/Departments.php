<?php

namespace App\Enums;

use App\Attributes\Label;
use App\Traits\EnumOptions;
use App\Traits\AttributableEnum;

enum Departments: string
{
    use AttributableEnum, EnumOptions;

    #[Label('Administración y Finanzas')]
    case ADMINISTRACION_FINANZAS = 'administracion_finanzas';

    #[Label('Administración Tributaria')]
    case ADMINISTRACION_TRIBUTARIA = 'administracion_tributaria';

    #[Label('Asuntos Públicos')]
    case ASUNTOS_PUBLICOS = 'asuntos_publicos';

    #[Label('Bienestar Social')]
    case BIENESTAR_SOCIAL = 'bienestar_social';

    #[Label('Clínica Municipal')]
    case CLINICA_MUNICIPAL = 'clinica_municipal';

    #[Label('Consultoría Jurídica')]
    case CONSULTORIA_JURIDICA = 'consultoria_juridica';

    #[Label('Despacho del Alcalde')]
    case DESPACHO_ALCALDE = 'despacho_alcalde';

    #[Label('Dirección de Catastro')]
    case DIRECCION_CATASTRO = 'direccion_catastro';

    #[Label('Dirección de Cultura')]
    case DIRECCION_CULTURA = 'direccion_cultura';

    #[Label('Dirección de Obras')]
    case DIRECCION_OBRAS = 'direccion_obras';

    #[Label('Dirección de Presupuesto')]
    case DIRECCION_PRESUPUESTO = 'direccion_presupuesto';

    #[Label('Fundación Gestión Social')]
    case FUNDACION_GESTION_SOCIAL = 'fundacion_gestion_social';

    #[Label('Gerencia de Gestión Urbana')]
    case GERENCIA_GESTION_URBANA = 'gerencia_destion_urbana';

    #[Label('Inquilinato')]
    case INQUILINATO = 'inquilinato';

    #[Label('Instituto de Deporte')]
    case INSTITUTO_DEPORTE = 'instituto_deporte';

    #[Label('Planeamiento Urbano')]
    case PLANEAMIENTO_URBANO = 'planeamiento_urbano';

    #[Label('Prensa y Comunicaciones')]
    case PRENSA_COMUNICACIONES = 'prensa_comunicaciones';

    #[Label('Protección Civil')]
    case PROTECCION_CIVIL = 'proteccion_civil';

    #[Label('Registro Civil')]
    case REGISTRO_CIVIL = 'registro_civil';

    #[Label('Servicios Generales')]
    case SERVICIOS_GENERALES = 'servicios_generales';

    #[Label('Tecnología y Sistemas')]
    case TECNOLOGIA_SISTEMAS = 'tecnologia_sistemas';

    #[Label('Otros..')]
    case OTRO = 'otro';
}
