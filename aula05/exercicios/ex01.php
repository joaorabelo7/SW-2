<?php

$produtos = [
    [
        "nome" => "Mouse Sem fio",
        "preco" => 150.00,
        "quantidade" => 15
    ],
    [
        "nome" => "Monitor OLED",
        "preco" => 890.90,
        "quantidade" => 5
    ],
    [
        "nome" => "Headset Sem fio",
        "preco" => 220.00,
        "quantidade" => 10
    ]
];

    $json_str = json_encode($produtos, JSON_PRETTY_PRINT);

    $arquivo = 'produtos.json';

    if (file_put_contents($arquivo, $json_str)) {
        echo "Sucesso! O arquivo <strong>$arquivo</strong> foi criado com os 3 produtos.";
    } else {
        echo "Erro ao tentar salvar o arquivo.";
    }
?>