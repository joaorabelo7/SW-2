<?php
    function show_array($vetor){

        foreach($vetor as $value) {
            echo $value . "<br>";
        }

    }

    $numbers = [1,2,3,4,5];

    show_array($numbers);


?>