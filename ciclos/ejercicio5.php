<?php

$num = readline("Ingrese el numero para mirar su tabla de multiplicar");

for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo $num . " x " . $i . " = " . $resultado . "\n";
}

?>