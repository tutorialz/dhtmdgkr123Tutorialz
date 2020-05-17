<?php
namespace dhtmdgkr123\Slack\Methods;
use \Dotenv\Dotenv;
class Env
{
    public static function load() : void
    {
        $path = realpath(realpath(__DIR__ . '/../../'));
        (Dotenv::createImmutable( $path ))->load();
    }
}