<?php
  include_once '..\class\Lobo.php';

  $terceiro_animal = new Lobo("Lobo Cinzento", "Carne", "Uivo",
                              "Dobra a coluna", "Deitado", "Corre ou Anda");

  $terceiro_animal->set_id(3);
  $terceiro_animal->set_nivel_fome_animal("Alta");

  echo "<b>ID: </b>".$terceiro_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$terceiro_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$terceiro_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$terceiro_animal->get_nivel_fome_animal()."</br>";
