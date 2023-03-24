<?php

namespace Lordjoo\Apigee;

class Factory
{
    public static function FromConfig(): Apigee
    {
        return new Apigee(
            config('apigee.endpoint'),
            config('apigee.username'),
            config('apigee.password'),
            config('apigee.organization')
        );
    }
}
