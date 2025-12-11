<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Buildable;

readonly class InvalidClassHint
{
    use Buildable;

    public function __construct(
        public NotARealClass $value,
    )
    {
        //
    }
}