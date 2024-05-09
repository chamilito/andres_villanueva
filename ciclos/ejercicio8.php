<?php

$triangulo = 4;
$numero = 1;


for ($i = 1; $i <= $triangulo; $i++) {

    for ($espacios = $triangulo - $i; $espacios > 0; $espacios--) {
        echo " ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo $numero . " ";
        $numero++;
    }
    echo "\n";
}

?>