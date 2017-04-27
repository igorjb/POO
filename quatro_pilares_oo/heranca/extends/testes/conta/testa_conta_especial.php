<?php
  include_once "..\..\class\conta\CEspecial.php";

  $conta_especial = new CEspecial("237", "1.000", "444.679.775-11");

  $conta_especial->set_limite("2.000");

  echo "<b>CONTA ESPECIAL:</b></br></br>";
  echo "<b>Codigo: </b>".$conta_especial->get_codigo()."</br>";
  echo "<b>Saldo: </b>".$conta_especial->get_saldo()." REAIS</br>";
  echo "<b>CPF: </b>".$conta_especial->get_cpf()."</br>";

  echo "<b>Limite: </b>".$conta_especial->get_limite()." REAIS</br>";
