<?php
    $conexao = mysqli_connect("localhost","root","","usuariosms");

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        header("location: ../html/cadastroEFE.html");
    } 
    $conexao->close();
?>