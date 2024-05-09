<?php 

$numeros= array();

for($i= 0; $i< 10; $i++){
    echo "Ingrese el numro", ($i+1), ":";
    $numero= floatval(trim(fgets(STDIN)));

    $numeros[]= $numero;
}
$suma = array_sum($numeros);
$promedio = $suma / count($numeros);

echo "La suma de los números es: ", $suma, "\n";
echo "El promedio de los números es: ", $promedio, "\n";

?>