<?php
  include_once 'class/Medico.php';
  include_once 'class/Enfermeiro.php';

  $medico = new Medico();

  $medico->setId("1");
  $medico->setNome("Toin");
  $medico->setSalario("R$ 1.0000");
  $medico->setEspecialidade("Clínico Geral");

  $enfermeiro = new Enfermeiro();

  $enfermeiro->setId("2");
  $enfermeiro->setNome("Chicó");
  $enfermeiro->setSalario("R$ 800");
  $enfermeiro->setSetor("Traumatologia");

  echo "----------Médico----------------";
  echo "<br/>";

  echo "ID: ". $medico->getId() . "<br/>";
  echo "Nome: ". $medico->getNome() . "<br/>";
  echo "Salário: ". $medico->getSalario() . "<br/>";
  echo "Especialidade: ". $medico->getEspecialidade() . "<br/>";
  echo "<br/>";

  echo "----------Enfermeiro-------------";
  echo "<br/>";

  echo "ID: " . $enfermeiro->getId() . "<br/>";
  echo "Nome: " . $enfermeiro->getNome() . "<br/>";
  echo "Salário: " . $enfermeiro->getSalario() . "<br/>";
  echo "Setor: " . $enfermeiro->getSetor() . "<br/>";

?>
