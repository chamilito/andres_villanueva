<?php

$edad= readline("Ingrese su edad"); 
$genero= readline("Digite 1:Femenino 0 2:Masculino"); 

if ($genero == 1) {
    $num_pulsaciones = (220 - $edad) / 10;
} elseif ($genero == 2) {
    $num_pulsaciones = (210 - $edad) / 10;
} else {
    echo "Género no válido.";
    exit();
}

echo "Número de pulsaciones: $num_pulsaciones por cada 10 segundos.";

?>