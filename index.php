<?php 

$base = 5;
$exponente = 4;
$resultado = 1;
$i = 0;

while($i < $exponente)
{
    $resultado *= $base;
    $i++;
}

echo "{$base} ^ {$exponente} = {$resultado}";