<?php

use POO\Namespaces\Carpeta1\Humano;
use POO\Namespaces\Carpeta2\Humano as Humano2; //Alias de namespace

require_once "./POO/Namespaces/Carpeta1/Humano.php";
require_once "./POO/Namespaces/Carpeta2/Humano.php";

$humano1 = new Humano;

$humano1->saludar();

echo '<br>';

$humano2 = new Humano2;

$humano2->saludar();