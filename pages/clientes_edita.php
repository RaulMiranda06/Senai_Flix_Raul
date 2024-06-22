    
    <?php
    include('conexao.php');
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM clientes WHERE id='$id'";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();

    ?>
    
    <div class="container">
    <h2 style="color:gray">Editar</h2>
    <form method='POST' action="pages/clientes_edita_salvar.php?id=<?php echo $linha['id'];?>" enctype="multipart/form-data">
        <div class="form-group">    
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome'];?>">
        </div>

        <div class="form-group">    
            <label for="foto">Foto:</label>
            <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $linha['foto'];?>">
        </div>
        
        <div class="form-group">    
            <label for="cpf">Cpf:</label>
            <input type="number" class="form-control" id="cpf" name="cpf" value="<?php echo $linha['cpf'];?>">
        </div>
        
        <div class="form-group">    
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $linha['endereco'];?>">
        </div>
        
        <div class="form-group">    
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $linha['bairro'];?>">
        </div>
        
        <div class="form-group">    
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $linha['cidade'];?>">
        </div>
        
        <label for="estado">Estado:</label>
        <select name="estado" class="custom-select">
            <option selected> Selecione o seu estado </option>
            <option value="<?php echo $linha['estado'];?>"> AC </option>
            <option value="<?php echo $linha['estado'];?>"> AL </option>
            <option value="<?php echo $linha['estado'];?>"> AP </option>
            <option value="<?php echo $linha['estado'];?>"> AM </option>
            <option value="<?php echo $linha['estado'];?>"> BA </option>
            <option value="<?php echo $linha['estado'];?>"> CE </option>
            <option value="<?php echo $linha['estado'];?>"> DF </option>
            <option value="<?php echo $linha['estado'];?>"> ES </option>
            <option value="<?php echo $linha['estado'];?>"> GO </option>
            <option value="<?php echo $linha['estado'];?>"> MA </option>
            <option value="<?php echo $linha['estado'];?>"> MT </option>
            <option value="<?php echo $linha['estado'];?>"> MS </option>
            <option value="<?php echo $linha['estado'];?>"> MG </option>
            <option value="<?php echo $linha['estado'];?>"> PA </option>
            <option value="<?php echo $linha['estado'];?>"> PB </option>
            <option value="<?php echo $linha['estado'];?>"> PR </option>
            <option value="<?php echo $linha['estado'];?>"> PE </option>
            <option value="<?php echo $linha['estado'];?>"> PI </option>
            <option value="<?php echo $linha['estado'];?>"> RJ </option>
            <option value="<?php echo $linha['estado'];?>"> RN </option>
            <option value="<?php echo $linha['estado'];?>"> RS </option>
            <option value="<?php echo $linha['estado'];?>"> RO </option>
            <option value="<?php echo $linha['estado'];?>"> SC </option>
            <option value="<?php echo $linha['estado'];?>"> SE </option>
            <option value="<?php echo $linha['estado'];?>"> TO </option>
        </select>
        
        <div class="form-group">    
            <label for="cep">Cep:</label>
            <input type="number" class="form-control" id="cep" name="cep" value="<?php echo $linha['cep'];?>">
        </div>
        
        <div class="form-group">    
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email"  name="email" value="<?php echo $linha['email'];?>">
        </div>
        
        <div class="form-group">    
            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" id="telefone" name="telefone" value="<?php echo $linha['telefone'];?>">
        </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
        <br>
        <br>
        <br>

        <center> <a href="index.php?pagina=clientes_listar"> LISTA DE CADASTRO  </a> </center>

