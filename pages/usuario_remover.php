<?php
    include('conexao.php');

    $id = $_GET["id"];

    $sql = "DElETE FROM usuarios WHERE id='$id'";
    $resultado = $conn->query($sql);
    header('location: ../index.php?pagina=usuario_listar');
    

?>