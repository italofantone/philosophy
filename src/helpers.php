<?php

use Italofantone\Philosophy\Philosophy;

if (!function_exists('philosophy')) {
    function philosophy(): Philosophy
    {
        return app(Philosophy::class);
    }
}

if (!function_exists('quote')) {
    function quote(): string
    {
        return philosophy()->quote();
    }
}