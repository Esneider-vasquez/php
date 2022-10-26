<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

if ($valor1 > $valor2  ) {
    $diferencia_hermano1 = $valor1 - $valor2;    
    echo "La edad del heramno mayor tiene: " .$valor1. " y tiene ".$diferencia_hermano1."  años"." de diferencia";
} else {
    $diferencia_hermano2 = $valor2 - $valor1;  
    echo "La edad del heramno mayor tiene:  " .$valor1. " y tiene ".$diferencia_hermano2." años"." de diferencia";
} 
?>