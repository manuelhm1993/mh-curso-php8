<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait A 
{
    protected function saludo(): void
    {
        echo "Hola mundo desde el trait A";
    }
}

class Venezolano extends Persona //Herencia
{
    //Cambiar la visibilidad de un método del trait
    use A { 
        saludo as public; 
    }
}