<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

$precio_volante =2000;
$precio_impresion = 5000;
$precio_tarjetas=500;

$total_valor1 = $valor1 * $precio_volante;
$total_valor2 = $valor2 * $precio_impresion;
$total_valor3 = $valor3 * $precio_tarjetas;




echo "El total de los volantes es            " .$total_valor1     ;
echo "<br>";
echo "El total de las impresiones es         ".$total_valor2;
echo "<br>";
echo "El total de las impresiones es         ".$total_valor3;
echo "<br>";

$valor_final = $total_valor1 + $total_valor2 + $total_valor3;

echo "Dando como resultado con la sumatoria".$valor_final;

?>