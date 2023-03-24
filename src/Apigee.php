<?php

namespace Lordjoo\Apigee;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Lordjoo\Apigee\API\ApiProxy;
use Lordjoo\Apigee\Support\MakesHttpRequests;

class Apigee
{
    use MakesHttpRequests;

    protected ?PendingRequest $httpClient = null;
    protected string $username;
    protected string $password;
    protected string $endpoint;
    protected string $organization;

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
        return $this->httpClient ??= Http::baseUrl($this->endpoint.'/v1/organizations/'.$this->organization.'/')
            ->withBasicAuth($this->username, $this->password);
    }

}
