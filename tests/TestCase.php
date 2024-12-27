<?php

namespace Soiposervices\Reica\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Soiposervices\Reica\ReicaServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ReicaServiceProvider::class,
        ];
    }
}