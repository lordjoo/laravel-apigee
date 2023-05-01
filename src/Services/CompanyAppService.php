<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Apigee;
use Lordjoo\Apigee\Entities\CompanyApp;

class CompanyAppService extends Service
{
    protected string $companyName;

    public function __construct(Apigee $client, string $companyName)
    {
        parent::__construct($client);
        $this->companyName = $companyName;
    }

    /**
     * Returns a list of all Company Apps in the organization.
     *
     * @return Collection<CompanyApp>
     */
    public function get(): Collection
    {
        $response = $this->client->get('companies/'.$this->companyName.'/apps', [
            'expand' => 'true',
        ])->json();

        return collect($response['app'])->map(function ($app) {
            return new CompanyApp($app);
        });
    }

    /**
     * Create a new Company App
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/company-apps/1/types/CompanyAppRequest
     */
    public function create(array $data): CompanyApp
    {
        $response = $this->client->post('companies/'.$this->companyName.'/apps', $data)->json();

        return new CompanyApp($response);
    }

    /**
     * Update a Company App
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/company-apps/1/types/CompanyAppRequest
     */
    public function update(string $appName, array $data): CompanyApp
    {
        $response = $this->client->put('companies/'.$this->companyName.'/apps/'.$appName, $data)->json();

        return new CompanyApp($response);
    }

    /**
     * Delete a Company App
     */
    public function delete(string $appName): void
    {
        $this->client->delete('companies/'.$this->companyName.'/apps/'.$appName);
    }

    /**
     * Update the status of a Company App
     *
     * @param  string  $status either "approve" or "revoke"
     */
    public function updateStatus(string $appName, string $status): void
    {
        if (! in_array($status, ['approve', 'revoke'])) {
            throw new \InvalidArgumentException('Status must be either "approved" or "revoked"');
        }
        $this->client->post(
            url: 'companies/'.$this->companyName.'/apps/'.$appName.'?action='.$status,
            headers: [
                'Content-Type' => 'application/octet-stream',
            ]
        );
    }
}
