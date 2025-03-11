<?php

class Persona 
{
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function get_nombre(): string
    {
        return $this->nombre;
    }

    public function get_apellido(): string
    {
        return $this->apellido;
    }

    public function get_edad(): int
    {
        return $this->edad;
    }

    public function set_nombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function set_apellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function set_edad(int $edad): void
    {
        $this->edad = $edad;
    }
}