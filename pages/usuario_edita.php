<?php
    include('conexao.php');
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM usuarios WHERE id='$id'";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();

?>

<div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/usuario_edita_salvar.php?id=<?php echo $linha['id'];?>">
        <div class="form-group">    
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome'];?>">
        </div>
        <div class="form-group">    
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $linha['usuario'];?>">
        </div>
        <div class="form-group">    
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $linha['senha'];?>">
        </div>
        <div class="form-group">    
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $linha['email'];?>">
        </div>
        <div class="form-group">    
            <label for="permissao">Permissão:</label>
            <select name="permissao" id="permissao" class="custom-select">
                <option selected> escolha a sua permissão </option>
                <option value="<?php echo $linha['permissao']=0;?>">Usuario</option>
                <option value="<?php echo $linha['permissao']=1;?>">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    