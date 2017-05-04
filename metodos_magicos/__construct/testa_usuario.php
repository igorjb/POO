<?php
  //Incluindo a minha classe usuário
  include_once 'class/Usuario.php';

  //Construindo um novo usuário
  $primeiro_usuario = new Usuario("Igor", "qwe123");

  //Alterando o atributo "id" do meu novo usuário
  $primeiro_usuario->set_id(1);

  //Imprimindo dados criados na tela do navegador
  echo "Meu ID &eacute;: ".$primeiro_usuario->get_id().'<br>';
  echo "Meu Usu&aacute;rio &eacute;: ".$primeiro_usuario->get_usuario().'<br>';
  echo "Minha Senha &eacute;: ".$primeiro_usuario->get_senha().'<br>';
