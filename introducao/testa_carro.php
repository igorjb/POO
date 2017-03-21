<?php
  include_once 'class/Carro.php';

  $primeiro_carro = new Carro("Ford", "Fiesta");

  $primeiro_carro->set_id(1);
  $primeiro_carro->set_qtd_porta("duas");

  echo "ID: ".$primeiro_carro->get_id()."<br>";
  echo "Marca: ".$primeiro_carro->get_marca()."<br>";
  echo "Modelo: ".$primeiro_carro->get_modelo()." ".
                  $primeiro_carro->get_qtd_porta(). " portas<br>";
