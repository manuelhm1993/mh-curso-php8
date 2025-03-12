<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait A 
{
    public function saludo(): void
    {
        echo "Hola mundo desde el trait A";
    }
}

trait B
{
    public function saludo(): void
    {
        echo "Hola mundo desde el trait B";
    }
}

class Venezolano extends Persona //Herencia
{
    //Si dos métodos tienen el mismo nombre se debe especificar cuál usar
    use A, B {
        B::saludo insteadOf A;
    }
}