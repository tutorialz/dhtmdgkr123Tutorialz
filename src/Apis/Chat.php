<?php
namespace dhtmdgkr123\Slack\Apis;
use dhtmdgkr123\Slack\Methods\Env;
use dhtmdgkr123\Slack\Methods\Request;
class Chat
{
    private static $slackApiUri = 'https://hooks.slack.com/services/';
    private static function getToken() : string
    {
        Env::load();
        if (!($token = getenv('API_TOKEN'))) {
            throw new \InvalidArgumentException('Add API TOKEN');
        }
        return $token;
    }
    public static function message(string $channel, string $message)
    {
        return Request::post(self::$slackApiUri . self::getToken(), [
            'channel' => $channel,
            'text' => $message,
            'username' => 'dhtmdgkr123'
        ]);
    }    
}
