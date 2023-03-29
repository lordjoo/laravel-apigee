<?php

namespace Lordjoo\Apigee\Support;

use Illuminate\Http\Client\Response;
use Lordjoo\Apigee\Apigee;
use Lordjoo\Apigee\Exceptions\ErrorHandlerInterface;

/**
 * @mixin Apigee
 */
trait MakesHttpRequests
{
    protected Response $lastResponse;

    public function get(string $url, array $query = [])
    {
        $response = $this->httpClient()->get($url, $query);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }

        return $response;
    }

    public function post(string $url, array $data = [])
    {
        $response = $this->httpClient()->post($url, $data);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }

        return $response;
    }

    public function put(string $url, array $data = [])
    {
        $response = $this->httpClient()->put($url, $data);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }

        return $response;
    }

    public function delete(string $url)
    {
        $response = $this->httpClient()->delete($url);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }

        return $response;
    }

    private function handleErrorResponse(Response $response): void
    {
        $this->lastResponse = $response;
        app(ErrorHandlerInterface::class)->handle($response);
    }
}
