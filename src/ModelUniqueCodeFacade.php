<?php

namespace Helmab\ModelUniqueCode;

use Illuminate\Support\Facades\Facade;

class ModelUniqueCodeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'model-unique-code';
    }
}
