<?php

namespace Lordjoo\Apigee\Monetization\Entities;

class ApiProduct extends Entity
{
    public string $id;
    public string $name;
    public string $displayName;
    public string $description;
    public string $status;
    public string $transactionSuccessCriteria;
    public Organization $organization;
}
