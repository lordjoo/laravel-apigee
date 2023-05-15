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
        $this->setAttributes($data);
    }

    protected function setAttributes(array $data)
    {
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

    public function toArray(): array
    {
        $data = [];
        foreach ($this as $key => $value) {
            if ($value instanceof Entity) {
                $data[$key] = $value->toArray();
                continue;
            }
            $data[$key] = $value;
        }
        return $data;
    }

}
