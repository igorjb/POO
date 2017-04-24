<?php
include_once 'Conta.php';

class CEspecial extends Conta {

  private $limite;

  public function __construct($codigo, $saldo, $cpf){
    parent::__construct($codigo, $saldo, $cpf);
  }

  public function get_limite() {
    return $this->limite;
  }

  public function set_limite($novo_limite) {
    $this->limite = $novo_limite;
  }
  
}
