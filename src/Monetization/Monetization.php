<?php

namespace Lordjoo\Apigee\Monetization;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Lordjoo\Apigee\Monetization\Services\ApiPackageService;
use Lordjoo\Apigee\Monetization\Services\DeveloperService;
use Lordjoo\Apigee\Monetization\Services\OrganizationService;
use Lordjoo\Apigee\Support\MakesHttpRequests;

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
        return $this->httpClient ??= Http::baseUrl($this->endpoint.'/mint/organizations/'.$this->organization.'/')
            ->withBasicAuth($this->username, $this->password);
    }

    public function organization(): OrganizationService
    {
        return new OrganizationService($this);
    }

    public function apiPackage(): ApiPackageService
    {
        return new ApiPackageService($this);
    }

    public function developer(): DeveloperService
    {
        return new DeveloperService($this);
    }

}
