<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$browser->clickLink('Login');

$crawler = $browser->submitForm('Go', [
    'username' => 'm-andremiranda@outlook.com',
    'password' => '1234'
], 'GET');

var_dump($crawler->html());