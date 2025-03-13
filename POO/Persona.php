<?php

namespace POO;

require_once "Common.php";

class Persona 
{
    //Constructor a partir de php 8 se pueden declarar propiedades dentro del constructor directamente
    public function __construct(
            private string $nombre, 
            private string $apellido_paterno, 
            private string $apellido_materno, 
            private string $cedula
        )
    {}

    //Métodos
    public function get_nombre(): string
    {
        return $this->nombre;
    }

    public function get_apellido(): string
    {
        return "{$this->apellido_paterno} {$this->apellido_materno}";
    }

    public function get_cedula(): string
    {
        return $this->cedula;
    }

    public function set_nombre(string $nombre): Persona
    {
        $this->nombre = Common::formatear_texto($nombre);
        
        return $this;
    }

    public function set_apellido(string $apellido_paterno, string $apellido_materno = ''): Persona
    {
        $this->apellido_paterno = Common::formatear_texto($apellido_paterno);
        $this->apellido_materno = Common::formatear_texto($apellido_materno);
        
        return $this;
    }

    public function set_cedula(string $cedula): Persona
    {
        $this->cedula = $cedula;
        
        return $this;
    }

    public function imprimirDatos(): void
    {
        echo "<ul>";
            echo "<li>Nombre: {$this->nombre}</li>";
            echo "<li>Apellido paterno: {$this->apellido_paterno}</li>";
            echo "<li>Apellido materno: {$this->apellido_materno}</li>";
            echo "<li>Cédula: {$this->cedula}</li>";
        echo "</ul>";
    }
}

$persona = new Persona("Manuel", "Henriquez", "Moreno", "22476796");

$persona->imprimirDatos();