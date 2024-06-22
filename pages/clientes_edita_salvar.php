<?php
include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $foto = $_FILES['foto'];
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;

        $diretorio_destino = "../uploads/"; 

        $sql = "SELECT foto FROM clientes WHERE id='$id'";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();

        unlink($diretorio_destino. $linha["foto"]);

        $nome_arquivo = uniqid().'_'.basename($foto['name']);
        $caminho_arquivo = $diretorio_destino. $nome_arquivo; 
        $extensoes_permitidas = array("jpg", "jpeg", "png");
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        if(!in_array ($extensao, $extensoes_permitidas)){
            echo "Somente arquivos Jpg, Jpeg, Png são permitidas";
            exit;
        }

        if(move_uploaded_file($foto["tmp_name"], $caminho_arquivo)){
            echo"o arquivo foi enviado com sucesso";
        }else{
            echo "erro ao enviar arquivo";
        }   

        $sql = "UPDATE clientes SET nome='$nome', foto='$nome_arquivo', cpf='$cpf', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', email='$email', telefone='$telefone',
        data_atualizacao='$data_atualizacao' WHERE id='$id'";
        
        $result = mysqli_query($conn, $sql);
        if ($conn->query($sql) == TRUE) {
            echo "cadastro atualizado";
            header('location: ../index.php?pagina=clientes_listar');
        } else {
            echo "erro ao cadastrar";
        }
    }   
?>