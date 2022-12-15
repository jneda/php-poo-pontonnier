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
use App\Banque\Compte as Compte;
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

$compte = new CompteClient("Toto Totovitch", "Totov");

preformatEcho($compte);

$compte = new CompteCourant('Anthony HOULALA', 1000, 20);

preformatEcho($compte);

$compte = new CompteEpargne('Saturnin COLVERT', 1000, 5);

preformatEcho($compte);
