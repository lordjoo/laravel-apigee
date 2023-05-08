<?php

namespace Lordjoo\Apigee\Entities;

use Lordjoo\Apigee\Entities\Properties\AttributePropertyAware;

class ApiProduct extends Entity
{
    use AttributePropertyAware;

    public string $name;

    public string $displayName;

    public string $approvalType;

    public string $description;

    public array $scopes;

    public array $apiResources;

    public array $environments;

    public array $proxies;

    public string $quota;

    public string $quotaInterval;

    public string $quotaTimeUnit;


    /**
     * Update the ApiProduct
     * @param array $data
     * @return self
     */
    public function update(array $data): self
    {
        return $this->client->apiProduct()->update($this->name, $data);
    }

    /**
     * Delete the ApiProduct
     * @return void
     */
    public function delete(): void
    {
        $this->client->apiProduct()->delete($this->name);
    }

}
