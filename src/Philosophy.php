<?php

namespace Italofantone\Philosophy;

use Illuminate\Support\Collection;

class Philosophy
{
    public static function quote(?string $lang = null): string
    {
        return static::quotes($lang)->random();
    }

    public static function quotes(?string $lang = null): Collection
    {
        $lang = $lang ?? 'en';

        return new Collection(
            require __DIR__ . "/../lang/{$lang}.php"
        );
    }
}