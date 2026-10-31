<?php

namespace Italofantone\Philosophy\Tests\Unit;

use Illuminate\Support\Collection;
use Italofantone\Philosophy\Philosophy;
use Italofantone\Philosophy\Tests\TestCase;

class PhilosophyTest extends TestCase
{
    public function test_returns_a_quote(): void
    {
        $quote = Philosophy::quote();

        $this->assertIsString($quote);
    }

    public function test_it_returns_a_collection_of_quotes(): void
    {
        $quotes = Philosophy::quotes();

        $this->assertInstanceOf(Collection::class, $quotes);
    }
}