<body style="background-color: #898477;"></body>
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
//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------

class Voiture {
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


    public function __toString() {
      return "this is a  $this->_brandname car and model- $this->_model with  $this->_nbport door";
    }
  }
  
  $result = new Voiture("pegeot", 408 , 5);

  echo $result;
