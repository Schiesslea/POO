<?php
require_once "Auteur.php";
require_once "Livre.php";
// Créer un auteur
$auteur1 = new Auteur("George", "Orwell");
// Créer un livre
$livre1 = new Livre("1111", "1984", "12/03/1940", 400);
// Associer un auteur à un livre
$livre1->setAuteur($auteur1);
// Afficher le nom de l'auteur de $livre1
echo $livre1->getAuteur()->getNom();
