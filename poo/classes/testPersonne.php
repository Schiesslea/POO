<?php

require_once "../classes/Personne.php";

$p1 = new Personne("dupond","jean", "12/02/1972");
echo $p1->getIdentite();
echo PHP_EOL;
$p1->ajouterPrenom("Pierre");
echo $p1->getIdentiteAdministrative();
echo PHP_EOL;
echo $p1->getAge();
echo PHP_EOL;
$p1->ajouterPrenom("Paul");
$p1->ajouterPrenom("Jacques");
echo $p1->getIdentiteAdministrative();
echo PHP_EOL;
$dateNaissance = $p1->getDateNaissance();
echo $dateNaissance->format("d/m/Y");
echo $p1->getDateNaissanceToString();