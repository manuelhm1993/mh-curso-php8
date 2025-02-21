<?php 
$a = 5;
$b = 51;

/*
if ($a > $b) {
    echo "El valor de a es mayor que el valor de b";
}
elseif ($a < $b) {
    echo "El valor de a es menor que el valor de b";
} 
else {
    echo "El valor de a es igual que el valor de b";
}*/

//El operador ternario debe colocarse entre paréntesis si se valida entre una cadena
echo "El valor de a es" . (($a > $b) ? " mayor " : (($a < $b) ? " menor " : " igual ")) . "que el valor de b";