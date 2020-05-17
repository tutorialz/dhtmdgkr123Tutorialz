<?php
namespace dhtmdgkr123\Slack\Methods;

use GuzzleHttp\Client;
use dhtmdgkr123\Slack\Contarcts\Http;
use Psr\Http\Message\ResponseInterface as Response;
use GuzzleHttp\Exception\BadResponseException as BadRequest;

class Request implements Http
{

    public static function post(string $apiUrl, array $param) : array
    {
        return (new Client())->postAsync($apiUrl, [
            'body' => json_encode($param),
        ])->then(
            function(Response $response) {
                return [
                    'ok' => true,
                    'body' => json_decode($response->getBody()->getContents()),
                ];
            },
            function(BadRequest $err) {
                return [
                    'ok' => false,
                    'body' => $err->getResponse()->getBody()->getContents()
                ];
            }
        )->wait();
    }
}