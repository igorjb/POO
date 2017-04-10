<?php
  include_once 'class\Cachorro.php';

  $primeiro_animal = new Cachorro("Pitbull", "Racao", "Late", "Voraz",
                                  "Encolhido", "Corre");

  $primeiro_animal->set_id(1);
  $primeiro_animal->set_nivel_fome_animal("Moderada");

  echo "<b>ID: </b>".$primeiro_animal->get_id()."<br>";
  echo "<b>Tipo de Animal: </b>".$primeiro_animal->get_tipo_animal()."<br>";
  echo "<b>Tipo de Comida: </b>".$primeiro_animal->get_tipo_comida_animal()."<br>";
  echo "<b>Nivel de Fome: </b>".$primeiro_animal->get_nivel_fome_animal()."<br>";
