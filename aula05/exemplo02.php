<?php

$json_str = '{
    "empregados": [
        {"nome": "Jason Jones", "idade": 38, "sexo": "Faz"},
        {"nome": "Rabelo", "idade": 17, "sexo": "Nao faz"},
        {"nome": "Rxxn", "idade": 17, "sexo": "Faz muito"}
    ]
}';

$jsonObj = json_decode($json_str);


$empregados = $jsonObj->empregados;
echo"<pre>";
var_dump($empregados);
echo"</pre>";

foreach ($empregados as $e) {
    echo "Nome: $e->nome - Idade: $e->idade - Sexo: $e->sexo<br>";
}

?>