<?php

use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$client = HttpClient::create();

$request = $client->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/about/');

$status = $request->getStatusCode();

// var_dump($status);

$content = $request->getContent();

var_dump($content);
