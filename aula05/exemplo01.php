<?php

    $json_str = '{"nome": "Pedro",
                    "idade": 17,
                    "sexo": "Fasso"
                }';



    $obj = json_decode($json_str);


    echo"<pre>";
    var_dump($obj);
    echo"</pre>";

    echo"<hr>";

    echo"Nome: $obj->nome <br>";
    echo"Idade: $obj->idade <br>";
    echo"Sexo: $obj->sexo<br>";



?>