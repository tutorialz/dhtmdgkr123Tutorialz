<?php
namespace dhtmdgkr123\Slack\Contarcts;
interface Http
{
    public static function post(string $apiUrl, array $param) : ? array;
}