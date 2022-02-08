<?php

require_once "Parc.php";
require_once "Attraction.php";
require_once "SensationsFortes.php";
require_once "Familiale.php";
require_once "PetitGaulois.php";

$asterix = new Parc ("Parc Asterix");

$asterix->construireAttraction(new SensationsFortes("Oziris"));
$asterix->construireAttraction(new Familiale("Attention Menhir"));
$asterix->construireAttraction(new PetitGaulois("Lavomatix"));
$asterix->construireAttraction(new SensationsFortes("La Galère"));
$asterix->construireAttraction(new PetitGaulois("Goudurix"));

/*
$asterix->compterAttraction();
$asterix->listerAttraction();

$asterix->reactions();

$asterix->reparer();
$asterix->nettoyer();
$asterix->nettoyer();
$asterix->nettoyer();
$asterix->AfficherInfo();
// $asterix->salete();

// var_dump($asterix);
*/

// $asterix->vomir();
// var_dump($asterix->attractions);



$asterix->PetitGaulois->miettes();

// $asterix->$SensationsFortes->vomi();