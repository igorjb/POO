<?php

  include_once 'Alunos.php';

  $aluno = new Alunos("Igor", "123", date("Ymd"));

  echo $aluno->com_licenca($aluno->get_usuario());
  echo "<br/>";
  echo "Seu Usuario &eacute;: ".$aluno->get_usuario().'<br>';
  echo "Sua Senha &eacute;: ".$aluno->get_senha().'<br>';
  echo "Sua Matricula &eacute;: ".$aluno->get_matricula().'<br>';
  echo "<br>";
  echo $aluno->obrigado();
