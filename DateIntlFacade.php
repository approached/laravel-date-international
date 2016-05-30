<?php

namespace Approached\LaravelDateInternational;

use Illuminate\Support\Facades\Facade;

class DateIntlFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dateintl';
    }
}
