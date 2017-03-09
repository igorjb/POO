<?php
  //Incluindo a minha classe usuário
  include_once 'class/Usuario.php';

  //Construindo um novo usuário
  $primeiro_usuario = new Usuario("Igor", "qwe123");

  //Alterando o atributo "id" do meu novo usuário
  $primeiro_usuario->set_id(1);

  //Imprimindo dados criados na tela do navegador
  echo "Meu ID é: ".$primeiro_usuario->get_id().'<br>';
  echo "Meu Usuário é: ".$primeiro_usuario->get_usuario().'<br>';
  echo "Minha Senha é: ".$primeiro_usuario->get_senha().'<br>';
