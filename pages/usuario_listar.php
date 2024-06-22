<?php

  include('conexao.php');
    
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);
  
?>

<center>
  <h2 style="color:red"> LISTA DE CADASTRO </h2>
</center><br><br>

<div class="container">
  <table class="table table-bordered" class="container">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Usuario</th>
        <TH>Senha</TH>
        <TH>email</TH>
        <TH>permissao</TH>
        <TH>DataCadastro</TH>
        <Th>DataAtualização</Th>
        <TH>Status</TH>
        <th>Editar</th>
        <th>Remover</th>
      </tr>
    </thead>
    <?php
    while ($linha = $resultado->fetch_assoc()) {
      echo "<tr>
                      <td> " . $linha['id'] . " </td>   
                      <td> " . $linha['nome'] . " </td>
                      <td> " . $linha['usuario'] . " </td>
                      <td> " . $linha['senha'] . " </td>
                      <td> " . $linha['email'] . " </td>
                      <td> " . $linha['permissao'] . " </td>
                      <td> " . $linha['data_cadastro'] . "</td>
                      <td> " . $linha['data_atualizacao'] . "</td>
                      <td> " . $linha['status'] . " </td>
                      <td> <a href='index.php?pagina=usuario_edita&id=" . $linha['id'] . "'> editar </a></td>
                      <td> <a href='pages/usuario_remover.php?id=" . $linha['id'] . "'> remover </a> </td>
                      </tr>";
    }

    ?>

  </table><br><br>
</div>

<center> <a href="index.php?pagina=usuario_cadastro"> CADASTRAR </a> </center>