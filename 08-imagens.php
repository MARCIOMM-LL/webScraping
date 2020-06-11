<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$images = $nomes = $crawler->filter('article .img-thumbnail')->images();

if(!is_dir('images')){
    mkdir('images');
};

foreach ($images as $image) {
    $url = $image->getUri();
    $name = basename($url);
    // O primeiro parâmetro é onde iremos baixar,
    // e o segundo parâmetro é onde iremos baixar
    file_put_contents('images/' . $name, $url);
    // print_r($url);
}