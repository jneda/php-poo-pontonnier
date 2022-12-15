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

require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// utils

function preformatEcho($object) {
  echo '<pre>';
  print_r($object);
  echo '</pre>';
}

function pEcho($string) {
  echo sprintf('<p>%s</p>', $string);
}

// tests

echo '<h1>Bonjour tout le monde ! 🤓</h1>';

$compteCourant = new CompteCourant('Toto Totovitch Totov', 1000, 500);

// var_dump($compteCourant);
// preformatEcho($compteCourant);

$compteCourant->setDecouvert(750);
pEcho($compteCourant->getDecouvert());

$compteCourant->setDecouvert(-500);
pEcho($compteCourant->getDecouvert());

preformatEcho($compteCourant);

$compteCourant->retirer(1750);
pEcho($compteCourant->getSolde());

$compteCourant->retirer(1750);
pEcho($compteCourant->getSolde());

$compteEpargne = new CompteEpargne('Anthony Houlala', 1000, 7.5);
preformatEcho($compteEpargne);

pEcho($compteEpargne->getTauxInteret());
$compteEpargne->setTauxInteret(5);
pEcho($compteEpargne->getTauxInteret());

$compteEpargne->verserInterets();
pEcho($compteEpargne->getSolde());