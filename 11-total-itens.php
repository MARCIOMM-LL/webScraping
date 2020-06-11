<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$totalPaginas = $crawler->filter('header')->text();

//A função pre_replace() vai substituir todos os
//caracteres por uma string vazia através da expressão
//regular D maiúsculo na variável $total  
$totalPaginas = preg_replace('/\D/', '', $totalPaginas);

$totalPaginas = ceil($totalPaginas);

print_r($totalPaginas);