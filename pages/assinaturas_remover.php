<?php
    include('conexao.php');

    $id = $_GET["id"];

    $sql = "DElETE FROM assinaturas WHERE id='$id'";
    $resultado = $conn->query($sql);
    header('location: ../index.php?pagina=assinaturas_listar');
    

?>