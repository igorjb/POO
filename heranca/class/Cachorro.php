<?php
include_once 'Animal.php';

class Cachorro extends Animal {

  private $comportamento_animal_vagueando_ambiente;

  public function __construct($tipo_animal, $tipo_comida_animal,
                              $comportamento_animal_ruido, $comportamento_animal_comer,
                              $comportamento_animal_dormindo, $comportamento_animal_vagueando_ambiente){
        parent::__construct($tipo_animal, $tipo_comida_animal, $comportamento_animal_ruido,
                            $comportamento_animal_comer, $comportamento_animal_dormindo);

        $this->comportamento_animal_vagueando_ambiente = $comportamento_animal_vagueando_ambiente;

  }

  public function get_comportamento_animal_vagueando_ambiente(){
    return $this->comportamento_animal_vagueando_ambiente;
  }

}
