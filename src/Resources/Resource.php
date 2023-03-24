<?php

namespace Lordjoo\Apigee\Resources;

abstract class Resource
{
    public function __construct(array $data)
    {
        $this->setAttributes($data);
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->metadata)) {
            return $this->metadata[$name];
        }
        throw new \Exception("Property $name does not exist");
    }

    protected function setAttributes(array $attributes): void
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
