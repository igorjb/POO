<?php

  class Usuario {

    //atributos
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $tipo_conta;
    public $data;

    //métodos
    public function dizer_ola($outro_nome) {
      echo "Olá $outro_nome, me chamo " . $this->nome;
    }





  }
?>
