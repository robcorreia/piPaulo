<?php

$sql="SELECT MAX(salario)FROM $nomeDaTabela";

$resultado = $conexao->query($sql) or die($conexao->error);

$registro=$resultado->fetch_array();

	$maiorSalario = $registro[0];

	$impostoRenda = 0;
	if($maiorSalario<=3000)
			$impostoRenda=$maiorSalario*0.05;
		
		else
			$impostoRenda=$maiorSalario*0.08;
		
		echo"<p> O Funcionário com maior salário recebe $maiorSalario, e deve pagar R$: $impostoRenda de imposto de renda </p>";
?>