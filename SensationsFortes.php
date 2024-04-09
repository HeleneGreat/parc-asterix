<?php
require_once "Attraction.php";

class SensationsFortes extends Attraction
{

    public function __construct(string $nom = " ")
    {
        parent::__construct($nom);
    }

    // Commentaires des visiteurs de cette attraction :
    public function rocknroll()
    {
        echo "AAAAAAAaaaaaaAAAAAAAAHhhhh !!!!! Elle déchiiiiiiiiiiiire cette attraction !!!" . PHP_EOL;
    }

    public function commentaire()
    {
        $this->rocknroll();
    }

    // Devrait enlever des points de propreté aux attractions SensationsFortes
    public function vomi()
    {
        $number = random_int(1, 5);
        if ($number == 5) {
            return $this->ptProprete -= 12;
        } else {
            return $this->ptProprete -= 2;
        }
    }

    /*
    public function salete(){
        return $this->ptProprete -= 2;
       
        if($number != 5){
        return $this->ptProprete -= 5 ;
        }
        else{
            $this->vomi();
        }
        
    }
    */
}
