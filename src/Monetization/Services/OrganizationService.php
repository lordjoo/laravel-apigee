<?php

namespace Lordjoo\Apigee\Monetization\Services;

use Lordjoo\Apigee\Monetization\Entities\Organization;

class OrganizationService extends Service
{

    /**
     * Gets the organization profile
     *
     * @return Organization
     */
    public function getInfo(): Organization
    {
        $response = $this->client->get('')->json();
        return new Organization($response);
    }

}
