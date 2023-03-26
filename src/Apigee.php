<?php

namespace Lordjoo\Apigee;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Lordjoo\Apigee\API\ApiProxy;
use Lordjoo\Apigee\Services\ApiProductService;
use Lordjoo\Apigee\Services\ApiProxyService;
use Lordjoo\Apigee\Services\DeveloperAppService;
use Lordjoo\Apigee\Services\DeveloperService;
use Lordjoo\Apigee\Support\MakesHttpRequests;

class Apigee
{
    use MakesHttpRequests;

    protected ?PendingRequest $httpClient = null;
    protected string $username;
    protected string $password;
    protected string $endpoint;
    protected string $organization;

    private ApiProxyService $proxyService;
    private ApiProductService $productService;

    public function __construct(string $endpoint, string $username,string $password, string $organization)
    {
        $this->username = $username;
        $this->password = $password;
        $this->endpoint = $endpoint;
        $this->organization = $organization;
        $this->httpClient = $this->getHttpClient();
    }

    public function getHttpClient(): PendingRequest
    {
        return $this->httpClient ??= Http::baseUrl($this->endpoint.'/organizations/'.$this->organization.'/')
            ->withBasicAuth($this->username, $this->password);
    }

    public function apiProxy(): ApiProxyService
    {
        return $this->proxyService ??= new ApiProxyService($this);
    }

    public function apiProduct(): ApiProductService
    {
        return $this->productService ??= new ApiProductService($this);
    }

    public function developer(): DeveloperService
    {
        return $this->developerService ??= new DeveloperService($this);
    }

    public function developerApps(string $developerEmailOrId)
    {
        return new DeveloperAppService($this, $developerEmailOrId);
    }
}
