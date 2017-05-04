<?php

  include_once 'class/Alunos.php';

  $aluno = new Alunos("Igor", "123", date("Ymd"));

  echo $aluno("Feitoza");
