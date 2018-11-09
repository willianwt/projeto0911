<?php
$nome = $_REQUEST["nome_professor"];
$end = $_REQUEST["endereco_professor"];
$tel = $_REQUEST["telefone_professor"];
$obs = $_REQUEST["observacao_professor"];
switch ($_REQUEST["acao"]){
    case 'cadastrar':
        $sql = "INSERT INTO professor (nome_professor,endereco_professor,telefone_professor,observacao_professor) VALUES ('{$nome}','{$end}','{$tel}','{$obs}')";
        $res = $conn->query($sql);
        if($res==true){
            echo "<div class='alert alert-success'>Professor Cadastrado com Sucesso</div>";
        }else{
            echo "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
        }
        break;
    case 'editar':

        break;
    case 'excluir':

        break;

}