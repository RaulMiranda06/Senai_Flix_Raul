<?php
include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $permissao = $_POST['permissao'];
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;
        $sql = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha', email='$email', permissao='$permissao', data_atualizacao='$data_atualizacao' WHERE id='$id'";

        if ($conn->query($sql) == TRUE) {
            echo "cadastro atualizado";
            header('location: ../index.php?pagina=usuario_listar');
        } else {
            echo "erro ao cadastrar";
        }
    }   
?>