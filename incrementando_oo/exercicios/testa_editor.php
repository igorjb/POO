<?php

  include_once 'class/Editor.php';
  include_once '../variaveis_estaticas/class/Usuarios.php';
  $obj = new Editor();

  $usuario = new Usuarios();

  $usuario->set_onde_vivo("Bairro de Fatima");

  $obj->addUsuario($usuario);

  $usuario2 = new Usuarios();

  $usuario2->set_onde_vivo("Joaquim Tavora");

  $obj->addUsuario($usuario2);

  echo "<table border='1'>";
    echo "<tr>";
      echo "<td>";
          echo $obj->mostraUsuarios();
          echo '<hr>';
      echo "</td>";
    echo "</tr>";
  echo "</table>";
