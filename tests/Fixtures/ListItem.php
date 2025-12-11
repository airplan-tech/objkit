<?php

namespace Tests\Fixtures;

use Hpkns\Objkit\Buildable;

readonly class ListItem
{
    use Buildable;

    public function __construct(
        public ?self $previous,
        public mixed $value,
    )
    {
        //
    }
}