<?php

$numero_llantas= readline("Ingrese el numero de llantas a comprar"); 

if ($numero_llantas < 6) {
    $precio_unitario = 240000;
} elseif ($numero_llantas >= 6 && $numero_llantas <= 7) {
    $precio_unitario = 221000;
} elseif ($numero_llantas > 7) {
    $precio_unitario = 180000;
} else {
    echo "Número de llantas no válido.";
    exit();
}

$total_pago = $numero_llantas * $precio_unitario;

echo "Total a pagar por $numero_llantas llantas: $total_pago";

?>