<?php

namespace Tests\Fixtures;

use DateTimeImmutable;
use Hpkns\Objkit\Buildable;

readonly class Date
{
    use Buildable;

    public function __construct(
        public DateTimeImmutable $value,
    )
    {
        //
    }
}