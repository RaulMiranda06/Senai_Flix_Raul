  <?php

  include('conexao.php');

  $sql = "SELECT * FROM clientes";
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
          <th>Foto</th>
          <th>Cpf</th>
          <TH>Endereço</TH>
          <TH>Bairro</TH>
          <TH>Cidade</TH>
          <TH>Estado</TH>
          <TH>Cep</TH>
          <TH>Email</TH>
          <TH>Telefone</TH>
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
                        <td> <img src='uploads/" . $linha['foto'] . "' height = '100px' width = '100px' ></td>
                        <td> " . $linha['cpf'] . " </td>
                        <td> " . $linha['endereco'] . " </td>
                        <td> " . $linha['bairro'] . " </td>
                        <td> " . $linha['cidade'] . " </td>
                        <td> " . $linha['estado'] . " </td>
                        <td> " . $linha['cep'] . " </td>
                        <td> " . $linha['email'] . " </td>
                        <td> " . $linha['telefone'] . "</td>
                        <td> " . $linha['data_cadastro'] . "</td>
                        <td> " . $linha['data_atualizacao'] . "</td>
                        <td> " . $linha['status'] . " </td>
                        <td> <a href='index.php?pagina=clientes_edita&id=" . $linha['id'] . "'> editar </a></td>
                        <td> <a href='pages/clientes_remover.php?id=" . $linha['id'] . "'> remover </a> </td>
                        </tr>";
      }

      ?>

    </table><br><br>
  </div>

  <center> <a href="index.php?pagina=clientes_cadastro"> CADASTRAR </a> </center>