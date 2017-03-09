<?php
  class Pessoa {
    private $id;
    private $nome;
    private $data_nasc;
    private $rg;
    private $cpf;

    public function __construct($novo_nome, $novo_rg, $novo_cpf){
      $this->nome = $novo_nome;
      $this->rg = $novo_rg;
      $this->cpf = $novo_cpf;
    }

    public function set_id($novo_id){
      $this->id = $novo_id;
    }

    public function get_id(){
      return $this->id;
    }

    public function set_nome($novo_nome){
      $this->nome = $novo_nome;
    }

    public function get_nome(){
      return $this->nome;
    }

    public function set_data_nasc($nova_data_nasc){
      $this->data_nasc = $nova_data_nasc;
    }

    public function get_data_nasc(){
      return $this->data_nasc;
    }

    public function set_rg($novo_rg){
      $this->rg = $novo_rg;
    }

    public function get_rg(){
      return $this->rg;
    }

    public function set_cpf($novo_cpf){
      $this->cpf = $novo_cpf;
    }

    public function get_cpf(){
      return $this->cpf;
    }
  }
