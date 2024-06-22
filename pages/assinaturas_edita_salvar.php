<?php
include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_GET['id'];
        $id_cliente = $_POST['id_cliente'];
        $plano = $_POST['plano'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;
        $sql = "UPDATE assinaturas SET id_cliente='$id_cliente', plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim', data_atualizacao='$data_atualizacao' WHERE id='$id'";

        if ($conn->query($sql) == TRUE) {
            echo "cadastro atualizado";
            header('location: ../index.php?pagina=assinaturas_listar');
        } else {
            echo "erro ao cadastrar";
        }
    }   
?>