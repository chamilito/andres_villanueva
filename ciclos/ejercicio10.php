<?php

$z = 7;

for ($i = 1; $i <= $z; $i++) {
    for ($j = 1; $j <= $z; $j++) {
        if ($i == 1 || $i == $z || $j == $z - $i + 1) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>