<?php
/* 
Desarrolle un programa, pida al usuario la edad y el sexo, para que la computadora le
indique si ya puede jubilarse. Tenga en cuenta que un Hombre se puede jubilar cuando
tenga 63 años en adelante, en cambio, una mujer mayor se jubilara si tiene más de 54
años.
 */
/* $sexo = $_POST['sexo'];
$edad = $_POST['edad'];
if ($sexo == "M" && $edad >= 63 ) {
    echo"usted es hombre mayor de 63 años y por lo tanto se puede jubilar";
}elseif($sexo == "F" && $edad > 54 ){
    echo "Usted es mujer mayor de 54 años y por lo tanto se puede jubilar";
    
}else{
    echo "Usted no se puede jubilar porque no cumple con la edad";
} */

//opcion dos
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];

if ($sexo=="M"){
    if($edad>=63){
        echo"usted es hombre mayor de 63 años y por lo tanto se puede jubilar";
    }else{
        echo"usted es hombre menor de 63 años y por lo tanto no se puede jubilar";
    }
}elseif ($sexo=="F"){
    if($edad>54){
        echo"usted es mujer mayor de 54  años y por lo tanto se puede jubilar";
    }else{
        echo"usted es mujer menor de 54 años y por lo tanto no se puede jubilar";
    }
}

?>