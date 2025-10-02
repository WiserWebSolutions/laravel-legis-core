<?php

namespace LaravelLegis\Core;

use LaravelLegis\Core\Contracts\DriverInterface;

class Manager
{
    protected array $drivers = [];

    public function extend(string $state, callable $resolver): void
    {
        $this->drivers[strtoupper($state)] = $resolver;
    }

    public function driver(string $state): DriverInterface
    {
        $state = strtoupper($state);

        if (!isset($this->drivers[$state])) {
            throw new \Exception("No legislation driver found for state: $state");
        }

        return call_user_func($this->drivers[$state]);
    }
}
