<?php
	session_start(); 
	include_once("conexao.php"); 

	$id_produto = $_POST["produto"];
	$id_usuario = 1;
	
	
	$preco_query = mysqli_query($conexao, "select preco from produto where id_produto like $id_produto");
	while($preco_while = mysqli_fetch_assoc($preco_query)){
		$preco = $preco_while['preco'];		
	}
	
	$cadastra = mysqli_query($conexao, "insert into carrinho values(
	null,$preco, $id_usuario, $id_produto)");
	
	if(mysqli_affected_rows($conexao) > 0){
		echo "<script type='text/javascript'>
				   alert ('Adicionado ao carrinho');
			  </script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0
				URL=http://localhost/trabalho%20Final%202/'>";
	}
	else{
		echo "<script type='text/javascript'>
				   alert ('Não foi possível Adicionar ao carrinho');
			  </script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0
				URL=http://localhost/projeto_final_final/cardapio.php'>";
	}
?>