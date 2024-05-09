<?php 

$n1= readline("Ingrese la primer nota");
$n2= readline("Ingrese la segunda nota");
$n3= readline("Ingrese la tercera nota");
$n4= readline("Ingrese la cuarta nota");
$n5= readline("Ingrese la quinta nota");

$promedio= ($n1 + $n2 + $n3 + $n4 + $n5) / 5; 

if ($promedio >= 3.0){
    echo "Aprobo";
}
else {
    echo "No aprobo";
}