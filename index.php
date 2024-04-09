<?php

require_once "Parc.php";
require_once "Attraction.php";
require_once "SensationsFortes.php";
require_once "Familiale.php";
require_once "PetitGaulois.php";

$asterix = new Parc("Parc Asterix");

$asterix->construireAttraction(new SensationsFortes("Oziris"));
$asterix->construireAttraction(new Familiale("Attention Menhir"));
$asterix->construireAttraction(new PetitGaulois("Lavomatix"));
$asterix->construireAttraction(new SensationsFortes("La Galère"));
$asterix->construireAttraction(new PetitGaulois("Goudurix"));


$asterix->compterAttraction();
$asterix->listerAttraction();

$asterix->reactions();

echo '-------------' . PHP_EOL;
$asterix->AfficherInfo();
$asterix->nettoyer();
$asterix->reparer();
$asterix->salir();
$asterix->salir();
$asterix->salir();
$asterix->salir();
$asterix->salir();
echo '-------------' . PHP_EOL;
$asterix->AfficherInfo();




$lavomatix = $asterix->getAttractionByName("Lavomatix");
$lavomatix->miettes();
$galere = $asterix->getAttractionByName("La Galère");
echo $galere->Info();
$galere->vomi();
$galere->vomi();
$galere->vomi();
$galere->vomi();
$galere->vomi();
echo '-------------' . PHP_EOL;
echo $galere->Info();
