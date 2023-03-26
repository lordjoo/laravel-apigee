<?php

namespace Lordjoo\Apigee\Resources;

use Carbon\Carbon;
use Lordjoo\Apigee\Facades\Apigee;

class CredentialResource extends Resource
{
    protected string $developerId;

    protected string $appName;

    public string $consumerKey;

    public string $consumerSecret;

    public Carbon|int $expiresAt;

    public Carbon $issuedAt;

    public string $status;

    public array $apiProducts;

    public array $attributes;

    public array $scopes;

    public function update(array $data): self
    {
        $response = Apigee::developerApps($this->developerId)
            ->updateCredential($this->appName, $this->consumerKey, $data);

        return Apigee::developerApps($this->developerId)
            ->getCredential($this->appName, $this->consumerKey);
    }
}
