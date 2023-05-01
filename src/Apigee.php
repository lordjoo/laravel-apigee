<?php

namespace Lordjoo\Apigee;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Lordjoo\Apigee\Support\MakesHttpRequests;

class Apigee
{
    use MakesHttpRequests;

    protected ?PendingRequest $httpClient = null;
    protected string $username;
    protected string $password;
    protected string $endpoint;
    protected string $organization;
    protected bool $monetization = false;

    public function __construct(string $endpoint, string $username, string $password, string $organization)
    {
        $this->username = $username;
        $this->password = $password;
        $this->endpoint = $endpoint;
        $this->organization = $organization;
        $this->httpClient = $this->httpClient();
    }

    public function httpClient(): PendingRequest
    {
        return $this->httpClient ??= Http::baseUrl($this->endpoint.'/organizations/'.$this->organization.'/')
            ->withBasicAuth($this->username, $this->password);
    }

    public function apiProxy(): Services\ApiProxyService
    {
        return new Services\ApiProxyService($this);
    }

    public function apiProduct(): Services\ApiProductService
    {
        return new Services\ApiProductService($this);
    }

    public function developer(): Services\DeveloperService
    {
        return new Services\DeveloperService($this);
    }

    public function company(): Services\CompanyService
    {
        return new Services\CompanyService($this);
    }

    public function developerApp(string $developerEmail): Services\DeveloperAppService
    {
        return new Services\DeveloperAppService($this, $developerEmail);
    }

    public function companyApp(string $companyName): Services\CompanyAppService
    {
        return new Services\CompanyAppService($this, $companyName);
    }

    public function monetization(): Monetization\Monetization
    {
        return new Monetization\Monetization($this->endpoint, $this->username, $this->password, $this->organization);
    }
}
