<?php

require "../classes/Phrase.php";

$phrase = new Phrase("bonjour je suis Andy");
echo $phrase->getPhrase();
echo PHP_EOL;
echo $phrase->CalculerNombreMots();
echo PHP_EOL;
echo $phrase->CalculerNombreCaractere();
echo PHP_EOL;
echo $phrase->getPositionMot(0);
echo PHP_EOL;
echo $phrase->getTypePhrase();
echo PHP_EOL;
echo $phrase->getNombreOccurenceMot("andy");
echo PHP_EOL;
echo $phrase->remplacerOccurence("je", "oui");
echo PHP_EOL;
echo $phrase->reformaterPhrase();
echo PHP_EOL;
echo $phrase->getNombreVoyelles();