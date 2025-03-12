<?php

//Clase que define la herencia y no se puede instanciar
abstract class Abstracta 
{
    protected abstract function getValor(): string;
    public abstract function valorPrefijo(string $valor): string;

    public function imprimir(): void
    {
        echo $this->getValor();
    }
}

class NuevaClase extends Abstracta
{
    private string $message = 'Luna';

    protected function getValor(): string
    {
        return "Hola mundo";
    }

    //Siempre que respete la estructura principal, se puede modificar a gusto
    public function valorPrefijo(string $valor, string $separador = ' '): string
    {
        return "{$valor}{$separador}{$this->message}";
    }
}