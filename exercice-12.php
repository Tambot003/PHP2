<?php


// $a = 32;
// echo var_dump($a) . "<br>";

// $b = "Hello world!";
// echo var_dump($b) . "<br>";

// $c = 32.5;
// echo var_dump($c) . "<br>";

// $d = array("red", "green", "blue");
// echo var_dump($d) . "<br>";

//-----------------------------------------------------------------------
//-----------------------------------------------------------------------


// $e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
// echo var_dump($e) . "<br>";


// echo var_dump($a, $b) . "<br>";

//-----------------------------------------------------------------------
//-----------------------------------------------------------------------

class Person {
    public $_peugeot;
    public $_model;
    public $_nbport;
    public function __construct($peugeot, $model, $nbport) {
      $this->_peugeot =  $peugeot;
      $this->_model = $model;
      $this->_nbport = $nbport;
      
    }
    public function greet() {
      return "this is a  $this->_peugeot car and model- $this->_model with  $this->_nbport door";
    }
  }
  $result = new Person("pegeot", 408 , 5);
echo $result->greet();
