<?php

namespace Lordjoo\Apigee\Monetization\Entities;

class Currency extends Entity
{

    public string $id;
    public string $name;
    public string $displayName;
    public string $description;
    public string $status;
    public ?float $minimumTopupAmount;
    public bool $virtualCurrency;

}
