<?php

namespace LaravelLegis\Core\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelLegis\Core\Manager;

/**
 * @see \LaravelLegis\Core\Manager
 */
class LegisCore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Manager::class;
    }
}
