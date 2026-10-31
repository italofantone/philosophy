<?php

namespace Italofantone\Philosophy;

use Illuminate\Support\Collection;

class Philosophy
{
    public static function quote(): string
    {
        return static::quotes()->random();
    }

    public static function quotes(): Collection
    {
        return collect([
            "Example 1 - Author",
            "Example 2 - Author",
            "Example 3 - Author",
            "Example 4 - Author",
            "Example 5 - Author"
        ]);
    }
}