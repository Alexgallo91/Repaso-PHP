<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>>Recorriendo un archivo html con php</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	$archivo =fopen("ejemploClima.html","r");

	while(!feof($archivo))
	{
		$linea = fgetss($archivo,1024);
		echo "$linea<br>";
	}
	fclose($archivo);

	//incluyendo las etiquetas del html
	$archivo =fopen("ejemploClima.html","r");

	while(!feof($ar9chivo))
	{
		$linea = fgetss($archivo,1024,"<p><meta><html>");
		echo "$linea<br>";
	}
	fclose($archivo);
?>
	
</body>
</html>