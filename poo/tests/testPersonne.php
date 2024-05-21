<?php

require "../classes/Personne.php";

$personne = new Personne("schiessle", "andy", "22/11/2005");
echo $personne->getNom();
echo PHP_EOL;
echo $personne->getIdentiteCourante();
echo PHP_EOL;
$personne->ajouterPrenom("jean");
$personne->ajouterPrenom("toto");
$personne->ajouterPrenom("Thomas");
echo $personne->getIdentiteAdministrative();
echo PHP_EOL;
echo $personne->retournerDateNaissance();
echo PHP_EOL;
echo $personne->getAge();