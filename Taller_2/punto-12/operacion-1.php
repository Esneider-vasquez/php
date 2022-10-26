<?php

/* Calcular el interés mensual generado por un capital. La tasa de interés mensual
depende del capital que fue depositado. Si el capital es menor a $500 pesos, la tasa
de interés será del 2% mensual. Si el capital es mayor o igual a $500 pesos pero
menor a $1.500 pesos, el interés será del 4.5%, y si el capital es mayor o igual a
$1.500 pesos la tasa de interés será del 7%. Se debe ingresar el capital y mostrar el
capital ingresado y el total del capital + los intereses. */

$capital = $_POST['cap'];
$interes1 = 0.2;
$interes2 = 0.045;
$interes3 = 0.07;
$suma_interes1 =   $capital * $interes1 + $capital;
$suma_interes2 = $capital * $interes2 + $capital;
$suma_interes3 = $capital * $interes3 + $capital;

if ($capital < 500) {
    $capital * $interes1;
    echo "Su interes sera de: ".$suma_interes1;
} 

elseif (($capital >= 500) && ($capital < 1500)){
   $capital * $interes2;
   echo "Su interes sera de ".$suma_interes2;
}if ($capital >= 1500) {
    $capital * $interes3;
    echo "Su interes sera de ".$suma_interes3;
    
}


?>