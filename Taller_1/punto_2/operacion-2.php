<?php
$valor1 = $_POST['Nombre'];
$valor2 = $_POST['Materia'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
$valor5 = $_POST['valor5'];


$total = ($valor3 + $valor4 + $valor5) /3;

echo "Nombre del estudiante" .$valor1;
echo "<br>";
echo "promedio de la nota es".$total;

/* 
echo "La distancia rrecorrica es   " .$total;
 */
?>




