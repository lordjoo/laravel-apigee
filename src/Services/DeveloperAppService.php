<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Apigee;
use Lordjoo\Apigee\Entities\DeveloperApp;

class DeveloperAppService extends Service
{
    protected string $developerEmail;

    public function __construct(Apigee $client, string $developerEmail)
    {
        parent::__construct($client);
        $this->developerEmail = $developerEmail;
    }

    /**
     * Returns a list of all Developer Apps in the organization.
     *
     * @return Collection<DeveloperApp>
     */
    public function get(): Collection
    {
        $response = $this->client->get('developers/'.$this->developerEmail.'/apps', [
            'expand' => 'true',
        ])->json();

        return collect($response['app'])->map(function ($app) {
            return new DeveloperApp($app);
        });
    }

    /**
     * Creates a new Developer App in the organization.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/developer-apps/1/types/DeveloperAppRequest
     */
    public function create(array $data): DeveloperApp
    {
        $response = $this->client->post('developers/'.$this->developerEmail.'/apps', $data)->json();

        return new DeveloperApp($response);
    }

    /**
     * Updates an existing Developer App in the organization.
     *
     * @param  array  $data refer to https://apidocs.apigee.com/docs/developer-apps/1/types/DeveloperAppRequest
     */
    public function update(string $appName, array $data): DeveloperApp
    {
        $response = $this->client->put('developers/'.$this->developerEmail.'/apps/'.$appName, $data)->json();

        return new DeveloperApp($response);
    }

    /**
     * Deletes an existing Developer App in the organization.
     */
    public function delete(string $appName): void
    {
        $this->client->delete('developers/'.$this->developerEmail.'/apps/'.$appName);
    }

    /**
     * Updates the status of an existing Developer App in the organization.
     *
     * @param  string  $status either 'approve' or 'revoke'
     */
    public function updateStatus(string $appName, string $status): void
    {
        if (! in_array($status, ['approve', 'revoke'])) {
            throw new \InvalidArgumentException('Invalid status provided.');
        }
        $this->client->post(
            url: 'developers/'.$this->developerEmail.'/apps/'.$appName.'/?action='.$status,
            headers: [
                'Content-Type' => 'application/octet-stream',
            ]
        );
    }
}
