<?php
  class Animal {
    private $id;
    private $tipo_animal;
    private $tipo_comida_animal;
    private $nivel_fome_animal;
    private $altura_espaco_animal;
    private $largura_espaco_animal;
    private $coordenada_x_espaco_animal;
    private $coordenada_y_espaco_animal;
    private $comportamento_animal_vagueando_ambiente;

    public function __construct($tipo_animal, $tipo_comida_animal){
      $this->tipo_animal = $tipo_animal;
      $this->tipo_comida_animal = $tipo_comida_animal;
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

    public function get_tipo_comida_animal(){
      return $this->tipo_comida_animal;
    }

    public function set_nivel_fome_animal($novo_nivel_fome_animal) {
      $this->nivel_fome_animal = $novo_nivel_fome_animal;
    }

    public function get_nivel_fome_animal(){
      return $this->nivel_fome_animal;
    }

    public function set_altura_espaco_animal($nova_altura_espaco_animal){
      $this->altura_espaco_animal = $nova_altura_espaco_animal;
    }

    public function get_altura_espaco_animal(){
      return $this->altura_espaco_animal;
    }

    public function set_largura_espaco_animal($nova_largura_espaco_animal){
      $this->largura_espaco_animal = $nova_largura_espaco_animal;
    }

    public function get_largura_espaco_animal(){
      return $this->largura_espaco_animal;
    }

    public function set_coordenada_x_espaco_animal($nova_coordenada_x_espaco_animal){
      $this->coordenada_x_espaco_animal = $nova_coordenada_x_espaco_animal;
    }

    public function get_coordenada_x_espaco_animal(){
      return $this->coordenada_x_espaco_animal;
    }

    public function set_coordenada_y_espaco_animal($nova_coordenada_y_espaco_animal){
      $this->coordenada_y_espaco_animal = $nova_coordenada_y_espaco_animal;
    }

    public function get_coordenada_y_espaco_animal(){
      return $this->coordenada_y_espaco_animal;
    }

    public function set_comportamento_animal_vagueando_ambiente($novo_comportamento_animal_vagueando_ambiente)
    {
      $this->comportamento_animal_vagueando_ambiente = $novo_comportamento_animal_vagueando_ambiente;
    }

    public function get_comportamento_animal_vagueando_ambiente(){
      return $this->comportamento_animal_vagueando_ambiente;
    }
  }
