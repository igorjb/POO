<?php
  include_once "..\metodos_magicos\__construct\class\Usuario.php";
  include_once "bons_modos_aula.php";

  class Alunos extends Usuario implements bons_modos_aula{

    //atributo que aluno tem mas, usuario não tem
    private $matricula;

    public function __construct($usuario, $senha, $matricula){

      parent::__construct($usuario, $senha);

      $this->matricula = $matricula;
    }

    public function get_matricula() {
      return $this->matricula;
    }

    public function obrigado() {
      return "A EGP agradece sua atencao";
    }

    public function bom_dia() {

    }

    public function com_licenca($nome) {
      return "Com Licenca: ".$nome. "<br/>";
    }
  }
