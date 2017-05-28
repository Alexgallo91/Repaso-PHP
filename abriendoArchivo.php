<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Abriendo archivo con PHP</title>
</head>
<body>
<?php  
	$archivo = "datos.txt";
	$lineas = file($archivo);

	for ($i=0; $i < count($lineas) ; $i++) {
		print("<p>La linea ".($i+1)." contiene: ".$lineas[$i]."</p>");
	}
	shuffle($lineas);
	echo "<h1>Frase random: $lineas[0]</h1>";

	print_r($lineas);
	
?>
</body>
</html>