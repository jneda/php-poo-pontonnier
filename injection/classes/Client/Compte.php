<?php
namespace App\Client;

/**
 * Compte de client
 */
class Compte
{
  private string $nom;
  private string $prenom;
  private string $telephone;

  public function __construct($nom, $prenom, $telephone)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->telephone = $telephone;
  }

  /**
   * GETTERS
   */

  public function getNom(): string
  {
    return $this->nom;
  }

  public function getPrenom(): string
  {
    return $this->prenom;
  }

  public function getTelephone(): string
  {
    return $this->telephone;
  }

  /**
   * SETTERS
   */

  public function setNom(string $nom): void
  {
    $this->nom = $nom;
  }

  public function setPrenom(string $prenom): void
  {
    $this->prenom = $prenom;
  }

  public function setTelephone(string $telephone): void
  {
    $this->telephone = $telephone;
  }
}
