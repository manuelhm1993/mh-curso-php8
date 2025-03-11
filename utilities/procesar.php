<?php

$data = [];

//La variable super global $_REQUEST almacena la información sin importar el método
if(isset($_REQUEST['name']) && isset($_REQUEST['edad']) && isset($_REQUEST['sexo']) || isset($_REQUEST['roles'])) {
    $data['nombre'] = $_REQUEST['name'];
    $data['edad']   = $_REQUEST['edad'];
    $data['sexo']   = $_REQUEST['sexo'];
    $data['roles']  = $_REQUEST['roles'];
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
    else echo "<li>". ucfirst($i) .": {$item}</li>";
}
echo "</ul>";