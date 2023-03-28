<?php
//ESTRUCTURA REPETITIVA
    $numero = 5;
    $factorial = 1;
    for ($i=1; $i<=$numero; $i++){
        $factorial *= $i;
    }
    echo "El Factorial de $numero es: $factorial";
?>