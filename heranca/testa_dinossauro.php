<?php
  include_once 'class\Dinossauro.php';

  $setimo_animal = new Dinossauro("T-Rex", "Carne", "Ruge",
                                  "Morde", "Deita", "Anda");

  $setimo_animal->set_id(7);
  $setimo_animal->set_nivel_fome_animal("Alta");

  echo "<b>ID: </b>".$setimo_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$setimo_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$setimo_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$setimo_animal->get_nivel_fome_animal()."</br>";
  
