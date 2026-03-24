<?php

    function parImpar($num){
        $resto = $num % 2; 
        if($resto == 0) {
            return "O $num é PAR";
        }else{
            return "O $num é IMPAR";
        }
    }

    echo parImpar(5);





?>