<?php
    function gera_numero($min, $max, $vezes){
        for ($i=0; $i < $vezes; $i++) { 
            $sorteio = rand($min, $max);
            echo $sorteio. "<br>";
        }
    }

    gera_numero(20,25,4);



?>