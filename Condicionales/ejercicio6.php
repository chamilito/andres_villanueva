<?php

echo "Elija la figura geométrica para calcular su área:\n";
echo "1. Rectangulo\n";
echo "2. Cuadrado\n";
echo "3. Paralelogramo\n";
echo "4. Rombo\n";
echo "5. Trapecio\n";
echo "6. Triangulo\n";
echo "7. Triangulo equilatero\n";
echo "8. Triangulo rectangulo\n";
echo "9. Poligono regular\n";
$opcion = readline("Ingrese el número de opción: ");

if ($opcion == 1) {
    $lado = readline("Ingrese la longitud del lado del rectangulo: ");
    $lado2 = readline("Ingrese la longitud del otro lado del rectangulo: ");
    $area = $lado * $lado2;
    echo "El área del rectangulo es: " . $area . "\n";
}
elseif ($opcion == 2) {
    $lado = readline("Ingrese la longitud del lado del cuadrado: ");
    $area = $lado * $lado;
    echo "El área del cuadrado es: " . $area . "\n";
}
elseif ($opcion == 3) {
    $base = readline("Ingrese la base del paralelogramo: ");
    $altura = readline("Ingrese la altura del paralelogramo: ");
    $area = $base * $altura;
    echo "El área del paralelogramo es: " . $area . "\n";
}
elseif ($opcion == 4) {
    $ancho = readline("Ingrese el ancho del rombo: ");
    $altura = readline("Ingrese la altura del rombo: ");
    $area = ($ancho * $altura) / 2;
    echo "El área del rombo es: " . $area . "\n";
}
elseif ($opcion == 5) {
    $base = readline("Ingrese una base del trapecio: ");
    $base2 = readline("Ingrese la otra base del trapecio: ");
    $altura = readline("Ingrese la altura del trapecio: ");
    $area = (($base + $base2) * $altura) / 2;
    echo "El área del trapecio es: " . $area . "\n";
}
elseif ($opcion == 6) {
    $base = readline("Ingrese la base del triángulo: ");
    $altura = readline("Ingrese la altura del triángulo: ");
    $area = ($base * $altura) / 2;
    echo "El área del triángulo es: " . $area . "\n";
}
elseif ($opcion == 7) {
    $lado = readline("Ingrese la longitud de un lado del triángulo equilátero: ");
    $area = ($lado * $lado * 1.73) / 4;
    echo "El área del triángulo equilátero es: " . $area . "\n";
}
elseif ($opcion == 8) {
    $base = readline("Ingrese la base del triángulo rectángulo: ");
    $altura = readline("Ingrese la altura del triángulo rectángulo: ");
    $area = ($base * $altura) / 2;
    echo "El área del triángulo rectángulo es: " . $area . "\n";
}
elseif ($opcion == 9) {
    $lado = readline("Ingrese la longitud de un lado del polígono regular: ");
    $perimetro = readline("Ingrese el perímetro del polígono regular: ");
    $apotema = readline("Ingrese la longitud de la apotema del polígono regular: ");
    $area = ($perimetro * $apotema) / 2;
    echo "El área del polígono regular es: " . $area . "\n";
}

else {
    echo "Opción no válida\n";
}
?>