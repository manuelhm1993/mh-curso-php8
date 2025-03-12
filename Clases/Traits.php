<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait Hola 
{
    public function decirHola(): void
    {
        echo "Hola";
    }
}

trait Mundo
{
    public function decirMundo(): void
    {
        echo " mundo";
    }
}

class Venezolano extends Persona //Herencia
{
    use Hola, Mundo;
}