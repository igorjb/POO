<?php
  class Animal {
    private $id;
    private $tipo_animal;

    public function __construct($tipo_animal)
    {
      $this->tipo_animal = $tipo_animal;
    }

    public function set_id($novo_id){
      $this->id = $novo_id;
    }

    public function get_id(){
      return $this->id;
    }

    public function get_tipo_animal(){
      return $this->tipo_animal;
    }
  }
