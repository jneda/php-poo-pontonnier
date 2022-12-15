<?php
namespace App\Banque;

use App\Client\Compte as CompteClient;

/**
 * Représente un compte courant
 */
final class CompteCourant extends Compte
{
  /**
   * Représente le découvert autorisé
   *
   * @var float
   */
  private float $decouvert;

  /**
   * Constructeur
   *
   * @param string $titulaire
   * @param float $solde
   * @param float $decouvert
   */
  public function __construct(CompteClient $titulaire, float $solde, float $decouvert)
  {
    parent::__construct($titulaire, $solde);
    $this->decouvert = $decouvert;
  }

  /**
   * GETTERS
   */

  public function getDecouvert(): float
  {
    return $this->decouvert;
  }

  /**
   * SETTERS
   */

  public function setDecouvert(float $montant): void
  {
    if ($montant < 0) {
      return;
    }

    $this->decouvert = $montant;
  }

  /**
   * MÉTHODES DE SERVICE
   */

  /**
   * Retranche une somme du solde si celui-ci est suffisant
   *
   * @param float $somme
   * @return void
   */
  public function retirer(float $somme): void
  {
    $limiteAutorisee = $this->solde + $this->decouvert;

    if ($somme < 0 || $somme > $limiteAutorisee) {
      return;
    }

    $this->solde -= $somme;
  }
}
