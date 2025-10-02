<?php

namespace LaravelLegis\Core\Contracts;

use Illuminate\Support\Collection;

interface DriverInterface
{
    /**
     * Get the name of the driver.
     */
    public function name(): string;

    /**
     * Get the sessions managed by the driver.
     */
    public function sessions(): Collection;

    /**
     * Get the legislators managed by the driver.
     */
    public function legislators(): Collection;

    /**
     * Get the measures managed by the driver.
     */
    public function measures(): Collection;
}
