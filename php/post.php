<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['titulosinopse'], $_POST['linkfinanciamento'], $_POST['sinopse']))
		{
			session_start();
			$email = $_SESSION['user']['email'];
			$titulo = $_POST['titulosinopse'];
			$link = $_POST['linkfinanciamento'];
			$sinopse = $_POST['sinopse'];
			postar($titulo, $link, $sinopse, $email);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="publicar.php">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		//header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true; //reescrever que faça sentido
	}

	function postar($titulo, $link, $sinopse, $fk_user) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO publicacao (link, sinopse, titulo, email, cod_publicacao) VALUES ('".$link."', '".$sinopse."', '".$titulo."', '".$fk_user."', NULL)";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			header("Location: inicial.php");
		} else {
			$message = '<h1>Houve um erro ao salvar a publica��o</h1>
						<h3>Por favor, <a href="publicar.php">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
