<?php
$precio = $_POST['precio'];

$valor_fin = $precio * 0.20;




if($valor_fin > 20000){
    echo"se hizo el descuento debes pagar".$valor_fin;
}else{
    echo"no se hizoo el descuento debes pagar".$precio;
}
?>