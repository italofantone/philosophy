<?php

namespace Italofantone\Philosophy\Tests\Unit;

use Illuminate\Support\Collection;
use InvalidArgumentException;
use Italofantone\Philosophy\Philosophy;
use Italofantone\Philosophy\Tests\TestCase;

class PhilosophyTest extends TestCase
{
    public function test_returns_a_quote(): void
    {
        $quote = (new Philosophy())->quote();

        $this->assertIsString($quote);
    }

    public function test_it_returns_a_collection_of_quotes(): void
    {
        $quotes = (new Philosophy())->quotes();

        $this->assertInstanceOf(Collection::class, $quotes);
    }

    public function test_it_rejects_unsupported_languages(): void
    {
        $this->expectException(InvalidArgumentException::class);

        (new Philosophy())->quotes('xx');
    }

    public function test_it_returns_quotes_for_spanish(): void
    {
        $philosophy = new Philosophy();
        $quote = $philosophy->quote('es');

        $this->assertTrue($philosophy->quotes('es')->contains($quote));
    }
}
