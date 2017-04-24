<?php

class Conta {
  private $codigo;
  private $saldo;
  private $cpf;

  public function __construct($novo_codigo, $novo_saldo, $novo_cpf) {
    $this->codigo = $novo_codigo;
    $this->saldo = $novo_saldo;
    $this->cpf = $novo_cpf;
  }

  public function get_codigo(){
    return $this->codigo;
  }

  public function get_saldo() {
    return $this->saldo;
  }

  public function get_cpf() {
    return $this->cpf;
  }

}
