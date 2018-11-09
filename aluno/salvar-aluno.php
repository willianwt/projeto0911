<?php
$nome = $_REQUEST["nome_aluno"];
$end = $_REQUEST["endereco_aluno"];
$nasc = $_REQUEST["nascimento_aluno"];
$contato = $_REQUEST["contato_aluno"];
$mae = $_REQUEST["mae_aluno"];
$pai = $_REQUEST["pai_aluno"];
$turma = $_REQUEST["turma_aluno"];
$turno = $_REQUEST["turno_aluno"];
switch ($_REQUEST["acao"]){
    case 'cadastrar':
        $sql = "INSERT INTO aluno (nome_aluno,endereco_aluno,nascimento_aluno,contato_aluno,mae_aluno,pai_aluno,turma_aluno,turno_aluno) VALUES ('{$nome}','{$end}','{$nasc}','{$contato}','{$mae}','{$pai}','{$turma}','{$turno}')";
        $res = $conn->query($sql);
        if($res==true){
            echo "<div class='alert alert-success'>Aluno Cadastrado com Sucesso</div>";
        }else{
            echo "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
        }
        break;
    case 'editar':

        break;
    case 'excluir':

        break;

}