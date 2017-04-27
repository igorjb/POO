<?php

class List_artigos {
  public static function separa_artigos($n_artigos) {
    for ($i=1; $i <= $n_artigos ; $i++) {
      echo '<h2> Artigo '.$i.'</h2>';
      echo "Conteudo<br>";
      echo '<hr>';
    }
  }
}
