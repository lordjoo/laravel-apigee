<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Resources\ApiProductResource;

class ApiProductService extends Service
{
    /**
     * Returns a list of all API products in the organization.
     *
     * @return Collection
     */
    public function get(): Collection
    {
        $response = $this->client->get('apiproducts', [
                'expand' => 'true',
            ])->json();
        return collect($response['apiProduct'])->map(function ($product) {
            return new ApiProductResource($product);
        });
    }

    public function find(string $name): ApiProductResource
    {
        $response = $this->client->get('apiproducts/'.$name, [
                'expand' => 'true',
            ])->json();
        return new ApiProductResource($response);
    }

    public function create(array $data): ApiProductResource
    {
        $response = $this->client->post('apiproducts', $data)->json();
        return new ApiProductResource($response);
    }

    public function update(string $name, array $data): ApiProductResource
    {
        $response = $this->client->put('apiproducts/'.$name, $data)->json();
        return new ApiProductResource($response);
    }

    public function delete(string $name): void
    {
        $this->client->delete('apiproducts/'.$name);
    }

}
