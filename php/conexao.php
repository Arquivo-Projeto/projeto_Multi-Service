<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "usuariosms";

    $conexao = new mysqli($host, $user, $password, $db);
    if($conexao->connect_error) {
        echo "falha ao conectar";
    } else {
        echo "Conexão efetuada com sucesso";
    }
?>