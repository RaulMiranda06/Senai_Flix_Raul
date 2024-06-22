<?php 

    session_start();
    include("pages/conexao.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $resultado = $conn->query($sql);

        if($resultado->num_rows > 0){
            $linha = $resultado-> fetch_assoc();

            $_SESSION['email'] = $linha['email'];
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['permissao'] = $linha['permissao'];

            header('location: index.php?pagina=home');
            exit();
        }else{
            echo "usuario ou senha invalido. ";
        }    
    }else{
        header('location: pages/login.php');
        exit();
    }

    $conn->close();
?>