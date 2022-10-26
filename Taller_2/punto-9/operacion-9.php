<?php
/* Un aprendiz desea saber cuál será su calificación final en cierta asignatura. Las notas que
se manejan son de 0 a 5.
• 30% el primer examen.
• 30% el segundo examen
• 40% el último examen
Pedir al usuario nombre, asignatura, las 3 notas de los exámenes y determinar la
calificación definitiva teniendo en cuenta los porcentajes dados. Además, para que el
aprendiz apruebe su calificación final debe ser mayor o igual a 4.0 */


$nota1 =$_POST['nota1'];
$nota2 =$_POST['nota2'];
$nota3 =$_POST['nota3'];

$examen1= 0.3 ;
$examen2= 0.3 ;
$examen3= 0.4;

$prom1 = $nota1 * $examen1;
$prom2 = $nota2 * $examen2;
$prom3 = $nota3 * $examen3;
$nota_fin = $prom1  +$prom2  + $prom3  ;

if ($nota_fin >= 4.0 ) {
    echo "Aprobaste con una nota de:  ".$nota_fin;
}else{
    echo "Reprobastecon una nota de:  ".$nota_fin;    
}
?>

