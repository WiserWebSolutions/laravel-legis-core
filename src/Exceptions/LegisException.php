<?php

namespace LaravelLegis\Core\Exceptions;

use RuntimeException;

class LegisException extends RuntimeException
{
    public static function requestError(string $message): self
    {
        return new self("Request error: {$message}");
    }

    public static function apiError(string $message): self
    {
        return new self("API error: {$message}");
    }
}
