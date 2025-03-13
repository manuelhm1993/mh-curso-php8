<?php

namespace POO;

class Common 
{
    public static function formatear_texto(string $texto): string
    {
        return ucwords(strtolower($texto));
    }
}