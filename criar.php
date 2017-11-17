<?php
require_once('config.php');

$mysqli = new mysqli("localhost", "id3608329_aula", "unifeob", "id3608329_aula");
$r = $mysqli->query("SELECT * FROM produtos");

$i = 0;
while ($a = $r->fetch_assoc()) {
 $l[$i] = array(
	'codigo'=>$a["codigo"],
	'nome'=>$a["nome"],
	'categoria'=>$a["categoria"],
	'imagem'=>$a["imagem"],
	);
	$i++;
	}
	
	echo json_encode($l);
	
	$mysqli->close();
	?>