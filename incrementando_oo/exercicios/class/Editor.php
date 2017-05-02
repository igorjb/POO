<?php
  include_once '../variaveis_estaticas/class/Usuarios.php';
  include_once '../metodos_estaticos/class/List_artigos.php';

  class Editor extends Usuarios{

    private $a, $b;

    public function __construct() {

      $this->b = List_artigos::separa_artigos(1);
    }

    public function exibeCabecalho() {
      $this->b;
    }

  }
