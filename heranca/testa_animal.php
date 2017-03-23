<?php
include_once 'class/Cachorro.php';

$primeiro_animal = new Cachorro("Pitbull");

$primeiro_animal->set_id(1);

echo "ID: ".$primeiro_animal->get_id()."<br>";
echo "Tipo de Animal: ".$primeiro_animal->get_tipo_animal()."<br>";
echo "Come: ".$primeiro_animal->comer()."<br>";
