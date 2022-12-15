<?php

/**
 * Classe représentant un compte bancaire
 */
abstract class Compte
{
  /**
   * Titulaire du compte
   *
   * @var string
   */
  protected $titulaire;

  /**
   * Solde du compte
   *
   * @var float
   */
  protected $solde;

  /**
   * Constructeur de la classe Compte
   *
   * @param string $titulaire
   * @param float $solde
   */
  public function __construct(string $titulaire = null, float $solde = null)
  {
    $this->titulaire = $titulaire ?? 'Anonyme';
    $this->solde = $solde ?? 500;
  }

  /**
   * GETTERS
   */

  /**
   * Get titulaire du compte
   *
   * @return  string
   */
  public function getTitulaire(): string
  {
    return $this->titulaire;
  }

  /**
   * Get solde du compte
   *
   * @return  float
   */
  public function getSolde(): float
  {
    return $this->solde;
  }

  /**
   * SETTERS
   */

  /**
   * Set titulaire du compte
   *
   * @param string $titulaire
   * @return self
   */
  public function setTitulaire(string $titulaire): self
  {
    if ($titulaire !== '') {
      $this->titulaire = $titulaire;
    }
    return $this;
  }

  /**
   * Set solde du compte
   *
   * @param float $solde
   * @return self
   */
  public function setSolde(float $solde): self
  {
    $this->solde = $solde;
    return $this;
  }

  /**
   * Voir le solde du compte
   *
   * @return void
   */
  public function voirSolde(): void
  {
    echo "Le solde du compte est de $this->solde €.";
  }

  /**
   * Ajoute une somme au solde
   *
   * @param float $somme
   * @return void
   */
  public function deposer(float $somme): void
  {
    if ($somme < 0) {
      return;
    }

    $this->solde += $somme;
  }

  /**
   * Retranche une somme du solde si celui-ci est suffisant
   *
   * @param float $somme
   * @return void
   */
  public function retirer(float $somme): void
  {
    if ($somme < 0 || $this->solde < 0 || $this->solde < $somme) {
      return;
    }

    $this->solde -= $somme;
  }
}
