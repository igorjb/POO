<?php

  include_once '/class/Usuarios.php';

  $usuario = new Usuarios();

  $usuario2 = new Usuarios();

  $usuario2->set_onde_vivo("Planeta Terra");

  echo "O Usuario vive no ".$usuario->get_onde_vivo()."</br>";
  echo "O Usuario 2 vive no ".$usuario->get_onde_vivo()."</br>";
