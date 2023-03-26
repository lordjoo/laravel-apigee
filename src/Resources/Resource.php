<?php

namespace Lordjoo\Apigee\Resources;

use Carbon\Carbon;

abstract class Resource implements ResourceInterface
{
    public function __construct(array $data)
    {
        $this->setAttributes($data);
    }

    protected function setAttributes(array $attributes): void
    {
        foreach ($attributes as $key => $value) {
            if (is_numeric($value) && $value > 1000000000) {
                $value = Carbon::createFromTimestamp($value / 1000);
            }
            $this->{$key} = $value;
        }
    }

    // serialize the object to an array
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
