<?php

namespace Soiposervices\Reica;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soiposervices\Reica\Skeleton\SkeletonClass
 */
class ReicaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'reica';
    }
}
