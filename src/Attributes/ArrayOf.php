<?php

namespace Hpkns\Objkit\Attributes;

use Attribute;

#[Attribute]
class ArrayOf
{
    /**
     * @param class-string $type
     */
    public function __construct(
        readonly public string $type
    )
    {
        //
    }
}