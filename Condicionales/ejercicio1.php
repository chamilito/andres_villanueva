<?php 

$n= readline("Ingrese un numero");

if ($n == 0) {
    echo "El numero es cero";
}
else if ($n % 2 == 0) {
    echo "El numero es par";
}
else {
    echo "El numero es impar";
}

?>