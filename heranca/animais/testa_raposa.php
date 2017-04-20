<?php
  include_once '..\class\Raposa.php';

  $decimo_animal = new Raposa("Raposa Vermelha", "Carne", "Ruge",
                              "Morde", "Deita", "Corre");

  $decimo_animal->set_id(10);
  $decimo_animal->set_nivel_fome_animal("Alta");

  echo "<b>ID: </b>".$decimo_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$decimo_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$decimo_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$decimo_animal->get_nivel_fome_animal()."</br>";
