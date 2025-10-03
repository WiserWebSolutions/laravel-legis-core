<?php

namespace LaravelLegis\Core\Contracts\Models;

use Illuminate\Support\Collection;

interface SessionInterface
{
    public function id(): int|string|null;

    public function label(): string;

    public function legislators(): Collection;

    public function measures(): Collection;

    public function chambers(): Collection;
}
