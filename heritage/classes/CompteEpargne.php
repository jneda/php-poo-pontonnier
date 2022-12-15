<?php

/**
 * Classe représentant un compte d'épargne
 */

final class CompteEpargne extends Compte
{
  /**
   * Représente le taux d'intérêt
   *
   * @var float
   */
  private float $tauxInteret;

  /**
   * Constructeur
   */

  public function __construct(string $titulaire, float $solde, float $tauxInteret)
  {
    parent::__construct($titulaire, $solde);
    $this->tauxInteret = $tauxInteret;
  }

  /**
   * GETTERS
   */

  public function getTauxInteret(): float
  {
    return $this->tauxInteret;
  }

  /**
   * SETTERS
   */

  public function setTauxInteret(float $tauxInteret): void
  {
    if ($tauxInteret < 0 || $this->solde <= 0) {
      return;
    }

    $this->tauxInteret = $tauxInteret;
  }

  /**
   * MÉTHODES DE SERVICE
   */

  public function verserInterets(): void
  {
    $this->solde = $this->solde * (1 + $this->tauxInteret / 100);
  }
}
