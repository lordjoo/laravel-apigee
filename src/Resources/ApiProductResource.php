<?php

namespace Lordjoo\Apigee\Resources;

class ApiProductResource extends Resource
{
    public string $name;

    public string $displayName;

    public string $approvalType;

    public string $description;

    public array $attributes;

    public array $scopes;

    public array $apiResources;

    public array $environments;

    public array $proxies;

    public string $quota;

    public string $quotaInterval;

    public string $quotaTimeUnit;
}
