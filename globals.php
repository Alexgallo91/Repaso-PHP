<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de uso de globals</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	function inflacion($precio,$suba)
	{
		$precio *= $suba;
		global $aumento;
		$aumento = 1.50;
		return $precio;
	}

	$producto = 100;
	$aumento = 1.10;
	print("<p>El producto 1 vale: $producto antes del aumento ".
		  ", y la variable \$aumento todavia vale: $aumento</p>");

	$resultado = inflacion($producto, $aumento);

	print("<p>Ahora el producto 1 vale: $resultado</p>");
	print("<p>La variable \$aumento despues de llamar a la funcion vale: ");
	print($aumento."</p>");
?>
	
</body>
</html>