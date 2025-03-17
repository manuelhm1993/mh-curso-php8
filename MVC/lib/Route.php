<?php

namespace Lib;

class Route
{
    //Dar de alta las url válidas de la app
    private static array $routes = [];

    //Métodos
    //
    //Agrega rutas al array GET
    public static function get(string $url, callable $callback): void
    {
        self::$routes['GET'][$url] = $callback;
    }

    //Agrega rutas al array POST
    public static function post(string $url, callable $callback): void
    {
        self::$routes['POST'][$url] = $callback;
    }
}