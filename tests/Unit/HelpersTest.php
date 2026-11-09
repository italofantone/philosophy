<?php

namespace Italofantone\Philosophy\Tests\Unit;

use Italofantone\Philosophy\Philosophy;
use Italofantone\Philosophy\Tests\TestCase;

class HelpersTest extends TestCase
{
    public function test_returns_philosophy_instance(): void
    {
        $this->assertInstanceOf(Philosophy::class, philosophy());
    }

    public function test_philosophy_returns_quote(): void
    {
        $this->assertIsString(philosophy()->quote());
    }

    public function test_quote_returns_a_string(): void
    {
        $this->assertIsString(quote());
    }
}