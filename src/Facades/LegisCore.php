<?php

namespace WiserWebSolutions\LaravelLegiscan\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelLegis\Core\Manager;

/**
 * @see \LaravelLegis\Core\Manager
 */
class LegisCCore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Manager::class;
    }
}
