    
    <?php
    include('conexao.php');
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM assinaturas WHERE id='$id'";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <h2 style="color:gray">Cadastro</h2>
        <form method='POST' action="pages/assinaturas_edita_salvar.php?id=<?php echo $linha['id'];?>">
            <label for="plano">Plano:</label>
                <select name="plano" class="custom-select">
                    <option selected> Selecione o seu Plano </option>
                    <option value="<?php echo $linha['plano']="Basico";?>">Basico </option>
                    <option value="<?php echo $linha['plano']="Familia";?>"> Familia </option>
                    <option value="<?php echo $linha['plano']="Premiun";?>"> Premiun </option>
                </select>

            <div class="form-group">    
                <label for="data_inicio">Data Inicio: </label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="<?php echo $linha['data_inicio'];?>">
            </div>
            <div class="form-group">    
                <label for="data_fim">Data Fim:</label>
                <input type="date" class="form-control" id="data_fim"  name="data_fim" value="<?php echo $linha['data_fim'];?>">
            </div>
        
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
        <br>
        <br>
        <br>
    <center> <a href="index.php?pagina=assinaturas_listar"> LISTA DE CADASTRO  </a> </center>

