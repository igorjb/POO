<?php
  include_once 'class/Usuario.php';

  $usuario1 = new Usuario();
  $usuario2 = new Usuario();

  $usuario1->dizer_ola();
  
  echo "<br>";

  $usuario2->dizer_ola();
?>
