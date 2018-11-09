<h1>Lista de Alunos</h1>

<table class="table table-striped border table-hover table-responsive-md">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
        <th scope="col">Mãe</th>
        <th scope="col">Pai</th>
        <th scope="col">Contato</th>
        <th scope="col">Turma</th>
        <th scope="col">Turno</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM aluno ORDER BY nome_aluno";
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        echo "<tr>
      <th scope='row'>".$row['nome_aluno']."</th>
      <td>".$row['endereco_aluno']."</td>
      <td>".$row['mae_aluno']."</td>
      <td>".$row['pai_aluno']."</td>
      <td>".$row['contato_aluno']."</td>
      <td>".$row['turma_aluno']."</td>
      <td>".$row['turno_aluno']."</td>
    </tr>";
    };
    ?>
    </tbody>
</table>