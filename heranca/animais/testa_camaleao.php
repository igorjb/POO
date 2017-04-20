<?php
  include_once '..\class\Camaleao.php';

  $oitavo_animal = new Camaleao("Camaleao Listrado", "Frutas", "Não emite",
                                "Engole", "Deita", "Corre");

  $oitavo_animal->set_id(8);
  $oitavo_animal->set_nivel_fome_animal("Baixa");


  echo "<b>ID: </b>".$oitavo_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$oitavo_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$oitavo_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$oitavo_animal->get_nivel_fome_animal()."</br>";
