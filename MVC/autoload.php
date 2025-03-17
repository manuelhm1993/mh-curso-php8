<?php

spl_autoload_register(function($clase) {
    $ruta = "../" . str_replace("\\", "/", $clase) . ".php";

    (file_exists($ruta)) ? require_once $ruta : die("No se pudo carcar la clase $clase");
});
