<?php

require_once './Clases/Persona.php';

//Conjunto de funciones extra que se implementan en una clase
trait A 
{
    public function decirHola(): void
    {
        echo "Hola ";
    }
}

trait B
{
    public function decirMundo(): void
    {
        echo "mundo";
    }

    public abstract function saludar(): void;
}

trait C
{
    use A, B;

    public function saludar(): void
    {
        $this->decirHola();
        $this->decirMundo();
    }
}

class Venezolano extends Persona //Herencia
{
    use C;
}