<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Attributes\ArrayOf;
use Hpkns\Objkit\Buildable;

readonly class Iban
{
    use Buildable;

    public function __construct(
        public string $value,
        #[ArrayOf('string')]
        public array  $accounts = [],
    )
    {
        //
    }
}