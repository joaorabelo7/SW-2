<?php


function gera_fatorial($num){
    $fatorial = 1;
    for ($i=1; $i <= $num ; $i++) { 
        $fatorial *= $i;
    }
    return "o fatorial de $num é: $fatorial";
}

echo gera_fatorial(3);

?>