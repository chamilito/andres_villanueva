<?php 

$nombre= readline("Ingrese su nombre");
$edad= readline("Ingrese su edad");

if ($edad >=100 || $edad < 0 ){
    echo"Ingresar una edad valida";
    
}
else if ($edad >= 18){
    echo "Usted es mayor de edad";
}
else{
    echo "Usted es menor de edad";
}






?>