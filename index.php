<?php 

function factorial($n)
{
    if($n == 0) {
        return 1;
    }
    else {
        return $n * factorial($n - 1);
    }
}

$n = 9;

echo "!{$n} = " . factorial($n);