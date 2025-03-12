<?php

require_once './Clases/Persona.php';

$venezolano = new Venezolano;

$venezolano->set_apellido('Henriquez', 'Moreno');

echo $venezolano->get_apellido();