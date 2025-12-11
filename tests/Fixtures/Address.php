<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Buildable;

readonly class Address
{
    use Buildable;

    public function __construct(
        public array       $streetAddress,
        public ?string     $postalCode = null,
        public ?string     $city = null,
        public ?Country    $country = null,
        public AddressType $type = AddressType::Business
    )
    {
        //
    }
}