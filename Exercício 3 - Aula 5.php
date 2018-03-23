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
		$var2=$_GET["b"];

		$result=(($var1+$var2)/2)>=7? "APROVADO" : "REPROVADO";
		echo "$result";
		
		?>
	</div>
</body>
</html>