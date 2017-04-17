<?php
  include_once 'class\Passaro.php';

  $sexto_animal = new Passaro("Arara", "Alpiste", "Pia",
                               "Bica", "Sentado", "Voa");

  $sexto_animal->set_id(6);
  $sexto_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$sexto_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$sexto_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$sexto_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$sexto_animal->get_nivel_fome_animal()."</br>";
