<?php
	//operação de exclusão de todos os registros que contenham mais que dois alunos participantes do grupo do PI
	
	$sql = "DELETE FROM $nomeDaTabela WHERE contratacao <' 2000-01-01'";
	
	$resultado = $conexao->query($sql) or die($conexao->error);
	
	$numRegistros = $conexao->affected_rows;
	
	if($numRegistros > 0)
		echo "<p> Foram excluído(s) do banco de dados $numRegistros funcionário(s) que ingressaram na empresa antes da data de 01-01-2000. </p>";

	else
		echo "<p> Exclusão falhou: nenhum registro no banco de dados com contratação anterior à data de 01-01-2000. </p>";
	
	
	



 



