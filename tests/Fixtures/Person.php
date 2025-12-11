<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Attributes\ArrayOf;
use Hpkns\Objkit\Buildable;

readonly class Person
{
    use Buildable;

    public function __construct(
        public string   $givenName,
        public string   $familyName,
        public ?Address $address = null,
        #[ArrayOf(Person::class)]
        public array    $parents = [],
    )
    {
        //
    }
}