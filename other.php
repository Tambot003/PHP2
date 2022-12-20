<?php

class Voiture
{
    // Propriétés de la classe Voiture
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;

    // Constructeur de la classe Voiture
    public function __construct($marque, $modele, $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }

    // Méthode demarrer()
    public function demarrer()
    {
        echo "La voiture démarre.<br>";
    }

    // Méthode accelerer()
    public function accelerer($vitesse)
    {
        $this->vitesseActuelle += $vitesse;
        echo "La voiture accélère de " . $vitesse . " km/h.<br>";
    }

    // Méthode stopper()
    public function stopper()
    {
        $this->vitesseActuelle = 0;
        echo "La voiture s'arrête.<br>";
    }

    // Accesseur (get) pour la propriété marque
    public function getMarque()
    {
        return $this->marque;
    }

    // Mutateur (set) pour la propriété marque
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    // Accesseur (get) pour la propriété modèle
    public function getModele()
    {
        return $this->modele;
    }

    // Mutateur (set) pour la propriété modèle
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    // Accesseur (get) pour la propriété nbPortes
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    // Mutateur (set) pour la propriété nbPortes
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    // Accesseur (get) pour la propriété vitesseActuelle
    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    // Mutateur (set) pour la propriété vitesseActuelle
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
    }

    // Méthode personnalisée pour afficher toutes les informations d'une voiture
    public function afficherInformations()
    {
        echo "Marque : " . $this->marque . "<br>";
        echo "Modèle";
    }
    public function afficherInfos()
  {
    echo "Marque : ".$this->marque."\n";
    echo "Modèle : ".$this->modele."\n";
    echo "Nombre de portes : ".$this->nbPortes."\n";
    echo "Vitesse actuelle : ".$this->vitesseActuelle." km/h\n";
  }
}
// Pour tester cette classe, on peut utiliser les instructions suivantes :


// Création d'une voiture de marque Peugeot, modèle 408 et 5 portes
$v1 = new Voiture("Peugeot", "408", 5);

// Affiche les informations de la voiture
$v1->afficherInfos();

// Démarre la voiture
$v1->demarrer();

// Accélère la voiture de 50 km

  // Création d'une voiture de marque Peugeot, modèle 408 et 5 portes
    $v1 = new Voiture("Peugeot", "408", 5);
    
    // Affiche les informations de la voiture
    $v1->afficherInfos();
    
    // Démarre la voiture
    $v1->demarrer();
    
    // Accélère la voiture de 50 km
    