<?php
	session_start();

	class Config
	{
		private $servidor = "localhost";
		private $user = "root";
		private $senha = "4556465";
		private $banco = "yoread";

		function conectaBanco() {
			$con = mysqli_connect($this->servidor, $this->user, $this->senha, $this->banco);
			//conecta no mwsql faz favor

			if (!$con) {
			    die('Não foi possível conectar: ' . mysqli_error());
			}

			return $con;
		}
	}

	$_SESSION['ROOT_ADDRESS'] = dirname(__FILE__);

?>
