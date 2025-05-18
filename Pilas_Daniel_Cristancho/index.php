<?php
        

$pila = array();

array_push ($pila,"nevera");
array_push ($pila,"cafetera");
array_push ($pila,"televisor");
array_push ($pila,"ventilador");
array_push ($pila,"horno");
array_push ($pila,"licuadora");
array_push ($pila,"lavadora");
array_push ($pila,"alexa");
array_push ($pila,"aspiradora");


    $electrodomésticos = array_pop ($pila);

    echo "el ultimo elemento ingresado a la pila es: ".$electrodomésticos; 

?>