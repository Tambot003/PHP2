<?php
class Voiture {
  private $marque;
  private $modele;
  private $nbPortes;
  private $vitesseActuelle;
  
  public function __construct($marque, $modele, $nbPortes) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbPortes = $nbPortes;
    $this->vitesseActuelle = 0;
  }
  
  public function demarrer() {
    if ($this->vitesseActuelle == 0) {
      echo "La voiture démarre.";
    } else {
      echo "La voiture est déjà en marche.";
    }
  }
  
  public function accelerer($vitesse) {
    $this->vitesseActuelle += $vitesse;
    echo "La voiture accélère à $this->vitesseActuelle km/h.";
  }
  
  public function ralentir($vitesse) {
    $this->vitesseActuelle -= $vitesse;
    if ($this->vitesseActuelle < 0) {
      $this->vitesseActuelle = 0;
    }
    echo "La voiture ralentit à $this->vitesseActuelle km/h.";
  }
  
  public function stopper() {
    if ($this->vitesseActuelle == 0) {
      echo "La voiture est déjà arrêtée.";
    } else {
      echo "La voiture s'arrête.";
      $this->vitesseActuelle = 0;
    }
  }
  
  public function getMarque() {
    return $this->marque;
  }
  
  public function setMarque($marque) {
    $this->marque = $marque;
  }
  
  public function getModele() {
    return $this->modele;
  }
  
  public function setModele($modele) {
    $this->modele = $modele;
  }
  
  public function getNbPortes() {
    return $this->nbPortes;
  }
  
  public function setNbPortes($nbPortes) {
    $this->nbPortes = $nbPortes;
  }
  
  public function getVitesseActuelle() {
    return $this->vitesseActuelle;
  }
  
  public function setVitesseActuelle($vitesseActuelle) {
    $this->vitesseActuelle = $vitesseActuelle;
  }
}
$car = new Voiture("pegeot", 408 , 5 , 50 , "démarr");
  public function afficherInformations($car) 
    echo "Marque: $this->marque\n";
    echo "Modèle: $this->modele\n";
    echo "Nombre de portes: $this;
