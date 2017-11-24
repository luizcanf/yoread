<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
  $cod_pub = $_GET['id'];
?>

<!DOCTYPE HTML>

 <html>
 	<head>
 		<title>Yoread</title>
 		<link rel="stylesheet" href="../css/stylepublicacao.css" />
 		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
 	</head>

 	<body>

 		<!-- Topo -->

 		<div id = "topo">
 			<div id = "logo">
 				<p>Yoread</p>
 			</div>
 			<div class = "posiavatar">
 				<a class = "avatar" href="perfil.html" ><img src = "avatar.png" title="Perfil" border="none" /></a>
 			</div>
 		</div>

 		<!-- Meio -->

 		<div class = "divsinopse">
 			<div class = "positexto">
 				<h1 class = "titulosinopse">Tem que mostrar o Título da sinopse do BD.</h1>
 				<p class = "sinopse">Tem que mostrar a sinopse do BD. </p>
           </div>
           <div class="">
 				<a class = "botao right" href="#">Tem que mostrar o email do usuário do BD.</a>
 				<a class = "botao left" href="#">Financiar</a>
 			</div>
 		</div>

 		<div class = "divcomentarios">
 			<h1 class = "titulocomentarios">Comentários</h1>
 			</br>
 			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Tem que mostrar o email do usuário do BD.</a>
 				<p class = "textocoment">Tem que mostrar o texto do comentário do BD.</p>
 			</div>
 			</br>
			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Tem que mostrar o email do usuário do BD.</a>
 				<p class = "textocoment">Tem que mostrar o texto do comentário do BD. Todos os comentários, um por um...</p>
 			</div>
 			</br>

			<form action="php/postcomentario.php" id = "postagem" method="post">
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
