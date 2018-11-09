<h1>Lista de Turmas</h1>

<table class="table table-striped border table-hover">
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
    $sql = "SELECT * FROM professor ORDER BY nome_professor";
    $res = $conn->query($sql);
    $turma = array('nome_professor')


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