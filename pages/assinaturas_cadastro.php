
<div class="container">
    <h2 style="color:gray">Cadastro</h2>
    <form method='POST' action="pages/assinaturas_cadastro_salvar.php">
        <label for="plano">Plano:</label>
            <select name="plano" id="plano" class="custom-select">
                <option selected> Selecione o seu Plano </option>
                <option value="plano"> Basico </option>
                <option value="plano"> Familia </option>
                <option value="plano"> Premium </option>
            </select>

        <div class="form-group">    
            <label for="data_inicio">Data Inicio: </label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio">
        </div>
        <div class="form-group">    
            <label for="data_fim">Data Fim:</label>
            <input type="date" class="form-control" id="data_fim"  name="data_fim">
        </div>
       
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
        


















