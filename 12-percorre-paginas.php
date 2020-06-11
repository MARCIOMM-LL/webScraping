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

//A função ceil() usada para arredondar um número para 
//o número inteiro maior mais próximo
$totalPaginas = ceil($totalPaginas/10);

//Página 1 
$modelos = $crawler->filter('article .title')->each(function($node){
    return $node->text();
});

//Iniciando o loop a partir da página 2 
for($i = 2; $i <= $totalPaginas; $i++){
    $crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/' . $i);

    //Adicionando o nome todos os celulares da página
    //A função array_merge() faz a união de 2 arrays   
    $modelos = array_merge($modelos, $crawler->filter('article .title')->each(function($node){
        return $node->text();
    }));
}

print_r($modelos);
