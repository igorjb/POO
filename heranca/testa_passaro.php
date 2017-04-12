<?php
  include_once 'class\Passaro.php';

  $quinto_animal = new Passaro("Arara", "Alpiste", "Pia",
                               "Bica", "Sentado", "Voa");

  $quinto_animal->set_id(5);
  $quinto_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$quinto_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$quinto_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$quinto_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$quinto_animal->get_nivel_fome_animal()."</br>";
