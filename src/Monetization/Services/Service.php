<?php

namespace Lordjoo\Apigee\Monetization\Services;

use Lordjoo\Apigee\Exceptions\NotFoundException;
use Lordjoo\Apigee\Monetization\Monetization;

abstract class Service
{
    protected Monetization $client;

    public function __construct(Monetization $client)
    {
        $this->client = $client;
    }

}
