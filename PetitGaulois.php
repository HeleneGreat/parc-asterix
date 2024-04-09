<?php
require_once "Attraction.php";

class PetitGaulois extends Attraction
{

    public function __construct(string $nom = " ")
    {
        parent::__construct($nom);
    }

    // Commentaires des visiteurs de cette attraction :
    public function babillage()
    {
        echo "ooooooooh le joli canard..." . PHP_EOL;
    }

    public function commentaire()
    {
        $this->babillage();
    }

    public function miettes()
    {
        return $this->ptProprete -= 2;
    }
}
