<?php

require 'vendor/autoload.php';

$token = getenv('QIITA_ACCESS_TOKEN');

$client = new \GuzzleHttp\Client(
    [
        'base_uri' => 'https://qiita.com',
        'timeout' => 2.0,
    ]
);

$headers = [
    'Content-Type' => 'application/json;charset=utf-8',
    'Authorization' => 'Bearer '.$token,
];

$res = $client->request(
    'GET', '/api/v2/authenticated_user', [
        'headers' => $headers
    ]
);

echo $res->getStatusCode()."\n";
echo $res->getHeaderLine('content-type')."\n";
echo $res->getBody()."\n";
