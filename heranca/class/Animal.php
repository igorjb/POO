<<<<<<< HEAD
<?php
  class Animal {
    private $id;
    private $tipo_animal;
    private $tipo_comida_animal;
    private $nivel_fome_animal;
    private $comportamento_animal_ruido;
    private $comportamento_animal_comer;
    private $comportamento_animal_dormindo;
    private $altura_espaco_animal;
    private $largura_espaco_animal;
    private $coordenada_x_espaco_animal;
    private $coordenada_y_espaco_animal;

    public function __construct($tipo_animal, $tipo_comida_animal,
                                $comportamento_animal_ruido, $comportamento_animal_comer,
                                $comportamento_animal_dormindo){
      $this->tipo_animal = $tipo_animal;
      $this->tipo_comida_animal = $tipo_comida_animal;
      $this->comportamento_animal_ruido = $comportamento_animal_ruido;
      $this->comportamento_animal_comer = $comportamento_animal_comer;
      $this->comportamento_animal_dormindo = $comportamento_animal_dormindo;
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

    public function get_comportamento_animal_ruido(){
      return $this->comportamento_animal_ruido;
    }

    public function get_comportamento_animal_comer(){
      return $this->comportamento_animal_comer;
    }

    public function get_comportamento_animal_dormindo(){
      return $this->comportamento_animal_dormindo;
    }

  }
=======
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
>>>>>>> feature/testa-animal
