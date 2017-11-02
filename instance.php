<?php

require_once('Personnage.php');

$Laelroth = new Personnage;
$Laelroth->parler();
$Laelroth->gagnerExperience();
$Laelroth->afficherExperience();


$Laeldryn = new Personnage;

$Laelroth->frapper($Laeldryn);
?>