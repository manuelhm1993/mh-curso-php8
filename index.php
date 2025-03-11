<?php 

function concatenar(...$palabras)
{
    $frase = "";

    foreach($palabras as $palabra)
    {
        $frase .= "{$palabra} ";
    }

    return $frase;
}

echo concatenar('Estoy', 'aprendiendo', 'php');