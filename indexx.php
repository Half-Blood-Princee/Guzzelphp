<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client();//create http client
$res = $client->request('GET', 'https://stackoverflow.com/questions/40216761/the-localhost-page-isn-t-working-localhost-is-currently-unable-to-handle-this-re', [
    'auth' => ['user', 'pass']
]);

echo $res->getHeader('content-type')[0];
echo $res->getBody();
