<?php

namespace App\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class SubCategories extends AttributeProperty
{
    public function __construct(
        private mixed $value,
        ) {
    }

    public function get(): array
    {
        return $this->value;
    }
}
