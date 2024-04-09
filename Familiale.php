<?php
require_once "Attraction.php";

class Familiale extends Attraction
{

    public function __construct(string $nom = " ")
    {
        parent::__construct($nom);
    }

    // Commentaires des visiteurs de cette attraction :
    public function compromis()
    {
        echo "Quelle belle journée en famille" . PHP_EOL;
    }

    public function commentaire()
    {
        $this->compromis();
    }
}
