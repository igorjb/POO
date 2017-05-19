<?php
  include_once 'Usuario.php';

  class Admin extends Usuario{

    private $cargo;

    public function setCargo($cargo) {
      $this->cargo = $cargo;
    }

    public function getCargo() {
      return $cargo;
    }

  }
