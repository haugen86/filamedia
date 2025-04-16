<?php

namespace Haugen86\Filamedia\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Haugen86\Filamedia\Filamedia
 */
class Filamedia extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Haugen86\Filamedia\Filamedia::class;
    }
}
