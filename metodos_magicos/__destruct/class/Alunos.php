<?php
  include_once "..\..\metodos_magicos\__construct\class\Usuario.php";

  class Alunos extends Usuario {

    //atributo que aluno tem mas, usuario não tem
    private $matricula;

    public function __construct($usuario, $senha, $matricula){

      parent::__construct($usuario, $senha);

      $this->matricula = $matricula;
    }

    public function get_matricula() {
      return $this->matricula;
    }

    public function app() {
      echo "Oi, sou um aluno!<br/>";
    }

    public function __destruct() {
      echo "O objeto foi finalizado";
    }
  }
