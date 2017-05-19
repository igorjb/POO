<?php
  include_once 'Funcionario.php';

  class Medico extends Funcionario {
    private $especialidade;

    public function setEspecialidade($especialidade) {
      $this->especialidade = $especialidade;
    }

    public function getEspecialidade() {
      return $this->especialidade;
    }

  }
