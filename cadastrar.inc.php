<?php
	//receber os dados vindos do formulário
	$matricula = $_POST["matricula"];
	$salario        = $_POST["salario"];
	$dia            = $_POST["dia"];
	$mes            = $_POST["mes"];
	$ano            = trim($_POST["ano"]);
	
	//antes de prosseguir, vamos garantir a segurança da nossa aplicação contra ataques ao servidor (injeção de SQL), por meio de um método próprio que o PHP disponibiliza
	$matricula = $conexao->escape_string($matricula);
	
	$salario = $conexao->escape_string($salario);

	$dia =  $conexao->escape_string($dia);
	
	$mes =  $conexao->escape_string($mes);
	
	$ano = $conexao->escape_string($ano);
	
	//antes da consulta de inserção, devemos combinar as variáveis do PHP que guardam dia, mês e ano em uma única variável, já com a data no formato permitido pelo MySQL(aaaa-mm-dd)
	$data = $ano . "-" . $mes . "-" . $dia;
	
	
	//criar a consulta de inserção
	$sql = "INSERT $nomeDaTabela(matricula, salario, contratacao) VALUES ('$matricula', $salario, '$data')";
	
	$resultado = $conexao->query($sql) or die($conexao->error);
	
	echo "<p> Cadastro dos dados do aluno efetuado com sucesso. </p>";

?>