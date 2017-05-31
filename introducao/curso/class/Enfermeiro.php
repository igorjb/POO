<?php
  include_once 'Funcionario.php';

  class Enfermeiro extends Funcionario {
    private $setor;

    public function setSetor($setor) {
      $this->setor = $setor;
    }

    public function getSetor() {
      return $this->setor;
    }

  }
