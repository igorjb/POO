<?php

  include_once '../class/Aluno.php';

  $primeiro_aluno = new Aluno("Igor", "123", date("Ymd"));

  echo "Meu Usuario &eacute;: ".$primeiro_aluno->get_usuario().'<br>';
  echo "Minha Senha &eacute;: ".$primeiro_aluno->get_senha().'<br>';
  echo "Minha Matricula &eacute;: ".$primeiro_aluno->get_matricula().'<br>';
