<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$text = $crawler->filterXPath('//h2')->text();

var_dump($text);