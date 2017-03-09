<?php
  class Carro {
    private $id;
    private $marca;
    private $modelo;
    private $qtd_porta;

    public function __construct($nova_marca, $novo_modelo){
      $this->marca = $nova_marca;
      $this->modelo = $novo_modelo;
    }

    public function set_id($novo_id){
      $this->id = $novo_id;
    }

    public function get_id(){
      return $this->id;
    }

    public function get_marca(){
      return $this->marca;
    }

    public function get_modelo(){
      return $this->modelo;
    }

    public function set_qtd_porta($nova_qtd_porta){
      $this->qtd_porta = $nova_qtd_porta;
    }

    public function get_qtd_porta(){
      return $this->qtd_porta;
    }

  }
