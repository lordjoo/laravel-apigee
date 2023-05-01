<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Entities\Company;

class CompanyService extends Service
{
    /**
     * Get all companies in the organization.
     *
     * @return Collection<Company>
     */
    public function get(): Collection
    {
        $response = $this->client->get('companies', [
            'expand' => 'true',
        ])->json();

        return collect($response['company'])->map(function ($company) {
            return new Company($company);
        });
    }

    /**
     * Get a company by name.
     */
    public function find(string $name): Company
    {
        $response = $this->client->get('companies/'.$name, [
            'expand' => 'true',
        ])->json();

        return new Company($response);
    }

    /**
     * Create a new company.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest
     */
    public function create(array $data): Company
    {
        $response = $this->client->post('companies', $data)->json();

        return new Company($response);
    }

    /**
     * Update a company.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/companies/1/types/CompanyRequest
     */
    public function update(string $name, array $data): Company
    {
        $response = $this->client->put('companies/'.$name, $data)->json();

        return new Company($response);
    }

    /**
     * Delete a company.
     */
    public function delete(string $name): void
    {
        $this->client->delete('companies/'.$name);
    }

    /**
     * Update the status of a company.
     *
     * @return void
     */
    public function updateStatus(string $name, string $string)
    {
        if (! in_array($string, ['active', 'inactive'])) {
            throw new \Exception("Invalid status: {$string}");
        }
        $this->client->post(
            url: 'companies/'.$name.'?action='.$string,
            headers: [
                'Content-Type' => 'application/octet-stream',
            ]
        );
    }
}
