<?php

require_once "Parc.php";

class Attraction
{
    public string $nom;
    public int $ptMaintenance;
    public int $ptProprete;

    function __construct(string $nom = " ")
    {
        $this->nom = $nom;
        $this->ptMaintenance = 100;
        $this->ptProprete = 100;
    }

    // Affiche les infos de l'attraction (propreté et maintenante) :
    public function info()
    {
        return "Maintenance : " . $this->ptMaintenance . " | Propreté : " . $this->ptProprete . PHP_EOL;
    }

    // Ajoute des points de maintenance :
    public function reparation()
    {
        return $this->ptMaintenance += 5;
    }

    // Ajoute des points de propreté
    public function nettoyage()
    {
        return $this->ptProprete += 5;
    }

    // Enlève des points de maintenance :
    public function degradation()
    {
        return $this->ptMaintenance -= 5;
    }

    // Enlève des points de propreté (devrait combiner la fonction vomi() de SensationsFortes) :
    public function salete()
    {
        $this->ptProprete -= 5;
    }
}
