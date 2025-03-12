<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait LatinoAmericano 
{
    public function saludo(): void
    {
        echo "Hola mundo";
    }
}

class Venezolano extends Persona //Herencia
{
    use LatinoAmericano;//Implementar trait

    public function saludo(): void
    {
        echo "Valar Morghulis";
    }
}