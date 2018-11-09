<?php
//conexao com o banco de dados
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "udf";

		$conn = new mysqli($host,$user,$pass,$db) or die($conn -> error);
	
		switch (@$_REQUEST["page"]){
				//aluno
				case 'cad-aluno';
						include("aluno/cadastrar-aluno.php");
						break;
				case 'edi-aluno';
						include("aluno/editar-aluno.php");
						break;
				case 'lis-aluno';
						include("aluno/listar-aluno.php");
						break;
				case 'sal-aluno';
						include("aluno/salvar-aluno.php");
						break;
				//professor
				case 'cad-professor';
						include("professor/cadastrar-professor.php");
						break;
				case 'edi-professor';
						include("professor/editar-professor.php");
						break;
				case 'lis-professor';
						include("professor/listar-professor.php");
						break;
				case 'sal-professor';
						include("professor/salvar-professor.php");
						break;
				//turma
				case 'cad-turma';
						include("turma/cadastrar-turma.php");
						break;
				case 'edi-turma';
						include("turma/editar-turma.php");
						break;
				case 'lis-turma';
						include("turma/listar-turma.php");
						break;
				case 'sal-turma';
						include("turma/salvar-turma.php");
						break;
				
				default:
						include("dashboard.php");
						break;
				
		}





?>