<?php
$curl = curl_init("http://yurirzu.000webhostapp.com/cliente/criar.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$json = curl_exec($curl);
curl_close($curl);

$encoded = json_decode($json);

echo "<table><tr><th>Codigo</th>
		<th>Nome</th>
		<th>Categoria</th>
		<th>Imagem</th>
	</tr>";
	
	foreach($encoded as $itens){
		echo "<tr>
	<td>" . $itens->{'codigo'} . "</td>
	<td>" . $itens->{'nome'} . "</td>
	<td>" . $itens->{'categoria'} . "</td>
	<td><img src=\"http://yurirzu.000webhostapp.com/cliente/images" . $itens->{'imagem'} . ".jpg\" style=\"width:60px\"></td>
	</tr>";
	}
	
	echo "</table>";
	?>