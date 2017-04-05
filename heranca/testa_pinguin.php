<?php
  include_once 'class\Pinguin.php';

  $segundo_animal = new Pinguin("Pinguin-africano", "Peixe", "Grito estridente",
                                "Dobra a coluna", "Deitado", "Corre");

  $segundo_animal->set_id(2);
  $segundo_animal->set_nivel_fome_animal("Baixa");

  echo "<b>ID: </b>".$segundo_animal->get_id()."</br>";
  echo "<b>Tipo de Animal: </b>".$segundo_animal->get_tipo_animal()."</br>";
  echo "<b>Tipo de Comida: </b>".$segundo_animal->get_tipo_comida_animal()."</br>";
  echo "<b>Nível de Fome: </b>".$segundo_animal->get_nivel_fome_animal()."<br/>";
