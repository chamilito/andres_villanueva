<?php 

$c1= readline("Ingrese el valor del cateto");
$c2= readline("Ingrese el valor del segundo cateto");

$potencia1= $c1 ** 2;
$potencia2= $c2 **2;

$suma= $potencia1 + $potencia2;


$resultado= $suma / ($suma ** (1/2));


echo ("La hipotenusa del triangulo es " . $resultado);