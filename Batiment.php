<?php

class Batiment implements BatiStructure{
    private $nom;
    private $superficie;
    private $type;
    private $nbEtage;

    public function __construct($nom,$superficie,$type,$nbEtage)
    {
        $this->nom = $nom;
        $this->superficie = $superficie;
        $this->type = $type;
        $this->nbEtage = $nbEtage;
    }
    public function getNbEtage(){
        echo $this->nbEtage;
    }
    public function getType(){
        echo $this->type;
    }
    public function getSuperficie(){
        echo $this->superficie;
    }
    public function getNom(){
        echo $this->nom;
    }
}
?>