<?php

namespace AR\Darouqe\Laravel\Facades;

use AR\Darouqe\Darouqe as DarouqeService;
use Illuminate\Support\Facades\Facade;

class Darouqe extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DarouqeService::class;
    }
}
