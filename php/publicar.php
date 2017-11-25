<!DOCTYPE HTML>

<html>
	<head>
		<title>Yoread</title>
		<link rel="stylesheet" href="../css/styleinicial.css" />
		<link rel="stylesheet" href="../css/stylepublicar.css"/>
		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	</head>
	<body>
		<!--topo-->
		<?php include ('navbar.php'); ?>

		<!--meio-->
		<form action="post.php" id = "postagem" method="post">
		<div id = "publicar">
			<p class = "titulo">Escreva sua sinopse</p>
			<div id = "quadradinhos">
				<input type="text" class="formulario" id ="tamquadrado1" name="titulosinopse" placeholder="Título da Sinopse"/>
				<input type="text" class="formulario" id ="tamquadrado1" name="linkfinanciamento" placeholder="Link para a plataforma de financiamento"/>
	    	<input type="text" class="formulario" id ="tamquadrado2" name="sinopse" placeholder="Escreva aqui a sinopse..."/>

			</div>
		</div>

		<!--<div id = "botao">-->
		<footer>

				<input type="submit" value="Publicar" id="linkbotao"/>

		</footer>
		<!--</div>-->
		</form>


	</body>
</html>
