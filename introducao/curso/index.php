<?php
  include_once 'class/Usuario.php';

  $usuario = new Usuario("Igor", 123);

  echo "-----------Usuário---------------";
  echo "<br/>";
  echo "Login: " . $usuario->getLogin() . "<br/>";
  echo "Senha: " . $usuario->getSenha();

?>
