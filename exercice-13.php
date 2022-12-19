<h1 style="color: #00FF00;  ">
    Exercice 13
</h1>
<h3 style="color: #00FF00; ">Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.

v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3

Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :</h3>
<hr>

<body style="background-color: #393e46;" > </body>

    <?php 
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
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

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
//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------

class Voiture1 {
  private $_brandname;
  private $_model;
  private $_nbport;
  private $_vitesse;
  private $_statut; // démarré ou stoppé

  public function __construct($brandname, $model, $nbport, $vitesse, $statut) {
    $this->_brandname =  $brandname;
    $this->_model = $model;
    $this->_nbport = $nbport;
    $this->_vitesse = 0;
    $this->_statut = $statut;
  }

  public function getBrandname() {
        return $this->_brandname;
  }

  public function getmodel() {
         return $this->_model;
  }

  public function getnbport() {
         return $this->_nbport;
  }

  public function getvitesse() {
         return $this->_vitesse;
  }  

  public function getstatute() {
    return $this->_statut;
  }  

  public function ralentir($vitesse) {
      $this->_vitesse = $vitesse;
  }

  public function __toString() {
    return " ---  $this->_brandname Pegeut---$this->_model with  $this->_nbport door $this->_vitesse -- $this->_statut ";
  }
}

$car = new Voiture1("pegeot", 408 , 5 , 50 , "démarr");
$car->ralentir(30);
echo $car;


echo $car->getvitesse(); 


