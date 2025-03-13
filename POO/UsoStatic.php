<?php

namespace POO;

class UsoStatic
{
    private static string $nombre;

    //El método static le pertenece a la clase y no a una instancia
    public static function saludar(): void
    {
        echo "Hola mundo";
    }

    public static function getNombre(): string
    {
        return self::$nombre;
    }

    public static function setNombre(string $nombre): void
    {
        self::$nombre = $nombre;
    }

    public function saludoPersonalizado(): void
    {
        echo "Hola " . self::$nombre;
    }
}

//Se usa directamente la clase para invocar al método
UsoStatic::setNombre('Manuel Henriquez');

$obj = new UsoStatic;

$obj->saludoPersonalizado();