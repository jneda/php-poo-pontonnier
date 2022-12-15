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

/**
 * Instancie un nouveau Compte et l'ajoute à un array fourni en paramètre
 *
 * @param array $comptes
 * @param string $titulaire
 * @param integer $solde
 * @return void
 */
function addCompte(
  array &$comptes,
  string $titulaire = null,
  float $solde = null
): void {
  array_push($comptes, new Compte($titulaire, $solde));
}

$comptes = [];

addCompte($comptes, 'Toto Totovitch Totov', 1000 * 1000);
addCompte($comptes, 'Anthony Houlala', -1000 * 1000 * 1000);
addCompte($comptes);

// var_dump($comptes);

/* foreach ($comptes as $compte) {
  $compte->voirSolde();
  echo '<br/>';
} */

$compteToto = $comptes[0];

$compteToto->deposer(500);
$compteToto->voirSolde();
echo '<br/>';

$compteToto->retirer(1000 * 1000);
$compteToto->voirSolde();
echo '<br/>';

$compteToto->retirer(1000 * 1000);
$compteToto->voirSolde();
echo '<br/>';

echo 'Le titulaire du compte est ' . $compteToto->getTitulaire() . '.<br/>';

$compteToto->setTitulaire('Oncle Samu');

$compteToto->setSolde(-42);

echo 'Informations du compte<br/>';
echo 'Titulaire : ' . $compteToto->getTitulaire() . '<br/>';
echo 'Solde : ' . $compteToto->getSolde() . '<br/>';
