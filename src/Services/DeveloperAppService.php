<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Apigee;
use Lordjoo\Apigee\Resources\CredentialResource;
use Lordjoo\Apigee\Resources\DeveloperAppResource;

class DeveloperAppService extends Service
{
    protected string $developerId;

    public function __construct(Apigee $client, string $developerEmailOrId)
    {
        parent::__construct($client);
        $this->developerId = $developerEmailOrId;
    }

    /**
     * Returns a list of all Developer Apps in the organization.
     */
    public function get(): Collection
    {
        $response = $this->client->get('developers/'.$this->developerId.'/apps', [
            'expand' => 'true',
        ])->json();

        return collect($response['app'])->map(function ($app) {
            return new DeveloperAppResource($app);
        });
    }

    public function find(string $appId): DeveloperAppResource
    {
        $response = $this->client->get('developers/'.$this->developerId.'/apps/'.$appId)->json();

        return new DeveloperAppResource($response);
    }

    public function create(array $data): DeveloperAppResource
    {
        $response = $this->client->post('developers/'.$this->developerId.'/apps', $data)->json();

        return new DeveloperAppResource($response);
    }

    public function update(string $appId, array $data): DeveloperAppResource
    {
        $response = $this->client->put('developers/'.$this->developerId.'/apps/'.$appId, $data)->json();

        return new DeveloperAppResource($response);
    }

    public function createCredential(string $appId, array $data): DeveloperAppResource
    {
        $response = $this->client->post('developers/'.$this->developerId.'/apps/'.$appId.'/keys', $data)->json();

        return $this->find($appId);
    }

    public function deleteCredential(string $appId, string $credentialId): DeveloperAppResource
    {
        $response = $this->client->delete('developers/'.$this->developerId.'/apps/'.$appId.'/keys/'.$credentialId)->json();

        return $this->find($appId);
    }

    public function updateCredential(string $appId, string $credentialId, array $data): DeveloperAppResource
    {
        $response = $this->client->put('developers/'.$this->developerId.'/apps/'.$appId.'/keys/'.$credentialId, $data)->json();

        return $this->find($appId);
    }

    public function getCredential(string $appName, string $consumerKey)
    {
        $response = $this->client->get('developers/'.$this->developerId.'/apps/'.$appName.'/keys/'.$consumerKey)->json();

        return new CredentialResource($response + ['developerId' => $this->developerId, 'appName' => $appName]);
    }
}
