<?php

namespace Lordjoo\Apigee\Resources;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Lordjoo\Apigee\Facades\Apigee;

class DeveloperAppResource extends Resource
{
    public string $appId;
    public string $name;
    public string $status;
    public string $accessType;
    public string $appFamily;
    public string $callbackUrl;
    public array $apiProducts;
    public array $attributes;
    public $credentials;
    public string $developerId;
    public string $createdBy;
    public string|Carbon $createdAt;
    public string $lastModifiedBy;
    public string|Carbon $lastModifiedAt;
    public array $scopes;

    protected function setAttributes(array $attributes): void
    {
        parent::setAttributes($attributes);
        $this->credentials = collect($this->credentials)->map(function ($credential) {
            return new CredentialResource($credential + ['developerId' => $this->developerId, "appName" => $this->name]);
        });
    }

    public function update(array $data): DeveloperAppResource
    {
        return Apigee::developerApps($this->developerId)->update($this->name, $data);
    }

}
