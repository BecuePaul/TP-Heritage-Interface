<?php
class Immeuble extends Batiment{
    private $ascenseur;
    private $nbAppartement;
    private $garage;

    public function __construct($garage, $nbAppartement, $ascenseur,$nom,$superficie,$type,$nbEtage)
    {
        $this->garage = $garage;
        $this->nbAppartement = $nbAppartement;
        $this->ascenseur = $ascenseur;
        parent::__construct($nom,$superficie,$type,$nbEtage);
    }
    public function getGarage(){
        echo $this->garage;
    }
    public function getnbAppartement(){
        echo $this->nbAppartement;
    }
    public function getAscenseur(){
        echo $this->ascenseur;
    }
}
?>