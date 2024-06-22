<div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/filmes_cadastro_salvar.php">
        <div class="form-group">    
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">    
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="form-group">    
            <label for="ano_lancamento">Ano lancamento:</label>
            <input type="year" class="form-control" id="ano_lancamento" name="ano_lancamento">
        </div>
        <div class="form-group">    
            <label for="genero">Genero:</label>
            <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <div class="form-group">    
            <label for="classificacao">Classificação:</label>
            <input type="text" class="form-control" id="classificacao" name="classificacao">
        </div>
       

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>