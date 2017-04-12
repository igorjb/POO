<?php
  include_once 'class\Elefante.php';

  $quinto_animal = new Elefante("Elefante Africano", "Mato", "Brame",
                                "Abaixa a tromba", "Sentado", "Anda");

  $quinto_animal->set_id(4);
  $quinto_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$quinto_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$quinto_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$quinto_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nivel de Fome: </b>".$quinto_animal->get_nivel_fome_animal()."</br>";
