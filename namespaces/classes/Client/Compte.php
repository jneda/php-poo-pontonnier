<?php
namespace App\Client;

/**
 * Compte de client
 */
class Compte
{
  private $nom;
  private $prenom;

  public function __construct($nom, $prenom)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
  }
}
