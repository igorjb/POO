<?php
  include_once 'Usuario.php';

  class Professor extends Usuario {

    public function logar() {
      echo "Login de Usuário Professor";
    }
  }
