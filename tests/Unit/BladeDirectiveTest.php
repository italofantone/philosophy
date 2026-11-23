<?php

namespace Italofantone\Philosophy\Tests\Unit;

use Italofantone\Philosophy\Tests\TestCase;

class BladeDirectiveTest extends TestCase
{
    public function test_blade_directive_renders_quote(): void
    {
        $view = $this->blade('@quote');

        $this->assertStringContainsString('-', $view);        
    }
}