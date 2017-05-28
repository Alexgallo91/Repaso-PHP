<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Imagenes random</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	$archivo = "fotos.txt";
	$fotos = file($archivo);
	shuffle($fotos);

	echo "<img src=\"fotos/$fotos[0]\" alt=\"Una imagen random\" height=\"300\" width=\"300\">";

	$abierto = fopen("datos.txt","r");
	//fpassthru($abierto);
	//fclose($abierto);

	//$principio = fread($abierto,19);
	//fclose($abierto);
	//print($principio);
	
	//$caracter = fgetc($abierto);
	//print($caracter);
	//fclose($abierto);
	
	/*
	$cadena = "";
	while (!feof($abierto))
	{
		$nuevo = fgetc($abierto);
		//concatena un string
		$cadena .= $nuevo;
	}
	fclose($abierto);
	print($cadena);
	*/

	/*
	$texto = "";
	while(false !== ($caracter = fgetc($abierto)))
	{
		if($caracter != "z")
			$texto .= $caracter;
		else
		{
			echo "<h2>Se encontro una z</h2>";
			break;
		}

	}

	print($texto);
	fclose($abierto);
	*/

	/*
	$caracteres = fgets($abierto,12);
	fclose($abierto);
	print($caracteres);
	*/

	$abierto_2 = fopen("ejemploClima.html","r");
	$caracteres = fgetss($abierto_2,150);
	print($caracteres);
	fclose($abierto_2);
?>
	
</body>
</html>