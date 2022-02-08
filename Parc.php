<?php


class Parc {
    public string $nom;
    public array $attractions = [];

    public function __construct(string $nom){
        $this->nom = $nom;
    }
    

    // Ajouter les nouvelles attractions à mon Parc :
    public function construireAttraction(Attraction $attraction){
        array_push($this->attractions, $attraction);
    }

    // Compter le nombre total d'attractions :
    public function compterAttraction(){
        echo "Il y a " . count($this->attractions) . " attractions dans " . $this->nom . "." . PHP_EOL;
    }

    // Liste toutes les attractions de mon Parc :
    public function listerAttraction(){
        foreach($this->attractions as $attraction){
            echo $attraction->nom . PHP_EOL;
        }
    }

    // Ce que les visiteurs pensent lorsqu'ils utilisent les différents types d'attractions :
    public function reactions() {
        foreach($this->attractions as $attraction){
            $attraction->commentaire();
        }
    }

    // Affiche le nom + la propreté et maintenance de toutes les attractions :
    public function afficherInfo() {
        foreach($this->attractions as $attraction){
            echo "Attraction " . $attraction->nom .  " : " . $attraction->info();
        }
    }

    // Ajoute des points de maintenance à toutes les attractions
    public function reparer() {
        foreach($this->attractions as $attraction){        
            $attraction->reparation();
        }
    }

    // Ajoute des points de propreté à toutes les attractions :
    public function nettoyer() {
        foreach($this->attractions as $attraction){        
            $attraction->nettoyage();
        }
    }

    // Enlève des points de maintenance à toutes les attractions
    public function degrader() {
        foreach($this->attractions as $attraction){        
            $attraction->degradation();
        }
    }
    
    // Enlève des points de propreté à toutes les attractions :
    public function salir() {
        foreach($this->attractions as $attraction){        
            $attraction->salete();
        }
    }

    
    
   


}
