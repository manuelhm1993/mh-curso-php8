<?php

require_once './Clases/Persona.php';

$persona = new Persona('MaNueL AleJandro', 'Henriquez Moreno', 31);
$persona2 = new Persona('Luna Isabel', 'Lopez', 26);

echo "Nombre de la persona 1: " . $persona->get_nombre();
echo "<br>";
echo "Nombre de la persona 2: " . $persona2->get_nombre();