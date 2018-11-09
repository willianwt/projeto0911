<h1>Cadastrar Novo Aluno</h1>
<form action="index.php?page=sal-aluno" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Aluno</label>
		<input type="text" name="nome_aluno" class="form-control" required>
	</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Data de Nascimento</label>
            <input type="date" name="nascimento_aluno" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label>Endereço</label>
            <input type="text" name="endereco_aluno" class="form-control" required>
        </div>
    </div>
	<div class="form-row">
        <div class="form-group col-md-6">
            <label>Nome da Mãe</label>
            <input type="text" name="mae_aluno" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label>Nome do Pai</label>
            <input type="text" name="pai_aluno" class="form-control">
        </div>
	</div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Contato</label>
            <input type="text" name="contato_aluno" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label>Turma</label>
            <select class="form-control" name="turma_aluno" required>
            <?php
            $curso="select * from professor";
            $result = mysqli_query($conn, $curso);
            echo "<option selected value=''>Selecione o Professor:</option>";
            while($row = $result->fetch_assoc()) {
            echo "<option value='".$row['nome_professor']."' >" . $row['nome_professor'] . "</option>";
            }    ?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Turno</label>
            <select class="form-control" name="turno_aluno" required>
            <label>Turno</label>
            <option selected value=''>Selecione o Professor:</option>
            <option value='manha'>Matutino</option>
            <option value='vespertino'>Vespertino</option>
            </select>
        </div>
    </div>
	<button type="submit" class="btn btn-success">Enviar</button>
</form>