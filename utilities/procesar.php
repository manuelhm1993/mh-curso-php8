<?php

$name = '';

//La variable super global $_REQUEST almacena la información sin importar el método
if(isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
}

echo "<p>El nombre del usuario es $name</p>";