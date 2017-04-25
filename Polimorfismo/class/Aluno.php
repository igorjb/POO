<?php
  include_once 'Usuario.php';

  class Aluno extends Usuario{

    //atributo que aluno tem mas, usuario não tem
    private $matricula;

    public function __construct($usuario, $senha, $matricula){

      parent::__construct($usuario, $senha);

      $this->matricula = $matricula;
    }

    public function get_matricula() {
      return $this->matricula;
    }

    public function logar() {
      echo "Login de Usuário Aluno";
    }
  }
