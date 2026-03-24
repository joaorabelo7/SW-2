<?php

function somar($vetor){
        $soma = 0;

        foreach($vetor as $value) {
            $soma += $value;
        }
        return $soma;

    }

    echo somar([2,3,4,5]);





?>