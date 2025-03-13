<?php

namespace POO;

//La palabra reservada final delante de una clase detiene la herencia
final class DetenerHerencia
{
    private string $color;
    private string $seguridad;

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