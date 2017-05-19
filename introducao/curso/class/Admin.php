<?php
  include_once 'Usuario.php';

  class Admin extends Usuario{

    private $cargo;

    public function __construct($login, $senha, $cargo) {
      parent::__construct($login, $senha);

      $this->cargo = $cargo;
    }

    public function setCargo($cargo) {
      $this->cargo = $cargo;
    }

    public function getCargo() {
      return $this->cargo;
    }


  }
