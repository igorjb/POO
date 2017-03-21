<?php
  include_once 'class/Computador.php';

  $primeiro_computador = new Computador("Lenovo", "PC Lenovo 63 TW");

  $primeiro_computador->set_id(1);
  $primeiro_computador->set_cabo_forca("Tipo 8");

  echo "ID: ".$primeiro_computador->get_id()."<br>";
  echo "Computador: ".$primeiro_computador->get_marca()."<br>";
  echo "Modelo: ".$primeiro_computador->get_modelo()."<br>";
  echo "Cabo de For&ccedil;a: ".$primeiro_computador->get_cabo_forca()."<br>";
