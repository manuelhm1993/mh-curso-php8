<?php

$data = [];

//La variable super global $_REQUEST almacena la información sin importar el método
if((isset($_REQUEST['name']) && isset($_REQUEST['edad']) && isset($_REQUEST['sexo']) )
    || (isset($_REQUEST['roles']) || isset($_REQUEST['roles']) || isset($_REQUEST['mensaje']))) {
    $data['nombre']  = $_REQUEST['name'];
    $data['edad']    = $_REQUEST['edad'];
    $data['sexo']    = $_REQUEST['sexo'];
    $data['roles']   = $_REQUEST['roles'];
    $data['mensaje'] = $_REQUEST['mensaje'];
    //Guardar imagenes
    $data['imagen'] = $_FILES['imagen'];
}

echo "<ul>";
foreach($data as $i => $item)
{
    if($i == 'roles')
    {
        echo "<li>" . ucfirst($i) .": ";
        echo "<ul>";
        foreach($item as $rol)
        {
            echo "<li>".ucfirst($rol)."</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    elseif($i == 'imagen')
    {
        //Capturar la ruta temporal del archivo
        $tmp  = $data['imagen']['tmp_name'];

        //Asignar la nueva ruta y el nombre del archivo
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= '/cursos/mh-curso-php8/assets/img';
        $path .= "/".time()."{$data['imagen']['name']}";

        move_uploaded_file($tmp, $path);
    }
    else
    {
        echo "<li>". ucfirst($i) .": {$item}</li>";   
    }
}
echo "</ul>";