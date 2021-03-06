<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
?>

<!DOCTYPE HTML>

<html lang="pt-BR">
	<head>
		<title>Yoread</title>
		<link rel="stylesheet" href="../css/styleinicial.css" />
		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	</head>

	<body>

		<!-- topo -->
		<?php include ('navbar.php'); ?>

		<!-- meio -->
		<?php
		require_once("config.php");
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "select titulo, sinopse, email, cod_publicacao from publicacao";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		$num = 0;
		if ($result->num_rows > 0) {
    	// output data of each row
	    while($row = $result->fetch_assoc()) {
				$num = $num + 1;
				echo "<div class = \"quadro".$num."\">";
				echo "		<div class = \"textoconf\">";
				echo "			<h1 class = \"titulosinopse\">".$row["titulo"]."</h1>";
				echo "			<p class = \"sinopse\">".$row["sinopse"]."";
				echo "			<a class = \"lermais\" href=\"publicacao.php?id=".$row["cod_publicacao"]."\">Ler mais...</a></p>";
				echo "			<a class = \"autor\" href=\"#\">".$row["email"]."</a>";
				echo "		</div>";
				echo "		<div class = \"posicon\">";
				echo "			<a class = \"icon\" href=\"#\" ><img src = \"../img/add.png\" title=\"favoritar\" border=\"none\" /></a>";
				echo "		</div>";
				echo "</div>";
	    }
		} else {
			echo "<div class = \"quadro1\">";
			echo "		<div class = \"textoconf\">";
			echo "			<h1 class = \"titulosinopse\">Yoread</h1>";
			echo "			<p class = \"sinopse\">Nenhuma sinopse encontrada.</p>";
			echo "		</div>";
			echo "		<div class = \"posicon\">";
			echo "		</div>";
			echo "</div>";
		}
		$conexao->close();
		?>

	</body>
</html>
