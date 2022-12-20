<?php



class Voiture {
  private $marque;
  private $modele;

  public function __construct($marque, $modele) {
    $this->marque = $marque;
    $this->modele = $modele;
  }

  public function getInfos() {
    return "Voiture: marque=$this->marque, modèle=$this->modele";
  }
}



class VoitureElec extends Voiture {
  private $autonomie;

  public function __construct($marque, $modele, $autonomie) {
    parent::__construct($marque, $modele);
    $this->autonomie = $autonomie;
  }

  public function getInfos() {
    return parent::getInfos() . ", autonomie=$this->autonomie km";
  }
}


$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";

