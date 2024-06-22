<?php
    include('conexao.php');
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM filmes WHERE id='$id'";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();

    ?>


<div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/filmes_edita_salvar.php?id=<?php echo $linha['id'];?>"> 
        <div class="form-group">    
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $linha['titulo'];?>">
        </div>
        <div class="form-group">    
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $linha['descricao'];?>">
        </div>
        <div class="form-group">    
            <label for="ano_lancamento">Ano lancamento:</label>
            <input type="year" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento'];?>">
        </div>
        <div class="form-group">    
            <label for="genero">Genero:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $linha['genero'];?>">
        </div>
        <div class="form-group">    
            <label for="classificacao">Classificação:</label>
            <input type="text" class="form-control" id="classificacao" name="classificacao" value="<?php echo $linha['classificacao'];?>">
        </div>
       

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    <center> <a href="index.php?pagina=filme_listar"> LISTA DE CADASTRO  </a> </center>