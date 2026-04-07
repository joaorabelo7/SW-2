<?php

    $email_busca = "maria@email.com";
    $json = file_get_contents("usuarios.json");
    $usuarios = json_decode($json, true);
    $encontrou = false;

    foreach ($usuarios as $u) {
        if ($u['email'] == $email_busca) {
            echo "Usuário encontrado: " . $u['nome'];
            $encontrou = true;
            break;
    }
}

    if (!$encontrou) {
        echo "Mensagem de erro: Usuário não encontrado.";
    }
?>