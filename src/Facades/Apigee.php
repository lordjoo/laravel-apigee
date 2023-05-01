<?php

namespace Lordjoo\Apigee\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lordjoo\Apigee\Apigee
 *
 * @method static \Lordjoo\Apigee\Services\ApiProxyService apiProxy()
 * @method static \Lordjoo\Apigee\Services\ApiProductService apiProduct()
 * @method static \Lordjoo\Apigee\Services\DeveloperService developer()
 * @method static \Lordjoo\Apigee\Services\DeveloperAppService developerApp(string $developerEmail)
 * @method static \Lordjoo\Apigee\Services\CompanyService company()
 */
class Apigee extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apigee';
    }
}
