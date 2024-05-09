<?php

$cuenta= readline("Ingrese el monto de la cuenta"); 

if ($cuenta < 150000) {
    echo "Pago en efectivo.";
} elseif ($cuenta >= 150000 && $cuenta <= 300000) {
    echo "Pago con celular (dinero electrónico).";
} elseif ($cuenta > 300000 && $cuenta <= 600000) {
    echo "Pago con tarjeta de débito.";
} elseif ($cuenta > 600000) {
    echo "Pago con tarjeta de crédito.";
} else {
    echo "Monto no válido.";
}

?>