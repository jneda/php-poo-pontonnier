<?php  
  // declare(strict_types=1);
?>
  <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Voiture</title>
</head>

<body>
  <?php

  require_once('Voiture.php');

  $voiture = new Voiture('ANTHONY💪HOULALA', 'vert pomme', 1000, 110, 80, 5);

  // tests getters

  $voiture->getImmatriculation();
  $voiture->getCouleur();
  $voiture->getPoids();
  $voiture->getPuissance();
  $voiture->getCapaciteReservoir();
  $voiture->getNiveauEssence();
  $voiture->getNombrePlaces();
  $voiture->getAssurance();
  $voiture->getMessageTableauBord();

  // test setter
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';
  $voiture->setAssurance(true);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  // PHP n'est pas un langage fortement typé...
  $voiture->setAssurance('');
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';
  $voiture->setAssurance('C\'est vraiment n\'imp...');
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  //var_dump($voiture);

  // tests méthodes de service

  $voiture->repeindre();
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->repeindre('rose fluo');
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->repeindre('rose fluo');
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $resultat = $voiture->mettreEssence(-666);
  var_dump($resultat);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $resultat = $voiture->mettreEssence(1000 * 1000);
  var_dump($resultat);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $resultat =  $voiture->mettreEssence(50.42);
  var_dump($resultat);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->seDeplacer(2000, 150);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->seDeplacer(9, 30);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->seDeplacer(44, 90);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  $voiture->seDeplacer(666, 110);
  echo '<p>' . $voiture->getMessageTableauBord() . '</p>';

  echo '<p>' . $voiture . '</p>';
  ?>

</body>

</html>