<?php

require_once './Clases/Common.php';

class Persona 
{
    //Propiedades
    private string $nombre;
    private string $apellido1;
    private string $apellido2;
    private int $edad;

    //Métodos
    public function get_nombre(): string
    {
        return $this->nombre;
    }

    public function get_apellido(): string
    {
        return "{$this->apellido1} {$this->apellido2}";
    }

    public function get_edad(): int
    {
        return $this->edad;
    }

    public function set_nombre(string $nombre): void
    {
        $this->nombre = Common::formatear_texto($nombre);
    }

    public function set_apellido(string $apellido1, string $apellido2 = ''): void
    {
        $this->apellido1 = Common::formatear_texto($apellido1);
        $this->apellido2 = Common::formatear_texto($apellido2);
    }

    public function set_edad(int $edad): void
    {
        $this->edad = $edad;
    }
}

class Venezolano extends Persona //Herencia
{
    private string $urbanizacion;
    private string $ciudad;
}

class Colombiano extends Persona //Herencia
{
    private string $departamento;
    private string $region;

    //Sobreescritura de métodos
    public function set_apellido(string $apellido1, string $apellido2 = ''): void
    {
        //Llamar al método de la clase padre
        parent::set_apellido($apellido2, $apellido1);
    }
}