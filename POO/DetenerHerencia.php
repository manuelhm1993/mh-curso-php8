<?php

namespace POO;

class DetenerHerencia
{
    private string $color;
    private string $seguridad;

    //La palabra reservada final delante de un método impide que este se pueda sobreescribir
    final public function saludar(): void
    {
        echo "Bienvenido a mi hogar";
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setSeguridad(string $seguridad): void
    {
        $this->seguridad = $seguridad;
    }

    public function getSeguridad(): string
    {
        return $this->seguridad;
    }
}

class Departamento extends DetenerHerencia
{
    public function saludar(): void
    {
        echo "Bienvenido a mi departamento";
    }
}

$obj = new Departamento;

echo $obj->saludar();