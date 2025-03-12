<?php

//Clase que define la herencia y no se puede instanciar
abstract class Abstracta 
{
    protected abstract function getValor(): string;
    protected abstract function valorPrefijo($valor): void;

    public function imprimir(): void
    {
        echo $this->getValor();
    }
}

class NuevaClase extends Abstracta
{
    protected function getValor(): string
    {
        return "Hola mundo";
    }

    protected function valorPrefijo($valor): void
    {
        
    }
}