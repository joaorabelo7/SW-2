<?php

    $json = file_get_contents("produtos.json");
    $produtos = json_decode($json, true);

    $produtos[] = ["nome" => "Webcam", "preco" => 200.00, "quantidade" => 8];

    file_put_contents("produtos.json", json_encode($produtos, JSON_PRETTY_PRINT));

    echo "Item adicionado com sucesso!";
?>