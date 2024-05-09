<?php

$cantidad_articulos= readline("Ingrese la cantidad de productos a pagar"); 
$precio_unitario_original = 10000; 

if ($cantidad_articulos <= 5) {
    $descuento = 0;
} elseif ($cantidad_articulos < 10) {
    $descuento = 5; // 5% de descuento
} else {
    $descuento = 8; // 8% de descuento
}

$precio_con_descuento = $precio_unitario_original - ($precio_unitario_original * ($descuento / 100));
$total_pago = $cantidad_articulos * $precio_con_descuento;

echo "Cantidad de artículos: $cantidad_articulos\n";
echo "Precio unitario original: $precio_unitario_original\n";
echo "Descuento aplicado: $descuento%\n";
echo "Total a pagar: $total_pago";

?>