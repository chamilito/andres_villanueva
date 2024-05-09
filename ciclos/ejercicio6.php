<?php

$triangulo = 5;


for ($i = 1; $i <= $triangulo; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}


for ($i = $triangulo - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>