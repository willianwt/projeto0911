<h1>Cadastrar Novo Professor</h1>
<form action="index.php?page=sal-professor" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Nome do Professor</label>
        <input type="text" name="nome_professor" class="form-control" required>
    </div>
    <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco_professor" class="form-control" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Telefone</label>
            <input type="text" name="telefone_professor" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Observações</label>
            <input type="text" name="observacao_professor" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>