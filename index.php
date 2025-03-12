<?php

require_once './Clases/Persona.php';

//Instancia de clase
$venezolano = new Venezolano;

//Invocar un método
$venezolano->set_nombre('Manuel Henriquez');

var_dump($venezolano);

$colombiano = new Colombiano;

var_dump($colombiano);