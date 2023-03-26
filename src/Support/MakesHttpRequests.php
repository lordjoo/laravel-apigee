<?php

namespace Lordjoo\Apigee\Support;

use Lordjoo\Apigee\Apigee;
use Lordjoo\Apigee\Exceptions\ErrorHandlerInterface;
use Illuminate\Http\Client\Response;

/**
 * @mixin Apigee
 */
trait MakesHttpRequests
{
    protected Response $lastResponse;

    public function get(string $url, array $query = [])
    {
        $response = $this->getHttpClient()->get($url, $query);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }
        return $response;
    }

    public function post(string $url, array $data = [])
    {
        $response = $this->getHttpClient()->post($url, $data);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }
        return $response;
    }

    public function put(string $url, array $data = [])
    {
        $response = $this->getHttpClient()->put($url, $data);
        if ($response->failed()) {
            $this->handleErrorResponse($response);
        }
        return $response;
    }

    public function delete(string $url)
    {
        $response = $this->getHttpClient()->delete($url);
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
