<?php

  class Usuarios {

    private static $onde_vivo = "Planeta Agua";

    private static $onde_moro = "Joaquim Tavora";

    public function set_onde_vivo($onde_vivo) {
      self::$onde_vivo = $onde_vivo;
    }

    public function get_onde_vivo() {
      return self::$onde_vivo;
    }

    public function set_onde_moro($onde_moro) {
      self::$onde_moro = $onde_moro;
    }

    public function get_onde_moro() {
      return self::$onde_moro;
    }

  }
