<?php

namespace Lordjoo\Apigee\Services;

use Illuminate\Support\Collection;
use Lordjoo\Apigee\Entities\Developer;

class DeveloperService extends Service
{

    /**
     * Returns a list of all developers in the organization.
     * @return Collection<Developer>
     */
    public function get(): Collection
    {
        $response = $this->client->get('developers', [
            'expand' => 'true',
            'includeCompany' => 'true',
        ])->json();

        return collect($response['developer'])->map(function ($developer) {
            return new Developer($developer);
        });
    }


    /**
     * Finds an existing developer in the organization by email.
     * @param string $email
     * @return Developer
     */
    public function find(string $email): Developer
    {
        $response = $this->client->get('developers/'.$email)->json();
        return new Developer($response);
    }

    /**
     * Creates a new developer in the organization.
     * @param array $data refer to https://apidocs.apigee.com/docs/developers/1/types/DeveloperRequest
     * @return Developer
     */
    public function create(array $data): Developer
    {
        $response = $this->client->post('developers', $data)->json();
        return new Developer($response);
    }


    /**
     * Updates an existing developer in the organization.
     * @param string $email
     * @param array $data refer to https://apidocs.apigee.com/docs/developers/1/types/DeveloperRequest
     * @return Developer
     */
    public function update(string $email, array $data): Developer
    {
        $response = $this->client->put("developers/{$email}", $data)->json();
        return new Developer($response);
    }

    /**
     * Deletes an existing developer in the organization.
     * @param string $email
     */
    public function delete(string $email): void
    {
        $this->client->delete("developers/{$email}");
    }


    /**
     * Changes the status of an existing developer in the organization.
     * @param string $email
     * @param string $status either 'active' or 'inactive'
     * @return void
     */
    public function updateStatus(string $email, string $status): void
    {
        if (!in_array($status, ['active', 'inactive'])) {
            throw new \InvalidArgumentException("Invalid status");
        }
        $this->client->post("developers/{$email}?action={$status}");
    }

}
