<?php
  class Funcionario {
    private $id;
    private $nome;
    private $salario;

    public function setId($id) {
      $this->id = $id;
    }

    public function getId() {
      return $this->id;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getNome() {
      return $this->nome;
    }

    public function setSalario($salario) {
      $this->salario = $salario;
    }

    public function getSalario() {
      return $this->salario;
    }

  }
