<?php

include('conexao.php');

    $sql = "SELECT * FROM assinaturas";
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
        <th>Id_cliente</th>
        <th>plano</th>
        <th>data_inicio</th>
        <th>data_fim</th>
        <th>DataCadastro</th>
        <th>DataAtualização</th>
        <th>Status</th>
        <th>Editar</th>
        <th>Remover</th>
      </tr>
    </thead>
    <?php
    while ($linha = $resultado->fetch_assoc()) {
      echo "<tr>
                <td> " . $linha['id'] . " </td>   
                <td> " . $linha['id_cliente'] . " </td>
                <td> " . $linha['plano'] . " </td>
                <td> " . $linha['data_inicio'] . " </td>
                <td> " . $linha['data_fim'] . " </td>
                <td> " . $linha['data_cadastro'] . "</td>
                <td> " . $linha['data_atualizacao'] . "</td>
                <td> " . $linha['status'] . " </td>
                <td> <a href='index.php?pagina=assinaturas_edita&id=" . $linha['id'] . "'> editar </a></td>
                <td> <a href='pages/assinaturas_remover.php?id=" . $linha['id'] . "'> remover </a> </td>
            </tr>";
    }

    ?>

  </table><br><br>
</div>

<center> <a href="index.php?pagina=assinaturas_cadastro"> CADASTRAR </a> </center>