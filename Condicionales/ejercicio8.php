<?php

$numero1 = readline("Ingrese el primer número: ");
$numero2 = readline("Ingrese el segundo número: ");
$numero3 = readline("Ingrese el tercer número: ");

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    $min = $numero1;
    if ($numero2 <= $numero3) {
        $medio = $numero2;
        $max = $numero3;
    } else {
        $medio = $numero3;
        $max = $numero2;
    }
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    $min = $numero2;
    if ($numero1 <= $numero3) {
        $medio = $numero1;
        $max = $numero3;
    } else {
        $medio = $numero3;
        $max = $numero1;
    }
} else {
    $min = $numero3;
    if ($numero1 <= $numero2) {
        $medio = $numero1;
        $max = $numero2;
    } else {
        $medio = $numero2;
        $max = $numero1;
    }
}

echo "En orden ascendente: $min, $medio, $max\n";

echo "En orden descendente: $max, $medio, $min\n";
?>