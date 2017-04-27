<?php
  include_once "..\..\class\conta\CPoupanca.php";

  $conta_poupanca = new CPoupanca("001", "200", "868.716.905-14");

  $conta_poupanca->set_data_abertura("24/04/2017");

  echo "<b>CONTA POUPANCA: </b></br></br>";
  echo "<b>Codigo: </b>".$conta_poupanca->get_codigo()."</br>";
  echo "<b>Saldo: </b>".$conta_poupanca->get_saldo()." REAIS</br>";
  echo "<b>CPF: </b>".$conta_poupanca->get_cpf()."</br>";

  echo "<b>Data de Abertura: </b>".$conta_poupanca->get_data_abertura()."</br>";
