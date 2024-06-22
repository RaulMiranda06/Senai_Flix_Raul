<?php
    include('conexao.php');

    $id = $_GET["id"];

    $sql = "DElETE FROM filmes WHERE id='$id'";
    $resultado = $conn->query($sql);
    header('location: ../index.php?pagina=filmes_listar');
    

?>