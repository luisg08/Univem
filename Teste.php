<!DOCTYPE html>
<html>
<head>
	<title>Aula 05</title>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
</head>
<body>
	<div class="interna">
		<?php
		$var1=$_GET["a"];
		$idade = (2018 - $var1);
		$result = $idade>=18&&$idade<=65? "Obrigatório" : "Não Obrigatório";
		echo "$result";
		
		?>
	</div>
</body>
</html>