<?php

  class Usuario {

    //atributos
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo_conta;
    private $data;
    private $login;

    public function __construct($login, $senha) {
      $this->login = $login;
      $this->senha = $senha;
    }

    //métodos
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setLogin($login) {
      $this->login = $login;
    }

    public function getLogin() {
      return $this->login;
    }

    public function setSenha($senha) {
      $this->senha = $senha;
    }

    public function getSenha() {
      return $this->senha;
    }

    public function dizer_ola($outro_nome) {
      echo "Olá $outro_nome, me chamo " . $this->nome;
    }
  }
?>
