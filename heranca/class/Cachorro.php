<?php
  include_once 'Animal.php';

  class Cachorro extends Animal{

      public function __construct($tipo_animal){
        parent::__construct($tipo_animal);
      }

      public function comer() {
        echo "Ração";
      }
  }
