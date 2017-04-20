<?php
  include_once '..\class\Touro.php';

  $quarto_animal = new Touro("Touro Bravo", "Vegetais", "Muge",
                             "Desce a cabeça", "Deitado", "Anda");

  $quarto_animal->set_id(4);
  $quarto_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$quarto_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$quarto_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$quarto_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$quarto_animal->get_nivel_fome_animal()."</br>";
