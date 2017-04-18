<?php
  include_once 'class\Golfinho.php';

  $nono_animal = new Golfinho("Golfinhos Bottlenose", "Peixe", "Balança",
                              "Engole", "Não dorme", "Nada");

  $nono_animal->set_id(9);
  $nono_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$nono_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$nono_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$nono_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$nono_animal->get_nivel_fome_animal()."</br>";
