<?php
if(!isset($_POST['nome']) || !isset($_POST['categoria']) || !isset($_POST['imagem'])) {
		echo "erro";
}else{
	$nome = $_POST['nome'];
	$categoria = $_POST['categoria'];
	$imagem = $_POST['imagem'];
	
	require_once('config.php');
	$mysqli->query("INSERT INTO produtos (nome, categoria, imagem) VALUES ('$nome', '$categoria', '$imagem');");
	$mysqli->close();
	
	echo "ok";
}
?>