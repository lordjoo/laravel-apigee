<?php

namespace Lordjoo\Apigee\Monetization;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Monetization
{

    use MakesHttpRequests;

    protected ?PendingRequest $httpClient = null;

    public function __construct(
        protected string $endpoint,
        protected string $username,
        protected string $password,
        protected string $organization
    ) {}

    public function httpClient(): PendingRequest
    {
        return $this->httpClient ??= Http::baseUrl($this->endpoint.'/mnt/organizations/'.$this->organization.'/')
            ->withBasicAuth($this->username, $this->password);
    }


}
