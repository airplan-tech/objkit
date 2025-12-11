<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Buildable;
use JsonSerializable;

readonly class WithUnionParam
{
    use Buildable;

    public function __construct(
        public JsonSerializable|int|string $value,
    )
    {
        //
    }
}