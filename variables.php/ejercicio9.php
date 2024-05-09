<?php 

$vu= readline("Ingrese el valor del producto: ");
$cp= readline("Cantidad de productos: ");

$suma= $vu * $cp;
$iva= $suma * 16 / 100;

$resultado= $suma + $iva;

echo ("El costo total más iva es =  " . $resultado);

?>
