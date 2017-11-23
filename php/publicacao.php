<?php
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
 				<h1 class = "titulosinopse">A dona do tempo</h1>
 				<p class = "sinopse">Por conseguinte, a revolução dos costumes obstaculiza a apreciação da importância das formas de ação. A certificação de metodologias que nos auxiliam a lidar com a estrutura atual da organização auxilia a preparação e a composição dos índices pretendidos. Assim mesmo, a contínua expansão de nossa atividade não pode mais se dissociar dos conhecimentos estratégicos para atingir a excelência. Por outro lado, a complexidade dos estudos efetuados cumpre um papel essencial na formulação de alternativas às soluções ortodoxas. Caros amigos, o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção das novas proposições.
           Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o consenso sobre a necessidade de qualificação garante a contribuição de um grupo importante na determinação das diversas correntes de pensamento. Gostaria de enfatizar que a execução dos pontos do programa deve passar por modificações independentemente do sistema de formação de quadros que corresponde às necessidades. As experiências acumuladas demonstram que a consolidação das estruturas facilita a criação das condições inegavelmente apropriadas. Do mesmo modo, o desenvolvimento contínuo de distintas formas de atuação promove a alavancagem do impacto na agilidade decisória. É claro que o acompanhamento das preferências de consumo possibilita uma melhor visão global do levantamento das variáveis envolvidas. Podemos já vislumbrar o modo pelo qual a adoção de políticas descentralizadoras talvez venha a ressaltar a relatividade dos métodos utilizados na avaliação de resultados. Evidentemente, a determinação clara de objetivos aponta para a melhoria das direções preferenciais no sentido do progresso. </p>
           </div>
           <div class="">
 				<a class = "botao right" href="#">Diana Mastalli</a>
 				<a class = "botao left" href="#">Financiar</a>
 			</div>
 		</div>

 		<div class = "divcomentarios">
 			<h1 class = "titulocomentarios">Coment�rios</h1>
 			</br>
 			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Edinaldo Gaspar</a>
 				<p class = "textocoment">Caros amigos, o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção das novas proposições.Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o consenso sobre a necessidade de qualificação garante a contribuição de um grupo importante na determinação das diversas correntes de pensamento.</p>
 			</div>
 			</br>
 			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Rodolfo Berlezi</a>
 				<p class = "textocoment">Meus caros amigos, o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção das novas proposições.Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o consenso sobre a necessidade de qualificação garante a contribuição de um grupo importante na determinação das diversas correntes de pensamento.</p>
 			</div>
 			</br>
 			<div class = "posicoment">
 				<a class = "autorcoment" href="#">Gabizinho</a>
 				<p class = "textocoment">Parceiros, o entendimento das metas propostas apresenta tendências no sentido de aprovar a manutenção das novas proposições.Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o consenso sobre a necessidade de qualificação garante a contribuição de um grupo importante na determinação das diversas correntes de pensamento.</p>
 			</div>

 			<a class = "botaocoment" href="#">Escreva seu coment�rio</a>

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
