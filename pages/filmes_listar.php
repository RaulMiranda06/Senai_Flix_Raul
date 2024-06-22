<?php

  include('conexao.php');
    
    $sql = "SELECT * FROM filmes";
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
        <th>Titulo</th>
        <th>Descricao</th>
        <TH>Ano_lancamento</TH>
        <TH>Genero</TH>
        <TH>Classifcacao</TH>
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
                      <td> " . $linha['titulo'] . " </td>
                      <td> " . $linha['descricao'] . " </td>
                      <td> " . $linha['ano_lancamento'] . " </td>
                      <td> " . $linha['genero'] . " </td>
                      <td> " . $linha['classificacao'] . " </td>
                      <td> " . $linha['data_cadastro'] . "</td>
                      <td> " . $linha['data_atualizacao'] . "</td>
                      <td> " . $linha['status'] . " </td>
                      <td> <a href='index.php?pagina=filmes_edita&id=" . $linha['id'] . "'> editar </a></td>
                      <td> <a href='pages/filmes_remover.php?id=" . $linha['id'] . "'> remover </a> </td>
                      </tr>";
    }

    ?>

  </table><br><br>
</div>

<center> <a href="index.php?pagina=filmes_cadastro"> CADASTRAR </a> </center>