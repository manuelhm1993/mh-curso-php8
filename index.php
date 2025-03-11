<?php 

//Array multidimensional
$usuarios = [
    [
        'nombre'    => 'Manuel Henriquez',
        'email'     => 'manuelhm1993@gmail.com',
        'telefono'  => '04246827377',
        'direccion' => [
            'pais'   => 'Venezuela',
            'ciudad' => 'Maracaibo',
        ]
    ],
    [
        'nombre'   => 'Luna Lopez',
        'email'    => 'lunaisalp@gmail.com',
        'telefono' => '0414-6939793',
    ],
    [
        'nombre'   => 'Mayra Moreno',
        'email'    => 'mayra.moreno1959@gmail.com',
        'telefono' => '04246213686',
    ],
];

//Recorrido de un array
foreach($usuarios as $i => $usuario)
{
    echo "Usuario #" . ($i + 1) . "<br>";
    echo "- {$usuario['nombre']} <br>";
    echo "- {$usuario['email']} <br>";
    echo "- {$usuario['telefono']} <br>";
    echo "<hr>";
}