<?php

$factorial = readline("Ingrese numero para hallar su factorial");
$i=$factorial;
$result= 1;

while($i > 1){
    $result *=$i;
    $i--;
} 
echo $result;


?>