<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait LatinoAmericano 
{
    public function saludoLatinoAmericano(): void
    {
        echo "Saludo latino";
    }
}

trait Europeo
{
    public function saludoEuropeo(): void
    {
        echo "Saludo europeo";
    }
}

class Venezolano extends Persona //Herencia
{
    use LatinoAmericano;//Implementar trait
}

class Aleman extends Persona //Herencia
{
    use Europeo;//Implementar trait
}