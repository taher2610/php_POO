<?php

class personne{

    public $vie = 50;
    public $atk = 15;
    public $nom ;

    public function __construct($vie,$atk,$nom){
        $this->vie = $vie;
        $this->atk = $atk;
        $this->nom = $nom;

    }
    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }

    }
    public function mort(){
        return $this->vie <= 0;
    }
    
    public function attaque($cible){
        $cible->vie -= $this->atk;
    }

?>