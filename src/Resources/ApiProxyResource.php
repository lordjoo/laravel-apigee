<?php

namespace Lordjoo\Apigee\Resources;

class ApiProxyResource extends Resource
{
    public string $name;

    public array $metaData;

    public function __get($name)
    {
        if (array_key_exists($name, $this->metadata)) {
            return $this->metadata[$name];
        }
        throw new \Exception("Property $name does not exist");
    }
}
