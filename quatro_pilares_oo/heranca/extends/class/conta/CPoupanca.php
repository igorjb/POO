<?php
include_once 'Conta.php';

class CPoupanca extends Conta {

  private $data_abertura;

  public function __construct($codigo, $saldo, $cpf) {
    parent::__construct($codigo, $saldo, $cpf);
  }

  public function get_data_abertura() {
    return $this->data_abertura;
  }

  public function set_data_abertura($nova_data_abertura) {
    $this->data_abertura = $nova_data_abertura;
  }

}
