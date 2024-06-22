<div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/usuario_cadastro_salvar.php">
        <div class="form-group">    
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">    
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">    
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group">    
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">    
            <label for="permissao">Permissão:</label>
            <select name="permissao" id="permissao" class="custom-select">
                <option selected> escolha a sua permissão </option>
                <option value="0">Usuario</option>
                <option value="1">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>