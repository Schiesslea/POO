<?php
require "../classes/Rectangle.php";

// Utilisateur de la classe Rectangle

// Instanciation de la classe Rectangle

$rectangle1 = new Rectangle(12,10, 'rouge');
$surface = $rectangle1->calculerSurface();
echo $surface;
echo PHP_EOL;
$rectangle1 = new Rectangle(5,5, 'bleu');
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo "Dimension du rectangle : " . $rectangle1->getLongueur() .",". $rectangle1->getLargeur();
$rectangle1->setLongueur(20);
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo $rectangle1;
echo PHP_EOL;
echo "Le périmètre du rectangle mesure " . $rectangle1->calculerPerimetre();
echo PHP_EOL;
echo "La couleur du rectangle est " . $rectangle1->getCouleur();
echo PHP_EOL;
echo $rectangle1->dessinerRectangle('*');
echo PHP_EOL;
echo $rectangle1->dessinerRectangle2('^');

