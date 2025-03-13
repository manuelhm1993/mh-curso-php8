<?php

namespace POO;

class UsoStatic
{
    private static string $nombre = "Manuel Henriquez";

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

class Humano extends UsoStatic
{
    public function saludoHumano(): void
    {
        echo "Hola mundo, " . parent::getNombre();
    }
}

$obj = new Humano;

$obj->saludoHumano();