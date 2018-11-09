<h1>Lista de Turmas</h1>


        <?php
        $sql = "SELECT DISTINCT turma_aluno FROM aluno ORDER BY turma_aluno ASC";
        $res = $conn->query($sql);

        while ($row = $res->fetch_array()){
            $professor = $row['turma_aluno'];
            echo "<table class=\"table table-striped border table-hover\">
                  <thead>
                      <th scope='col'>Turma do Professor ". $professor  . "</th>
                      <th scope='col'>Contato</th>
                      <th scope='col'>Mãe</th>
                      <th scope='col'>Turno</th>         
                  </thead>";
            $aluno = "SELECT * FROM aluno WHERE turma_aluno = '$professor' ORDER BY nome_aluno";
            $alunos = $conn->query($aluno);
            while($row = $alunos->fetch_assoc()) {
                echo "<tbody><tr>
                      <td>" . $row['nome_aluno'] . "</td>
                      <td>" . $row['contato_aluno'] . "</td>
                      <td>" . $row['mae_aluno'] . "</td>
                      <td>" . $row['turno_aluno'] . "</td>
                    </tr></tbody>";
            };
        };

        ?>
