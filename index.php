<?php 
//Nombre de la constante y valor
define('CURSO', 'PHP 8 desde cero');
define('USUARIO_1', 'Manuel Henriquez');

//PHP 8 permite definir constantes arrays
define('ANIMALES', [
    'Perro',
    'Gato',
    'Castor',
    'León',
]);

//La constante no necesita el prefijo $
echo CURSO . '. Alumno ' . USUARIO_1;
echo '<br>';
echo ANIMALES[0];

echo '<br>';
//Comprobar si una constante existe
if (defined('CURSO')) {
    echo 'Está definido';
}
else {
    echo 'No está definido';
}

echo '<br>';
//Constantes predefinicas
echo 'Mi versión de php es: ' . PHP_VERSION;
echo '<br>';
echo 'Mi SO de php es: ' . PHP_OS;