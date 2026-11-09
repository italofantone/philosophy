<?php

namespace Italofantone\Philosophy\Tests;

use Italofantone\Philosophy\Providers\PhilosophyServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PhilosophyServiceProvider::class,
        ];
    }
}