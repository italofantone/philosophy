<?php

namespace Italofantone\Philosophy;

use Illuminate\Support\Collection;
use InvalidArgumentException;

class Philosophy
{
    public function quote(?string $lang = null): string
    {
        $quotes = $this->quotes($lang);

        if ($quotes->isEmpty()) {
            throw new InvalidArgumentException("No quotes are available for language [{$lang}].");
        }

        return $quotes->random();
    }

    public function quotes(?string $lang = null): Collection
    {
        $lang = $lang ?? 'en';
        $path = __DIR__."/../lang/{$lang}.php";

        if (!in_array($lang, ['en', 'es'], true) || !is_file($path)) {
            throw new InvalidArgumentException("Unsupported language [{$lang}]. Available languages: en, es.");
        }

        return new Collection(require $path);
    }
}
