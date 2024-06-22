<?php
include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $ano_lancamento = $_POST['ano_lancamento'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;
        $sql = "UPDATE filmes SET titulo='$titulo', descricao='$descricao', ano_lancamento='$ano_lancamento', genero='$genero', classificacao='$classificacao', data_atualizacao='$data_atualizacao' WHERE id='$id'";

        if ($conn->query($sql) == TRUE) {
            echo "cadastro atualizado";
            header('location: ../index.php?pagina=filmes_listar');
        } else {
            echo "erro ao cadastrar";
        }
    }   
?>