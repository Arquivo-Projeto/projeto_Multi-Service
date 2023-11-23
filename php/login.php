<?php
    $conexao = mysqli_connect("localhost","root","","usuariosms");

    if(!$conexao) {
        die("Erro ao conectar ao banco de dados:" . mysqli_connect_error());
    }
            
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
        
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "Login efetuado";
    } else {
        echo "Nome ou senha incorretos.";
    }

    $conexao->close();
?>