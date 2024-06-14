<?php

namespace App\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class BackgroundColor extends AttributeProperty
{
    public function __construct(
        private mixed $value,
        ) {
    }

    public function get(): string
    {
        return 'bg-' . $this->value . '-400';
    }
}
