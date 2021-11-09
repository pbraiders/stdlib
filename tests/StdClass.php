<?php

declare(strict_types=1);

namespace PbraidersTest\Stdlib;

class StdClass
{
    /**
     * Undocumented variable
     *
     * @var boolean
     */
    protected bool $theProperty = true;

    /**
     * Undocumented function
     *
     * @return boolean
     */
    protected function theMethod(): bool
    {
        return true;
    }
}
