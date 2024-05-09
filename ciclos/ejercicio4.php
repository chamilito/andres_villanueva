<?php

$suma= 0;
$numeros= 0;


while ($numeros < 10) {
  
    echo "Introduce un número: ";
    $numero = (float) fgets(STDIN);

    $suma += $numero;
    
    $numeros++;
}

$promedio = $suma / 10;

echo "La suma de los números es: " . $suma . "\n";
echo "El promedio de los números es: " . $promedio . "\n";

?>