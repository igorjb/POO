<?php

  include_once '/class/Usuarios.php';

  $usuario = new Usuarios();

  $usuario->set_onde_moro("Bairro de Fatima");
  
  echo "O Usuario vive no ".$usuario->get_onde_vivo()."</br>";
  echo "O Usuario mora no ".$usuario->get_onde_moro()."</br>";
