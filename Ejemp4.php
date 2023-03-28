<?php
//ESTRUCTURA CONDICIONAL
    $numero = 5695;
    $digitoU = $numero % 10;
    $digitoP = intdiv($numero, 1000);
    if($digitoP > $digitoU){
        echo "Los digitos son iguales";
    }else{
        echo "Los digitos son DEsiguales";
    }
?>