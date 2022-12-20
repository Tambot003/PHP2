<h1 style="color: #00FF00;  ">
    Exercice 13
</h1>
<h4 ; >Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.

v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3

Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :</h4>
<hr>
 <?php 
 //___________________________________________________________
//     Class voiture{
//     private $_marque;
//     private $_model;
//     private $_nbporte;
    
//     public function __construct($marque, $model, $nbporte){
//           $this->_marque = $marque;
//           $this->_model = $model;
//           $this->_nbporte = $nbporte;
        
//         public function getMarque(){
//         $this->_marque=$marque;
//         $this->_marque;
//         $this->_marque;
//         }
//     }
// $poste =new Ordinateur("Peugeot");
// echo $poste->getMarque();
//____________________________________________________________


//____________________________________________________________
// class Voiture {
//     private $_brandname;
//     private $_model;
//     private $_nbport;
//     private $_vitesse;
//     private $_statut; // démarré ou stoppé
    
//     public function __construct($brandname, $model, $nbport, $vitesse, $statut) {
//       $this->_brandname =  $brandname;
//       $this->_model = $model;
//       $this->_nbport = $nbport;
//       $this->_vitesse = 0;
//       $this->_statut = $statut;
//     }

//     public function getBrandname() {
//           return $this->_brandname;
//     }

//     public function getmodel() {
//            return $this->_model;
//     }

//     public function getnbport() {
//            return $this->_nbport;
//     }

//     public function getvitesse() {
//            return $this->_vitesse;
//     }  

//     public function getstatute() {
//       return $this->_statut;
//     }  


//     public function __toString() {
//       return " ---  $this->_brandname Pegeut---$this->_model with  $this->_nbport door $this->_vitesse -- $this-> $_statut ";
//     }
//   }
  
//   $result = new Voiture("pegeot", 408 , 5 , 50 , "démarr");

//   echo $result;
//____________________________________________________________





//____________________________________________________________
// class Voiture {
//   private $_brandname;
//   private $_model;
//   private $_nbport;
//   private $_vitesse;
//   private $_statut; // démarré ou stoppé

//   public function __construct($brandname, $model, $nbport, $vitesse, $statut) {
//     $this->_brandname =  $brandname;
//     $this->_model = $model;
//     $this->_nbport = $nbport;
//     $this->_vitesse = 0;
//     $this->_statut = $statut;
//   }

//   public function getBrandname() {
//         return $this->_brandname;
//   }

//   public function getmodel() {
//          return $this->_model;
//   }

//   public function getnbport() {
//          return $this->_nbport;
//   }

//   public function getstatute() {
//     return $this->_statut;
//   }  

//   public function getvitesse() {
//          return $this->_vitesse;
//   }  



//   public function __toString() {
//     return " ---  $this->_brandname Pegeut---$this->_model with  $this->_nbport door $this->_vitesse -- $this->_statut ";
//   }

//   public function __toString() {
//     return " ---  $this->_brandname citroien---$this->_model with  $this->_nbport door $this->_vitesse -- $this->_statut ";
//   }
  
// }


// $car1 = new Voiture("pegeot", 408 , 5 , 50 , "démarr");
// echo $car1;

// echo "<br>";

// $car2 = new Voiture("Citroien", "C4"  , 3 ,"nondémarr");
// echo $car2;


//     // var_dump(Voiture);
//____________________________________________________________



class Voiture
{
    // Propriétés de la classe Voiture
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $statut;

    // Constructeur de la classe Voiture
    public function __construct($marque, $modele, $nbPortes,$vitesseActuelle)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle =0;
        $this->statut = false;
        
    }

    // passse le status a 1 s'il était à 0, sinon indique que le voiture est déjà démarée (status déjà à 1)
    public function demarrer()
    {
     if ($this->statut == false){
      $this->statut = true;
      echo "La voiture démarre.<br>";
      } else {
        echo "la voiture est déjà démarrée.<br>";
      }
    }


    // Méthode accelerer()
    public function accelerer($vitesse)
    {
      if($this->statut == true)
      {
        $this->vitesseActuelle += $vitesse;
        echo "La voiture accélère de " . $vitesse . " km/h.<br>La vitesse actuelle est de ".$this->vitesseActuelle. " km/h<br>";
      }
      else{
                echo "la voiture doit être démarrée pour pouvoir accélèrer !";
      }
    }


    // Méthode stopper()
    public function stopper()
     {
    if ($this->statut == false){
        $this->statut = true;
        echo "La voiture démarre.<br>";
        } else {
          echo "la voiture est déjà démarrée.<br>";
        }
      }
    
    
    // public function stopper()
    // {
    //     $this->vitesseActuelle = 0;
    //     echo "La voiture s'arrête.<br>";
    // }


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
    public function afficherInfos()
  {
    echo "Marque : ".$this->marque."<br>";
    echo "Modèle : ".$this->modele."<br>";
    echo "Nombre de portes : ".$this->nbPortes."<br>";
    echo "Vitesse actuelle : ".$this->vitesseActuelle." km/h  <br>";
  }
}
    
    // Création d'une voiture de marque Peugeot, modèle 408 et 5 portes
   $v1 = new Voiture("Peugeot", "408", 5,0);
   // Affiche les informations de la voiture
   $v1->afficherInfos();
   // Démarre la voiture
   $v1->demarrer();


   $v1->accelerer(25); 
   $v1->accelerer(15);

    echo "<br>";

    // Création d'une voiture de marque citroein, modèle C4 et 3 portes
    $v2 = new Voiture("Citroien", "C4", 3,0);
   
    // Affiche les informations de la voiture
    $v2->afficherInfos();
   
    // Démarre la voiture
    $v2->demarrer();
   
    // Accélère la voiture de 50 km
    $v2->accelerer(0);
