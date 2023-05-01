<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Entities\ApiProduct;

class ApiProductService extends Service
{
    /**
     * Returns a list of all API products in the organization.
     *
     * @return Collection<ApiProduct>
     */
    public function get(): Collection
    {
        $response = $this->client->get('apiproducts', [
            'expand' => 'true',
        ])->json();

        return collect($response['apiProduct'])->map(function ($product) {
            return new ApiProduct($product);
        });
    }

    /**
     * Find an API product by name.
     */
    public function find(string $name): ApiProduct
    {
        $response = $this->client->get('apiproducts/'.$name, [
            'expand' => 'true',
        ])->json();

        return new ApiProduct($response);
    }

    /**
     * Create a new API product.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/api-products/1/types/APIProductRequest
     */
    public function create(array $data): ApiProduct
    {
        $response = $this->client->post('apiproducts', $data)->json();

        return new ApiProduct($response);
    }

    /**
     * Update an existing API product.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/api-products/1/types/APIProductRequest
     */
    public function update(string $name, array $data): ApiProduct
    {
        $response = $this->client->put('apiproducts/'.$name, $data)->json();

        return new ApiProduct($response);
    }

    /**
     * Delete an API product.
     */
    public function delete(string $name): void
    {
        $this->client->delete('apiproducts/'.$name);
    }
}
