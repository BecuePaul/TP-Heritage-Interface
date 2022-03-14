<?php
class Maison extends Batiment{
    private $garage;
    private $cheminee;

    public function __construct($garage, $cheminee,$nom,$superficie,$type,$nbEtage)
    {
        $this->garage = $garage;
        $this->cheminee = $cheminee;
        parent::__construct($nom,$superficie,$type,$nbEtage);
    }
    public function getGarage(){
        echo $this->garage;
    }
    public function getCheminee(){
        echo $this->cheminee;
    }
}
?>