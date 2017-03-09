<?php
  class Bicicleta{
    private id;
    private marca;
    private modelo;

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

    public function set_marca($nova_marca){
      $this->marca = $nova_marca;
    }

    public function get_marca(){
      return $this->marca;
    }

    public function set_modelo($novo_modelo){
      $this->modelo = $novo_modelo;
    }

    public function get_modelo(){
      return $this->modelo;
    }
    
  }
