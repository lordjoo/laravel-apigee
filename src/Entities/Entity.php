<?php

namespace Lordjoo\Apigee\Entities;

use Carbon\Carbon;
use Lordjoo\Apigee\Apigee;

abstract class Entity
{

    protected Apigee $client;

    public function __construct(array $data)
    {
        $this->client = app(Apigee::class);
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                if ($key === 'attributes') {
                    $this->attributes = [];
                    foreach ($value as $attribute) {
                        $this->attributes[] = new Attribute($attribute);
                    }
                    continue;
                }
                if (is_numeric($value) && $value > 1000000000) {
                    $value = Carbon::createFromTimestamp($value / 1000);
                }

                $this->{$key} = $value;
            }
        }
    }
}
