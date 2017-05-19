<?php
  include_once 'class/Usuario.php';
  include_once 'class/Admin.php';

  $admin = new Admin();

  $admin->setNome("Igor");
  $admin->dizer_ola("Pedro");


?>
