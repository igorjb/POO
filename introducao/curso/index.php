<?php
  include_once 'class/Usuario.php';

  $usuario1 = new Usuario();
  $usuario2 = new Usuario();

  $usuario1->setNome("Igor");

  echo $usuario1->getNome();
  
?>
