<?php

include_once '/class/Bicicleta.php';

$primeira_bicicleta = new Bicicleta("Caloi", "Rouge");

$primeira_bicicleta->set_id(1);

echo "Meu ID &eacute;: ".$primeira_bicicleta->get_id().'<br>';
echo "Minha Bicicleta &eacute;: ".$primeira_bicicleta->get_marca().'<br>';
echo "Modelo da Bicicleta &eacute;: ".$primeira_bicicleta->get_modelo().'<br>';
