<?php
	//consulta para a criação da tabela
	$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
											matricula VARCHAR(20) PRIMARY KEY,
											salario DECIMAL(8,2),
											contratacao DATE
											)";
											
	$resultado = $conexao->query($sql) or die($conexao->error);
?>