<?php

namespace Lordjoo\Apigee\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lordjoo\Apigee\Apigee
 *
 * @method static \Lordjoo\Apigee\API\ApiProxy apiProxy()
 */
class Apigee extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "apigee";
    }

}
