<?php

    $json = file_get_contents("produtos.json");
    $produtos = json_decode($json, true);
    $nome_remover = "Webcam";

    foreach ($produtos as $chave => $p) {
        if ($p['nome'] == $nome_remover) {
            unset($produtos[$chave]);
        }
    }

    file_put_contents("produtos.json", json_encode(array_values($produtos), JSON_PRETTY_PRINT));

    echo "Processo de remoção concluído.";
?>