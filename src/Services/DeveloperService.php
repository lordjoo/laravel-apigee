<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Resources\DeveloperResource;

class DeveloperService extends Service
{
    /**
     * Returns a list of all developers in the organization.
     */
    public function get(): Collection
    {
        $response = $this->client->get('developers', [
            'expand' => 'true',
            'includeCompany' => 'true',
        ])->json();

        return collect($response['developer'])->map(function ($developer) {
            return new DeveloperResource($developer);
        });
    }

    /**
     * Creates a new developer in the organization.
     */
    public function create(array $data): DeveloperResource
    {
        $response = $this->client->post('developers', $data)->json();

        return new DeveloperResource($response);
    }

    /**
     * Updates an existing developer in the organization.
     */
    public function update(string $developerId, array $data): DeveloperResource
    {
        $response = $this->client->put("developers/{$developerId}", $data)->json();

        return new DeveloperResource($response);
    }

    /**
     * Deletes an existing developer in the organization.
     */
    public function delete(string $developerId): void
    {
        $this->client->delete("developers/{$developerId}");
    }

    /**
     * Finds an existing developer in the organization by email or developerId.
     */
    public function getByIdOrEmail(string $developerIdOrEmail): DeveloperResource
    {
        $response = $this->client->get("developers/{$developerIdOrEmail}")->json();

        return new DeveloperResource($response);
    }
}
