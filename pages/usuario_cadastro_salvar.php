<?php
include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $permissao = $_POST['permissao'];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;
        
        $sql = "INSERT INTO usuarios (nome, usuario, senha, email, permissao, data_cadastro, data_atualizacao, status) VALUES ('$nome', '$usuario', '$senha',
    '$email', '$permissao', '$data_cadastro', '$data_atualizacao','$status')";

        if ($conn->query($sql) == TRUE) {
            header('location: ../index.php?pagina=usuario_listar');
        } else {
            echo "erro ao cadastrar";
        }
    }   
?>