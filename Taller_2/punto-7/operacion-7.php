<?php
$nombre = $_GET['nombre'];
$materia = $_GET['asignatura'];
$nota = $_GET['nota'];



if ($nota <7) {
    echo "Reprobaste la asignatura: " .$materia;   
}else{
     echo "Aprobaste la asignatura:  " .$materia;
    }
?>
