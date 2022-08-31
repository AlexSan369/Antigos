<?php 

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "";
	
	$conexao = mysql_connect($servidor,$usuario,$senha)
				     or die ("Sem acesso ao servidor");
	
	mysql_select_db($banco,$conexao)
	or die("Sem conexao com o banco de dados");

?>