<?php

  include_once 'class/Editor.php';

  $editor = new Editor();

  $editor->set_onde_vivo("Bairro de Fatima");

  echo $editor->exibeCabecalho()."</br>";
  echo "<table border='1'>";
    echo "<tr>";
      echo "<td>";
          echo "O Editor vive no ".$editor->get_onde_vivo()."</br>";
          echo '<hr>';
      echo "</td>";
    echo "</tr>";
  echo "</table>";
