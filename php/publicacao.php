<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
  $codpub = $_GET['id'];
	$_SESSION['cod_publicacao'] = $codpub;

	require_once("config.php");
	$config = new Config();
	$conexao = $config->conectaBanco();

	$query = "select titulo, sinopse, email from publicacao where cod_publicacao = ".$codpub;

	$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

	if(mysqli_num_rows($result) == 1){
		$publi = $result->fetch_array(MYSQLI_ASSOC);

		$titulo = $publi['titulo'];
		$sinopse = $publi['sinopse'];
		$autor = $publi['email'];

	} else {
		$message = '<h1>Erro ao carregar postagem.</h1>
					<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
	}

?>

<!DOCTYPE HTML>

 <html>
 	<head>
 		<title>Yoread</title>
		<link rel="stylesheet" href="../css/styleinicial.css" />
 		<link rel="stylesheet" href="../css/stylepublicacao.css" />
 		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
 	</head>

 	<body>

 		<!-- Topo -->
		<?php include ('navbar.php'); ?>

 		<!-- Meio -->

 		<div class = "divsinopse">
 			<div class = "positexto">
 				<h1 class = "titulosinopse"><?php echo $titulo?></h1>
 				<p class = "sinopse"><?php echo $sinopse?></p>
           </div>
           <div class="">
 				<a class = "botao right" href="#"><?php echo $autor?></a>
 				<a class = "botao left" href="#">Financiar</a>
 			</div>
 		</div>

 		<div class = "divcomentarios">
 			<h1 class = "titulocomentarios">Comentários</h1>
 			</br>

			<?php
			require_once("config.php");
			$config = new Config();
			$conexao = $config->conectaBanco();
			$query = "select descricao, cod_publicacao, cod_comentario, email from comenta where cod_publicacao = ".$_SESSION['cod_publicacao'];
			$result = mysqli_query($conexao, $query) or die('Invalid, query:'. $conexao->error);

			$num = 0;

			if($result->num_rows>0){
				while ($row = $result ->fetch_assoc()) {
					$num = $num + 1;
					echo "<div class = \"posicoment\">";
		 			echo "	<a class = \"autorcoment\" href=\"#\">".$row["email"]."</a>";
		 			echo "	<p class = \"textocoment\">".$row["descricao"]."</p>";
		 			echo "</div>";
					echo "</br>";
				}
			} else {

				echo "<div class = \"posicoment\">";
	 			echo "	<a class = \"autorcoment\" href=\"#\"></a>";
	 			echo "	<p class = \"textocoment\">Seja o primeiro a comentar!</p>";
	 			echo "</div>";
				echo "</br>";
			}

 			?>


			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Tem que mostrar o email do usuário do BD.</a>
 				<p class = "textocoment">Tem que mostrar o texto do comentário do BD. Todos os comentários, um por um...</p>
 			</div>
 			</br>


			<form action="postcomentario.php" id = "postagem" method="post">
				<input type="text" id="comentario" name="comentario"/>
				<input type="submit" value="comentar" id="btcomentar"/>
			</form>

 		</div>

 		<!-- Linha -->
 		<div id = "linhameio">
 		</div>

 		<div id = "linha1">
 		</div>

 		<div id = "linha2">
 		</div>

 		<div>
 			<a href="#" class="botao-fixo">
 				<i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i>
 			</a>
 		</div>

 	</body>

 </html>
