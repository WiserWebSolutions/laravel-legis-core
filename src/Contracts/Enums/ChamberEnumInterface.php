<?php

namespace LaravelLegis\Core\Contracts\Enums;

interface ChamberEnumInterface
{
    /**
     * Get the ID of the chamber.
     */
    public function id(): int;

    /**
     * Get the label of the chamber.
     */
    public function label(): string;

    /**
     * Get the type of the chamber.
     */
    public function type(): string;

    /**
     * Get the abbreviation of the chamber.
     */
    public function abbr(): string;
}
