<?php
require_once __DIR__ . '/vendor/autoload.php';

use dhtmdgkr123\Slack\Apis as SlackApi;
$a = SlackApi\Chat::message('#php', 'dhtmdgkr123');