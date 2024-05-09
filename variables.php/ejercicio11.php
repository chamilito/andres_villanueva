<?php 

$numero= readline("Ingrese un numero: ");
$x= $numero / 2;
while (true) {
    $y = ($x + $numero / $x) / 2;
    if (abs($y - $x) < 0.00001) {
        $resultado = $y;
        break;
    }
    $x = $y;
}

echo ("El cuadrado del numero es " . $resultado);

?>