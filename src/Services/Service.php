<?php

namespace Lordjoo\Apigee\Services;

use Lordjoo\Apigee\Apigee;

abstract class Service implements ServiceInterface
{
    protected Apigee $client;

    public function __construct(Apigee $client)
    {
        $this->client = $client;
    }
}
