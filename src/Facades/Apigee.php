<?php

namespace Lordjoo\Apigee\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lordjoo\Apigee\Apigee
 *
 * @method static \Lordjoo\Apigee\Services\ApiProxyService apiProxy()
 * @method static \Lordjoo\Apigee\Services\ApiProductService apiProduct()
 * @method static \Lordjoo\Apigee\Services\DeveloperService developer()
 * @method static \Lordjoo\Apigee\Services\DeveloperAppService developerApps(string $developerEmailOrId)
 * @method static array listEnvironments()
 */
class Apigee extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apigee';
    }
}
