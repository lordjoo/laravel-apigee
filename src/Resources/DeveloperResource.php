<?php

namespace Lordjoo\Apigee\Resources;

use Carbon\Carbon;
use Lordjoo\Apigee\Facades\Apigee;

class DeveloperResource extends Resource
{
    public string $firstName;

    public string $lastName;

    public string $userName;

    public string $email;

    public string $status;

    public array $attributes;

    public array $apps;

    public array $companies;

    public string $developerId;

    public string $organizationName;

    public string|Carbon $createdAt;

    public string|Carbon $lastModifiedAt;

    public string $createdBy;

    public string $lastModifiedBy;

    public function apps()
    {
        return Apigee::developerApps($this->developerId);
    }
}
