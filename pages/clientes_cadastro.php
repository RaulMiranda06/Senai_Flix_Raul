
    <div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/clientes_cadastro_salvar.php" enctype="multipart/form-data">
        <div class="form-group">    
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome" name="nome">
        </div>
        <div class="form-group">    
            <label for="foto">Foto:</label>
            <input type="file"  id="foto" name="foto">
        </div>
        <div class="form-group">    
            <label for="cpf">Cpf:</label>
            <input type="number" class="form-control" id="cpf" placeholder="00000000-00" name="cpf">
        </div>
        <div class="form-group">    
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" placeholder="Digite o seu endereço" name="endereco">
        </div>
        <div class="form-group">    
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" placeholder="Digite o seu bairro" name="bairro">
        </div>
        <div class="form-group">    
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" placeholder="Digite a sua cidade" name="cidade">
        </div>
        <label for="estado">Estado:</label>
        <select name="estado" class="custom-select">
            <option selected> Selecione o seu estado </option>
            <option value="estado"> AC </option>
            <option value="estado"> AL </option>
            <option value="estado"> AP </option>
            <option value="estado"> AM </option>
            <option value="estado"> BA </option>
            <option value="estado"> CE </option>
            <option value="estado"> DF </option>
            <option value="estado"> ES </option>
            <option value="estado"> GO </option>
            <option value="estado"> MA </option>
            <option value="estado"> MT </option>
            <option value="estado"> MS </option>
            <option value="estado"> MG </option>
            <option value="estado"> PA </option>
            <option value="estado"> PB </option>
            <option value="estado"> PR </option>
            <option value="estado"> PE </option>
            <option value="estado"> PI </option>
            <option value="estado"> RJ </option>
            <option value="estado"> RN </option>
            <option value="estado"> RS </option>
            <option value="estado"> RO </option>
            <option value="estado"> RR </option>
            <option value="estado"> SC </option>
            <option value="estado"> SE </option>
            <option value="estado"> TO </option>
        </select>
        <div class="form-group">    
            <label for="cep">Cep:</label>
            <input type="number" class="form-control" id="cep" placeholder="Digite o seu cep " name="cep">
        </div>
        <div class="form-group">    
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite o seu email " name="email">
        </div>
        <div class="form-group">    
            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" id="telefone" placeholder="Digite o seu telefone" name="telefone">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
        


















