<?php
require_once "Attraction.php";

class SensationsFortes extends Attraction {

    public function __contruct(string $nom = " "){
        parent::__construct($nom);
    }

    // Commentaires des visiteurs de cette attraction :
    public function rocknroll(){
        echo "AAAAAAAaaaaaaAAAAAAAAHhhhh !!!!! Elle déchiiiiiiiiiiiire cette attraction !!!" . PHP_EOL;
    }

    public function commentaire(){
        $this->rocknroll();
    }

    // Devrait enlevé des points de propreté aux attractions SensationsFortes
    public function vomi(){

    }

    
    



}