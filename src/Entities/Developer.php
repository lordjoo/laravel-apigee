<?php

namespace Lordjoo\Apigee\Entities;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Lordjoo\Apigee\Entities\Properties\AttributePropertyAware;

class Developer extends Entity
{
    use AttributePropertyAware;

    public string $firstName;
    public string $lastName;
    public string $userName;

    public string $email;
    public string $status;

    public array $companies;

    public string $developerId;
    public string $organizationName;

    public string $createdBy;
    public Carbon|string $createdAt;

    public string $lastModifiedBy;
    public Carbon|string $lastModifiedAt;


    /** Quick Actions  */

    /**
     * @return Collection<DeveloperApp>
     */
    public function getApps(): Collection
    {
        return $this->client->developerApp($this->email)->get();
    }

    /**
     * Update developer status to 'active'
     * @return self
     */
    public function activate(): self
    {
        $this->status = "active";
        $this->client->developer()->updateStatus($this->email, 'active');
        return $this;
    }

    /**
     * Update developer status to 'inactive'
     * @return self
     */
    public function deactivate(): self
    {
        $this->status = "inactive";
        $this->client->developer()->updateStatus($this->email, 'inactive');
        return $this;
    }

    /**
     * Delete developer
     * @return void
     */
    public function delete(): void
    {
        $this->client->developer()->delete($this->email);
    }


}
