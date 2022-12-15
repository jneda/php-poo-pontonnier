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

$client = new CompteClient("Totov", "Toto Totovitch", '666666');

preformatEcho($client);

$client = new CompteClient("HOULALA", "Anthony", '10241024');
$compte = new CompteCourant($client, 1000, 20);

preformatEcho($compte);

$client->setPrenom('Antoinette');

preformatEcho($compte);

$client = new CompteClient("COLVERT", "Saturnin", '33333333');
$compte = new CompteEpargne($client, 1000, 5);

preformatEcho($compte);
