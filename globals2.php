<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de globals 2</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	function multiplicar($numero,$otro)
	{
		$numero *= $otro;
		$GLOBALS['cifraB'] = 9;
		return $numero;
	}

	$cifraA = 100;
	$cifraB = 5;

	print("cifraA = ".$cifraA);
	echo "<br>";
	print("cifraB = ".$cifraB);
	echo "<br>";

	$resultado = multiplicar($cifraA,$cifraB);
	print("resultado = ".$resultado);
	print("<br>cifraB vale: ".$cifraB);


?>
	
</body>
</html>