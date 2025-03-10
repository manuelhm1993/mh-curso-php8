<?php 

$base = 2;
$exponente = 3;
$resultado = 1;

for($i = 0; $i < $exponente; $i++)
{
    $resultado *= $base;
}

echo "{$base} ^ {$exponente} = {$resultado}";