<?php

	class conexaoMySQL
	{
		public $servidor;
		public $usuario;
		public $senha;
		public $banco;
		public conexao;
		
		function conectar()
		{
			$this -> conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha)
								or die ("N�o foi poss�vel conctar ao servidor".mysqlerro());
								
			$this -> banco = @mysql_select_db($this->banco) or
						die("N�o foi poss�ver conectar ao banco de dados".mysqlerro());
		}
	}



?>