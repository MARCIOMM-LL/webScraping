<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$browser->setServerParameter('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)');

$browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

print_r($browser->getRequest());

$browser->setServerParameter('HTTP_USER_AGENT', 'Dalvik/2.1.0 (Linux; U; Android 5.1.1; AFTT Build/LVY48F) CTV');

$browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

print_r($browser->getRequest());