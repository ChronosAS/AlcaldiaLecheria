<?php

namespace App\Enums\News;

use App\Attributes\Color;
use App\Attributes\Description;
use App\Attributes\Label;
use App\Traits\EnumOptions;
use App\Traits\AttributableEnum;

enum PostStatus: string
{
    use AttributableEnum,EnumOptions;

    #[Label('Borrador')]
    #[Description('Post en borrador.')]
    #[Color('yellow')]
    case DRAFT = 'draft';

    #[Label('Publicado')]
    #[Description('Post publicado.')]
    #[Color('green')]
    case PUBLISHED = 'published';
}
