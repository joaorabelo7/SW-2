<?php

function gera_numero($min, $max){
    $array = [];

    for ($i = 0; $i < 10; $i++) { 
        $array[] = rand($min, $max);
    }

    return $array;
}

$resultado = gera_numero(0, 15);
var_dump($resultado);

?>