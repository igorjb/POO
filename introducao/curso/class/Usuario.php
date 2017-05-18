<?php

  class Usuario {

    //atributos
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo_conta;
    private $data;

    //métodos
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function dizer_ola($outro_nome) {
      echo "Olá $outro_nome, me chamo " . $this->nome;
    }






  }
?>
