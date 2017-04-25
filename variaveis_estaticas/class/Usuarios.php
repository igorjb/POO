<?php

  class Usuarios {

    private static $onde_vivo = "Planeta Agua";

    public function set_onde_vivo($onde_vivo) {
      self::$onde_vivo = $onde_vivo;
    }

    public function get_onde_vivo() {
      return self::$onde_vivo;
    }
  }
