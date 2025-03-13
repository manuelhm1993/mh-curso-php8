<?php

namespace POO;

class UsoStatic
{
    //El método static le pertenece a la clase y no a una instancia
    public static function saludar(): void
    {
        echo "Hola mundo";
    }
}

//Se usa directamente la clase para invocar al método
UsoStatic::saludar();