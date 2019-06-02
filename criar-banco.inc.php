<?php
	//consulta de criação do  banco de dados
	$sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

	$resultado = $conexao->query($sql) or exit($conexao->error);
?>