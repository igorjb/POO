<?php
  class Usuario {
    private $id;
    private $usuario;
    private $senha;
    private $email;
    private $tipo_conta;

    //métodos são funções!!!
    public function __construct($novo_usuario, $nova_senha){
      $this->usuario = $novo_usuario;
      $this->senha = $nova_senha;
    }

    public function set_id($novo_id){
      $this->id = $novo_id;
    }

    public function get_id(){
      return $this->id;
    }

    public function get_usuario(){
      return $this->usuario;
    }
    
    public function get_senha(){
      return $this->senha;
    }


    public function set_email($novo_email){
      $this->email = $novo_email;
    }

    public function get_email(){
      return $this->email;
    }

    public function set_tipo_conta($novo_tipo_conta){
      $this->tipo_conta = $novo_tipo_conta;
    }

    public function get_tipo_conta(){
      return $this->tipo_conta;
    }
  }
