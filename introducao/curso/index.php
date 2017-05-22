<?php
  include_once 'class/Usuario.php';
  include_once 'class/Admin.php';

  $usuario = new Usuario("Igor", 123);

  echo "-----------Usuário---------------";
  echo "<br/>";
  echo "Login: " . $usuario->getLogin() . "<br/>";
  echo "Senha: " . $usuario->getSenha() . "<br/>";

  echo "<br/>";
  
  $admin = new Admin("Fabricio", 456, "Tutor");

  echo "------------Admin--------------";
  echo "<br/>";
  echo "Login: " . $admin->getLogin() . "<br/>";
  echo "Senha: " . $admin->getSenha() . "<br/>";
  echo "Cargo: " . $admin->getCargo();

?>
