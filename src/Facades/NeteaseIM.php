<?php namespace Aobo\Neteaseim\Facades;

use Illuminate\Support\Facades\Facade;

class Neteaseim extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'neteaseim';
    }
}
