<?php
	session_start();
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title> Trabalho Final </title>
		<meta charset="utf-8" />
		<meta name="description" content="Matheus X. Ilha" />
		<meta name="description" content="Cookie´s Pet Shop" />
		<meta name="viewport" content="width=device-width,
		initial-scalw=1" />
		<link rel="icon" type="image/x-icon" href="boot.png">
		
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			
	</head>
	<body id="corpo">
		
		<header id="cabecalho">
			<h1> Cookie´s Pet Shop </h1>	
		</header>
		
		<nav id="menu">
			<a href="index.html"> Home </a>
			<a href="galeria.html"> Galeria </a>
			<a href="empresa.html"> Quem Somos </a>
			<a href="formulario.html"> Formulario </a>
			<a href="contato.html"> Contatos </a>
			<a href="carrinho.php"> Carrinho </a>
			
		</nav>
		
		<section id="conteudo">
			
			<!-- Galeria -->
			<div id="demo" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				
				 <!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<h3 class="titulo"></h3> <br>
						<img src="./imagens/cachorro3.jpg" alt="Ração" width="100%" height="100%">
					</div>
					<div class="carousel-item">
						<h3 class="titulo"></h3> <br>
						<img src="./imagens/banhocachorro.jpg" alt="Cachorro no banho" width="100%" height="100%">
					</div>
					<div class="carousel-item">
						<h3 class="titulo"></h3> <br>
						<img src="./imagens/chowchow.jpg" alt="chowchow" width="100%" height="100%">
					</div>
				</div>
				
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
				
				<Section id="sec_carrinho">
				<?php
					$resultado = mysqli_query($conexao, "select * from carrinho c,produto p where c.produto like p.id_produto and usuario like 1");
					$total = 0.0;
					while($dados_carrinho = mysqli_fetch_assoc($resultado)){
						$total = $total + $dados_carrinho['preco'];
					}
					echo "<h3>Total: </h3>";
					printf ("<h4 style='color:red;'>%.2f R$</h4>",$total);
					echo "<hr>";
				?>
				</section>
				
				<section id="sec_carrinho2">
				<?php
					$resultado = mysqli_query($conexao, "select * from carrinho c,produto p where c.produto like p.id_produto and usuario like 1");
					while($dados_carrinho = mysqli_fetch_assoc($resultado)){
						echo $dados_carrinho['nome']." ";
						printf ("<h4 style='color:red;'>%.2f R$</h4><br>",$dados_carrinho['preco']);
					}
				?>
				</section>
				
				<section id="sec_b_comprar">
					<form method="get" action="compra.php">
						<button id="b_comprar" type="submit">Continuar para compra</button>
					</form>
				</section>
			
			<button id="ancora" type="button" class="btn btn-info"><a href="#cabecalho"><h3> HOME </h3></a></button>
			
		</section>
		
		<footer>
		
		<h5> Deselvolvido por Matheus Ilha <br> Todos os Direitos Reservados </h5>
		
	</footer>
	
	</body>
	
</html>