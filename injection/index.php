<style>
  body {
    color: #eee;
    background: #111;
    font-family: sans-serif;
    line-height: 1.5;
    padding-left: 0.5rem;
  }
</style>

<?php

use App\Autoloader;
use App\Banque\{ CompteCourant, CompteEpargne};
use App\Client\Compte as CompteClient;

require_once 'classes/Autoloader.php';

Autoloader::register();

// utils

function preformatEcho($object) {
  echo '<pre>';
  var_dump($object);
  echo '</pre>';
}

function pEcho($string) {
  echo sprintf('<p>%s</p>', $string);
}

// tests

echo '<h1>Bonjour tout le monde ! 👻</h1>';

$client = new CompteClient("Toto Totovitch", "Totov", '666666');

preformatEcho($client);

$client = new CompteClient("Anthony", "HOULALA", '10241024');
$compte = new CompteCourant($client, 1000, 20);

preformatEcho($compte);

$client = new CompteClient("Saturnin", "COLVERT", '33333333');
$compte = new CompteEpargne($client, 1000, 5);

preformatEcho($compte);
