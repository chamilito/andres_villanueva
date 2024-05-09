<?php


echo "Ingrese su peso en kilogramos (P): ";
$peso = floatval(readline());

echo "Ingrese su estatura en metros (E): ";
$estatura = floatval(readline());

$resultado_imc = $peso / ($estatura * $estatura);

if ($resultado_imc < 18.5) {
    $estado = "Bajo de peso";

} elseif ($resultado_imc >= 18.5 && $resultado_imc < 24.9) {
    $estado = "Normal";

} elseif ($resultado_imc >= 25 && $resultado_imc < 29.9) {
    $estado = "Sobrepeso";

} elseif ($resultado_imc >= 30 && $resultado_imc < 34.9) {
    $estado = "Obesidad Grado 1";

} elseif ($resultado_imc >= 35 && $resultado_imc < 39.9) {
    $estado = "Obesidad Grado 2";

} elseif ($resultado_imc >= 40 && $resultado_imc < 49.9) {
    $estado = "Obesidad Grado 3";

} else {
    $estado = "Obesidad Grado 4";
}


echo "Su IMC es: $resultado_imc";
echo "Su estado de salud es: $estado";




?>