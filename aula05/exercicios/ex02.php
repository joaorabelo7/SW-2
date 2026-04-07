<?php

    $conteudo = file_get_contents("usuarios.json");

    $usuarios = json_decode($conteudo, true);

    foreach ($usuarios as $u) {
        echo "Nome: " . $u['nome'] . " - Email: " . $u['email'] . "<br>";
    }
?>