<?php

declare(strict_types=1);

/**
 * Classe Voiture
 */

class Voiture
{
  private string $immatriculation;
  private string $couleur;
  private int $poids;
  private int $puissance;
  private float $capaciteReservoir;
  private float $niveauEssence;
  private int $nombrePlaces;
  private bool $assurance;
  private string $messageTableauBord;

  /**
   * Constructeur
   */

  public function __construct(
    string $immatriculation,
    string $couleur,
    int $poids,
    int $puissance,
    float $capaciteReservoir,
    int $nombrePlaces
  ) {
    $this->immatriculation = $immatriculation;
    $this->couleur = $couleur;
    $this->poids = $poids;
    $this->puissance = $puissance;
    $this->capaciteReservoir = $capaciteReservoir;
    $this->nombrePlaces = $nombrePlaces;
    $this->niveauEssence = 5;
    $this->assurance = false;
    $this->messageTableauBord = 'Bonjour tout le monde ! 🥳';
  }

  /**
   * GETTERS
   */

  /**
   * Get the value of immatriculation
   */
  public function getImmatriculation(): string
  {
    return $this->immatriculation;
  }

  /**
   * Get the value of couleur
   */
  public function getCouleur(): string
  {
    return $this->couleur;
  }

  /**
   * Get the value of poids
   */
  public function getPoids(): int
  {
    return $this->poids;
  }

  /**
   * Get the value of puissance
   */
  public function getPuissance(): int
  {
    return $this->puissance;
  }

  /**
   * Get the value of capaciteReservoir
   */
  public function getCapaciteReservoir(): float
  {
    return $this->capaciteReservoir;
  }

  /**
   * Get the value of niveauEssence
   */
  public function getNiveauEssence(): float
  {
    return $this->niveauEssence;
  }

  /**
   * Get the value of nombrePlaces
   */
  public function getNombrePlaces(): int
  {
    return $this->nombrePlaces;
  }

  /**
   * Get the value of assurance
   */
  public function getAssurance(): bool
  {
    return $this->assurance;
  }

  /**
   * Get the value of messageTableauBord
   */
  public function getMessageTableauBord(): string
  {
    return $this->messageTableauBord;
  }

  /**
   * SETTERS
   */

  public function setAssurance(bool $assurance): void
  {

    if (gettype($assurance) !== 'boolean')
    {
      $this->messageTableauBord = 'Paramètre invalide : booléen requis.';
      return;
    }

    if ($this->assurance !== $assurance) {
      $this->assurance = $assurance;
    }
    
    $this->messageTableauBord = $this->assurance ?
      'Ce véhicule est assuré ! 😀' :
      'Ce véhicule n\'est pas assuré ! 😑';
  }

  public function setMessage(string $message): void
  {
    $this->messageTableauBord = $message;
  }

  /**
   * MÉTHODES DE SERVICE
   */

  public function repeindre(string $couleur = null): void
  {
    if (!isset($couleur) || $couleur === $this->couleur) {
      $this->messageTableauBord = 'Merci d\'avoir rafraîchi ma peinture ' . 
        $this->couleur . ' ! 😍';
      return;
    }

    $this->couleur = $couleur;
    $this->messageTableauBord = 'Merci de m\'avoir repeint ! J\'ai grave' .
      ' la classe en ' . $this->couleur . '. 😎';
  }

  public function mettreEssence($quantiteEssence): float
  {
    switch ($quantiteEssence) {
      case $quantiteEssence <= 0:
        $this->messageTableauBord = "Impossible d'ajouter une quantité" .
          " négative d'essence ! 🤔";
        break;

      case $this->niveauEssence + $quantiteEssence > $this->capaciteReservoir:
        $this->messageTableauBord = "La quantité d'essence voulue ferait" . 
          " déborder le réservoir ! 😱";
        break;

      default:
        $this->niveauEssence += $quantiteEssence;
        $this->messageTableauBord = "Une quantité de " . $quantiteEssence .
          " litres d'essence a été ajoutée au réservoir ! 😄";
    }

    return $this->niveauEssence;
  }

  public function seDeplacer(float $distanceKm, float $vitesseMoyenne): void
  {
    switch ($vitesseMoyenne) {
      case $vitesseMoyenne < 50:
        $litresAuxCent = 10;
        break;

      case $vitesseMoyenne < 90:
        $litresAuxCent = 5;
        break;

      case $vitesseMoyenne < 130:
        $litresAuxCent = 8;
        break;

      case $vitesseMoyenne >= 130:
        $litresAuxCent = 12;
    }

    $consommation = $distanceKm * $litresAuxCent / 100;
    if ($consommation > $this->niveauEssence) {
      $this->messageTableauBord = "Le réservoir ne contient pas assez de " .
        "carburant pour parcourir la distance requise ! 😿";
      return;
    }

    $this->messageTableauBord = "Ce trajet de " . $distanceKm .
      " km à une vitesse moyenne de " . $vitesseMoyenne .
      " km/h va consommer " . $consommation . " litres d'essence. 🤓";
  }

  /**
   * Méthodes magiques
   */

  public function __toString(): string
  {
    $format = 'Voiture immatriculée "%s", de couleur %s et d\'une puissance' .
      ' de %d chevaux. 🚗';
    return sprintf($format, $this->immatriculation, $this->couleur, $this->puissance);
  }
}
