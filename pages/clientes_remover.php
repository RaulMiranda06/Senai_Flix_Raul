<?php
    include'conexao.php';

    $id = $_GET["id"];

    $sql = "SELECT foto FROM clientes WHERE id='$id'";
    
    $resultado = $conn->query($sql);
    
    $linha = $resultado->fetch_assoc();
    
    $diretorio_destino = "../uploads/"; 

    unlink($diretorio_destino. $linha["foto"]);
    
    $sql = "DElETE FROM clientes WHERE id='$id'";
    
    $conn->query($sql);
    

    header("location:../index.php?pagina=clientes_listar");
    

?>