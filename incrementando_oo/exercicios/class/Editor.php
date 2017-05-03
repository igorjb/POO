<?php
  include_once '../variaveis_estaticas/class/Usuarios.php';
  include_once '../metodos_estaticos/class/List_artigos.php';

  class Editor extends Usuarios{

    private $usuarios;

    public function Editor(){
      $usuarios = array();
    }

    public function addUsuario($novoUsuario) {
      $this->usuarios[] = $novoUsuario;
    }

    public function mostraUsuarios(){
      for($i=1; $i < count($this->usuarios); $i++){
        $obj = $this->usuarios[$i];

        echo List_artigos::separa_artigos($i);
        echo "Onde vivo: {$obj->get_onde_vivo()}</br>";
      }
    }

  }
