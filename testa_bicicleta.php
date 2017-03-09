<?php

include_once '/class/Bicicleta.php';

$primeira_bicicleta = new Bicicleta("Caloi", "Rouge");

$primeira_bicicleta->set_id(1);

echo "Meu ID é: ".$primeira_bicicleta->get_id().'<br>';
echo "Minha Bicicleta é: ".$primeira_bicicleta->get_marca().'<br>';
echo "Modelo da Bicicleta é: ".$primeira_bicicleta->get_modelo().'<br>';
