<?php
    function multiplica($num){
        $i = 0;
        while($i <= 10){
            $multiplicacao = $i * $num;
            echo "$num * $i  = $multiplicacao" . "<br>";
            $i++;
        }
    }

    multiplica(10);


?>