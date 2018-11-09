<h1>Lista de Professores</h1>

<table class="table table-striped border table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Observacoes</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$sql = "SELECT * FROM professor";
		$res = $conn->query($sql);
		while($row = $res->fetch_assoc()){
   echo "<tr>
      <th scope='row'>".$row['id_professor']."</th>
      <td>".$row['nome_professor']."</td>
      <td>".$row['endereco_professor']."</td>
      <td>".$row['telefone_professor']."</td>
      <td>".$row['observacao_professor']."</td>
    </tr>";
		};
    ?>
  </tbody>
</table>