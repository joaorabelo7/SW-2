<?php
    //cria uma string no formato JSON
    $json_str = '{"Jason":38,"Ada":35,"Delphino":26}';

    //transforma a string em um array associativo
    $json_arr = json_decode($json_str, true);

    //exibe o array associativo
    var_dump($json_arr);

    echo"<br>";
    echo"<br>";

    foreach($json_arr as $chave => $valor){
        echo"A chvae é : $chave ==> $valor <br>";
    }
?>