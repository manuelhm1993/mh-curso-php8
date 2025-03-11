<?php

require_once './Clases/Persona.php';

$persona = new Persona;

$persona->set_nombre('Manuel Alejandro');
$persona->set_apellido('Henriquez Moreno');
$persona->set_edad(31);

$persona2 = new Persona;

$persona2->set_nombre('Luna Isabel');
$persona2->set_apellido('Lopez');
$persona2->set_edad(26);

echo "Nombre de la persona 1: " . $persona->get_nombre();
echo "<br>";
echo "Nombre de la persona 2: " . $persona2->get_nombre();