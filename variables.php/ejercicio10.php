<?php 

$dt= readline("Indique la cantidad de dias trabajados");
$sdp= readline("Indique su pago de salario diario");

$multiplicación= $dt * $sdp;
$pys= $multiplicación * 25 /100 ;

$resultado= $multiplicación - $pys;



echo ("El salario a pagar diario es de" . $resultado);
?>

