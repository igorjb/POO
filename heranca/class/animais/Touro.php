<?php
include_once 'Animal.php';

class Touro extends Animal {

  public function __construct($tipo_animal, $tipo_comida_animal,
                              $comportamento_animal_ruido,
                              $comportamento_animal_comer,
                              $comportamento_animal_dormindo,
                              $comportamento_animal_vagueando_ambiente) {
                                
        parent::__construct($tipo_animal, $tipo_comida_animal,
                            $comportamento_animal_ruido,
                            $comportamento_animal_comer,
                            $comportamento_animal_dormindo,
                            $comportamento_animal_vagueando_ambiente);
  }
}
