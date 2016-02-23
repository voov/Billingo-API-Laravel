<?php
/**
 * Copyright (c) 2016, VOOV LLC.
 * All rights reserved.
 * Written by Daniel Fekete
 */

namespace Billingo\API\Laravel;


use Illuminate\Support\Facades\Facade;

class BillingoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'billingo-request';
    }

}