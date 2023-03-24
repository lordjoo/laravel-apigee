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

    private function handleErrorResponse(Response $response): void
    {
        $this->lastResponse = $response;
        app(ErrorHandlerInterface::class)->handle($response);
    }

}
