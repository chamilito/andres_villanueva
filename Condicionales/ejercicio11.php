<?php

$tp = readline("Ingresar el tamaño de pizza que quiere");

if ($tp == 1) {
 
echo "El tamaño de la pizza es pequeño y barato";

} else if($tp == 2){

echo "El tamaño de la pizza es mediano y decente";

}else if($tp == 3) {

    echo "El tamaño de la pizza es grande y caro";

}else {

    echo "Ingresar un tamaño valido";

}


?>