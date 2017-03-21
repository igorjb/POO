<?php
  include_once 'class/Pessoa.php';

  $primeira_pessoa = new Pessoa('Igor', '123', '456');

  $primeira_pessoa->set_id(1);
  $primeira_pessoa->set_data_nasc("01/03/1980");

  echo "ID: ".$primeira_pessoa->get_id()."<br>";
  echo "Nome: ".$primeira_pessoa->get_nome()."<br>";
  echo "Nasceu em: ".$primeira_pessoa->get_data_nasc()."<br>";
