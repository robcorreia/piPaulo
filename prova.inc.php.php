<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados MySQL com PHP - Robson Correia </title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/stlyes/styles.css">
</head> 

<body class="sistema">
<header>
        <div class="container">
            <a href="index.html" class="brand">AgileCalc</a>
        <nav>
            <ul class="menu">
                <li>
                    <a href="index.html">Início</a>
                </li>
                <li>
                    <a href="sobre.html">Sobre</a>
                </li>
                <li>
                    <a href="prova.inc.php.php">Calculador IR</a>
                </li>
                <li>
                    <a href="contato.html">Contato</a>
                </li>
            </ul>
        </nav>
        </div>
    </header>
	<h1> Calculadora IR </h1>
	
	<form action="" method="post">
		<fieldset>
			<legend> Cadastro do funcionário </legend>
			
			<label class="alinha"> Matrícula do funcionário: </label> 
			
			<input type="text" name="matricula" autofocus> <br>
			
			<label class="alinha"> Salário Mensal: </label> 
			
			<input type="text" name="salario"> <br>

			<label class="alinha"> Data da contratação: </label>
			<select name="dia">
				<option> 01 </option>
				<option> 02 </option>
				<option> 03 </option>
				<option> 04 </option>
				<option> 05 </option>
				<option> 06 </option>
				<option> 07 </option>
				<option> 08 </option>
				<option> 09 </option>
				<option> 10 </option>
				<option> 11 </option>
				<option> 12 </option>
				<option> 13 </option>
				<option> 14 </option>
				<option> 15 </option>
				<option> 16 </option>
				<option> 17 </option>
				<option> 18 </option>
				<option> 19 </option>
				<option> 20 </option>
				<option> 21 </option>
				<option> 22 </option>
				<option> 23 </option>
				<option> 24 </option>
				<option> 25 </option>
				<option> 26 </option>
				<option> 27 </option>
				<option> 28 </option>
				<option> 29 </option>
				<option> 30 </option>
				<option> 31 </option>
			</select>
			
			<select name="mes">
				<option value="01"> Janeiro </option> 
				<option value="02"> Fevereiro </option> 
				<option value="03"> Março </option> 
				<option value="04"> Abril </option> 
				<option value="05"> Maio </option> 
				<option value="06"> Junho </option> 
				<option value="07"> Julho </option> 
				<option value="08"> Agosto </option> 
				<option value="09"> Setembro </option> 
				<option value="10"> Outubro </option> 
				<option value="11"> Novembro </option> 
				<option value="12"> Dezembro </option>
			</select>
			
			<input type="number" min="0" name="ano" class="sem-borda"> <br> <br>
		</fieldset>
			
			<fieldset>
			<legend> Escolha a operação desejada </legend>
			<div class="operacoes">
				<label> Operações sobre o banco de dados: </label> <br>
				
				<input type="radio" name="operacoes" value="1"> Cadastrar funcionário <br>
				
				<input type="radio" name="operacoes" value="2"> Calcular valor do imposto de renda <br>
				
				<input type="radio" name="operacoes" value="3"> Excluir funcionários
			</div>
			
			<div class="botoes">
				<button type="submit" name="enviar"> Executar operação </button>
			</div>
		</fieldset>
	</form>
<?php
	//a primeira coisa que fazemos é inserir as includes responsáveis pela conexão do PHP com o banco de dados.
	
	require "dados-conexao.inc.php";
	require "conectar.inc.php";
	require "criar-banco.inc.php";
	require "selecionar-banco.inc.php";
	require "definir-charset.inc.php";
	require "criar-tabela.inc.php";
	
	//testar se o submit foi pressionado
	if(isset($_POST["enviar"]))
		{
			//testar se, pelo menos, um botão de rádio foi escolhido pelo usuário
			if(isset($_POST["operacoes"]))
				{
				//receber o botão de rádio selecionado no formulário e fazer o PHP testar qual botão o usuário escolheu
				$operacao = $_POST["operacoes"];
				
				if($operacao == 1)
					require "cadastrar.inc.php";				
				elseif($operacao == 2)
					require "maior-salario.inc.php";
				elseif($operacao == 3)
					require "excluir.inc.php";

			}
			else
				echo "<p> Você não selecionou nenhuma operação sobre o banco de dados. </p>";
		}
	
	require "desconectar.inc.php";
?>
</body>
</html>