<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

$pganados= 3;
$pperdidos = 0;
$pempatados= 2;

$points_win = $valor1 * $pganados; 
$lose = $valor2 * $pperdidos; 
$igual = $valor3 * $pempatados; 

$puntos = $points_win + $lose + $igual; 

echo "pganados + pperdidos + pempatados =".$puntos;




?>


